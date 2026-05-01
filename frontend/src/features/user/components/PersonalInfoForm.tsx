import { TextField } from "@mui/material";
import type {
  FieldErrors,
  FieldValues,
  Path,
  UseFormRegister,
} from "react-hook-form";

interface PersonalInfoFormProps<TFormValues extends FieldValues> {
  errors: FieldErrors<TFormValues>;
  register: UseFormRegister<TFormValues>;
}

const PersonalInfoForm = <TFormValues extends FieldValues>({
  errors,
  register,
}: PersonalInfoFormProps<TFormValues>) => {
  return (
    <div className={"grid grid-cols-1 gap-4 sm:grid-cols-2"}>
      <TextField
        label="نام"
        type="text"
        fullWidth
        error={!!errors["first_name"]}
        helperText={errors["first_name"]?.message as string}
        {...register("first_name" as Path<TFormValues>, {
          required: "نام الزامی است",
          minLength: { value: 2, message: "نام حداقل 2 کاراکتر است" },
        })}
      />
      <TextField
        label="نام خانوادگی"
        type="text"
        fullWidth
        error={!!errors["last_name"]}
        helperText={errors["last_name"]?.message as string}
        {...register("last_name" as Path<TFormValues>, {
          required: "نام خانوادگی الزامی است",
          minLength: {
            value: 2,
            message: "نام خانوادگی حداقل 2 کاراکتر است",
          },
        })}
      />
    </div>
  );
};

export default PersonalInfoForm;
