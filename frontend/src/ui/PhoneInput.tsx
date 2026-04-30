import { TextField } from "@mui/material";
import type {
  FieldErrors,
  FieldValues,
  Path,
  UseFormRegister,
} from "react-hook-form";

interface PhoneInputProps<TFormValues extends FieldValues> {
  register: UseFormRegister<TFormValues>;
  errors: FieldErrors<TFormValues>;
  name: Path<TFormValues>;
}

const PhoneInput = <TFormValues extends FieldValues>({
  register,
  errors,
  name,
}: PhoneInputProps<TFormValues>) => {
  return (
    <TextField
      label={"تلفن"}
      fullWidth={true}
      type={"tel"}
      error={!!errors[name]}
      helperText={errors[name]?.message as string}
      {...register(name, {
        required: "شماره تلفن الزامی است",
        pattern: {
          value: /^09[0-9]{9}$/,
          message: "شماره تلفن باید 11 رقم و با 09 شروع شود",
        },
      })}
    />
  );
};

export default PhoneInput;
