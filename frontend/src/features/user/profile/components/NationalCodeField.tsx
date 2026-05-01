import type { FieldErrors, UseFormRegister } from "react-hook-form";
import type { ProfileRequest } from "../types/profile.ts";
import { TextField } from "@mui/material";

interface NationalCodeFieldProps {
  errors: FieldErrors<ProfileRequest>;
  register: UseFormRegister<ProfileRequest>;
}

const NationalCodeField = ({ errors, register }: NationalCodeFieldProps) => {
  return (
    <TextField
      label="کد ملی"
      type="text"
      fullWidth
      error={!!errors.national_code}
      helperText={errors.national_code?.message}
      {...register("national_code", {
        required: "کد ملی الزامی است",
        minLength: { value: 10, message: "کد ملی باید 10 رقم باشد" },
        maxLength: { value: 10, message: "کد ملی باید 10 رقم باشد" },
        pattern: {
          value: /^[0-9]{10}$/,
          message: "کد ملی باید فقط شامل اعداد باشد",
        },
      })}
    />
  );
};

export default NationalCodeField;
