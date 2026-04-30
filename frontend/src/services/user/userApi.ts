import type { RegisterRequest } from "../../types/User.ts";
import axiosInstance from "../axios.config.ts";

export const userApi = {
  register: async (data: RegisterRequest) => {
    const response = await axiosInstance.post("/register", data);
    return response.data;
  },
};
