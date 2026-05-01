import axiosInstance from "../axios.config.ts";
import type { LoginRequest } from "../../types/Auth.ts";

export const authApi = {
  login: async (data: LoginRequest) => {
    const response = await axiosInstance.post("/login", data);
    return response.data;
  },

  logout: async () => {
    await axiosInstance.post("/logout");
  },
};
