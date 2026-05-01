import axiosInstance from "../../../../services/axios.config.ts";

export const genderApi = {
  getAll: async () => {
    const response = await axiosInstance.get("/gender");
    return response.data.data;
  },
};
