import type {
  FieldErrors,
  FieldValues,
  Path,
  RegisterOptions,
  UseFormRegister,
} from "react-hook-form";
import { IconButton, TextField } from "@mui/material";
import { useState } from "react";
import { Visibility, VisibilityOff } from "@mui/icons-material";

interface PasswordInputProps<TFormValues extends FieldValues> {
  register: UseFormRegister<TFormValues>;
  errors: FieldErrors<TFormValues>;
  name: Path<TFormValues>;
  label?: string;
  validation?: {
    required?: string;
    minLength?: {
      value: number;
      message: string;
    };
    validate?: (value: string) => string | true;
  };
}

const PasswordInput = <TFormValues extends FieldValues>({
  register,
  errors,
  name,
  label,
  validation = {},
}: PasswordInputProps<TFormValues>) => {
  const [showPassword, setShowPassword] = useState<boolean>(false);

  const defaultValidation: RegisterOptions<TFormValues, Path<TFormValues>> = {
    required: `${label} الزامی است`,
    minLength: {
      value: 4,
      message: `${label} حداقل 4 کاراکتر است`,
    },
  };

  const finalValidation = {
    ...defaultValidation,
    ...validation,
  } as RegisterOptions<TFormValues, Path<TFormValues>>;

  return (
    <div className="relative w-full">
      <TextField
        label={label}
        fullWidth={true}
        type={showPassword ? "text" : "password"}
        error={!!errors[name]}
        helperText={errors[name]?.message as string}
        {...register(name, finalValidation)}
      />
      <IconButton
        onClick={() => setShowPassword(!showPassword)}
        className="absolute! top-1/5 left-2"
        size="small"
      >
        {showPassword ? <VisibilityOff /> : <Visibility />}
      </IconButton>
    </div>
  );
};

export default PasswordInput;
