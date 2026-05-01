import type { RegisterRequest } from "../types/user.ts";
import axiosInstance from "../../../services/axios.config.ts";
import type { ProfileRequest } from "../profile/types/profile.ts";

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
