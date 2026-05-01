import axios, {
  type AxiosError,
  type AxiosResponse,
  type InternalAxiosRequestConfig,
} from "axios";
import type { ErrorResponse, ToastHandler } from "../types/error.ts";

let globalShowToast: ToastHandler | null = null;

export const setGlobalToastHandler = (handler: ToastHandler) => {
  globalShowToast = handler;
};

const axiosInstance = axios.create({
  baseURL: import.meta.env.VITE_API_URL,
  timeout: 10000,
  headers: {
    "Content-Type": "application/json",
    Accept: "application/json",
  },
});

// Request Interceptor
axiosInstance.interceptors.request.use(
  (config: InternalAxiosRequestConfig) => {
    const token = localStorage.getItem("token");

    if (token) {
      config.headers.Authorization = `Bearer ${token}`;
    }

    return config;
  },
  (error: AxiosError) => {
    return Promise.reject(error);
  },
);

// Response Interceptor
axiosInstance.interceptors.response.use(
  (response: AxiosResponse) => {
    if (
      response.config.method &&
      ["post", "patch"].includes(response.config.method.toLowerCase()) &&
      response.data?.message
    ) {
      globalShowToast?.(response.data.message, "success");
    }
    return response;
  },
  (error: AxiosError<ErrorResponse>) => {
    const errorData = error.response?.data;

    if (error.response?.status === 401) {
      localStorage.removeItem("token");
      localStorage.removeItem("user");
      globalShowToast?.("لطفاً دوباره وارد حساب کاربری خود شوید", "error");

      if (window.location.pathname !== "/login") {
        setTimeout(() => {
          window.location.href = "/login";
        }, 1500);
      }
    } else if (error.response?.status === 403) {
      globalShowToast?.("شما دسترسی لازم را ندارید", "error");
    } else if (error.response?.status === 404) {
      globalShowToast?.("منبع مورد نظر یافت نشد", "warning");
    } else if (error.response?.status === 422) {
      if (errorData?.errors) {
        const firstErrorKey = Object.keys(errorData.errors)[0];
        const errorMessage = errorData.errors[firstErrorKey][0];
        globalShowToast?.(errorMessage, "error");
      } else if (errorData?.message) {
        globalShowToast?.(errorData.message, "error");
      } else {
        globalShowToast?.("اطلاعات وارد شده صحیح نمی‌باشد", "error");
      }
    } else if (error.response?.status === 429) {
      globalShowToast?.(
        "درخواست بیش از حد. لطفاً چند لحظه دیگر تلاش کنید",
        "warning",
      );
    } else if (error.response?.status === 500) {
      globalShowToast?.("خطای سرور. لطفاً دقایقی دیگر تلاش کنید", "error");
    } else if (
      error.code === "ECONNABORTED" ||
      error.message?.includes("timeout")
    ) {
      globalShowToast?.(
        "ارتباط با سرور برقرار نشد. لطفاً دوباره تلاش کنید",
        "error",
      );
    } else if (error.message === "Network Error") {
      globalShowToast?.(
        "مشکل در اتصال به اینترنت. لطفاً اتصال خود را بررسی کنید",
        "error",
      );
    } else {
      const message =
        errorData?.message || "خطایی رخ داده است. لطفاً دوباره تلاش کنید";
      globalShowToast?.(message, "error");
    }

    return Promise.reject(error);
  },
);

export default axiosInstance;
