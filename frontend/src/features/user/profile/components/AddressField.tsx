import { TextField } from "@mui/material";
import type { FieldErrors, UseFormRegister } from "react-hook-form";
import type { ProfileRequest } from "../types/profile.ts";

interface AddressFieldProps {
  errors: FieldErrors<ProfileRequest>;
  register: UseFormRegister<ProfileRequest>;
}

const AddressField = ({ errors, register }: AddressFieldProps) => {
  return (
    <TextField
      label="آدرس"
      type="text"
      fullWidth
      error={!!errors.address}
      helperText={errors.address?.message}
      placeholder="آدرس خود را وارد کنید..."
      {...register("address", {
        required: "آدرس الزامی است",
        minLength: { value: 5, message: "آدرس حداقل 5 کاراکتر است" },
      })}
    />
  );
};

export default AddressField;
