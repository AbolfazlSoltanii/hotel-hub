import type { RegisterRequest } from "../../types/User/User.ts";
import axiosInstance from "../axios.config.ts";
import type { ProfileRequest } from "../../features/user/profile/types/Profile.ts";

export const userApi = {
  register: async (data: RegisterRequest) => {
    const response = await axiosInstance.post("/register", data);
    return response.data;
  },

  updateProfile: async (data: ProfileRequest, userId?: number) => {
    const response = await axiosInstance.patch(`/user-profile/${userId}`, data);
    return response.data;
  },
};
