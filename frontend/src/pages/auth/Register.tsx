import { Box, Button, Paper, TextField, Typography } from "@mui/material";
import PhoneInput from "../../ui/PhoneInput.tsx";
import { useForm, useWatch } from "react-hook-form";
import { Link, Navigate, useNavigate } from "react-router";
import { useAuth } from "../../hooks/useAuth.ts";
import PasswordInput from "../../ui/PasswordInput.tsx";
import type { RegisterRequest, RegisterResponse } from "../../types/User.ts";
import { userApi } from "../../services/user/userApi.ts";

const Register = () => {
  const { isAuthenticated, login } = useAuth();
  const navigate = useNavigate();

  const {
    register,
    handleSubmit,
    control,
    formState: { errors, isSubmitting },
  } = useForm<RegisterRequest>({
    mode: "onChange",
  });

  const password = useWatch({
    control,
    name: "password",
  });

  const onSubmit = async (data: RegisterRequest) => {
    data = {
      ...data,
      user_status_id: 1,
      role_ids: [3],
    };

    const response = (await userApi.register(data)) as RegisterResponse;

    if (!response.user) {
      return false;
    }

    login(response.token, response.user);
    navigate("/");
  };

  if (isAuthenticated) {
    return <Navigate to={"/"} replace />;
  }

  return (
    <Box className="from-primary-50 via-primary-100 to-primary-200 flex min-h-screen items-center justify-center bg-linear-to-bl p-4">
      <Paper className="w-full max-w-2xl rounded-xl! p-6 shadow-2xl! sm:p-10">
        <form className="flex flex-col gap-4" onSubmit={handleSubmit(onSubmit)}>
          <Typography
            variant="h4"
            className="text-info-500 mb-2 text-center font-bold! select-none"
          >
            هتل هاب
          </Typography>
          <Typography className="border-primary-100 mb-4! border-b-2 pb-2 text-center text-sm text-gray-500 select-none">
            به خانواده بزرگ ما خوش آمدید.
          </Typography>

          <div className="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <TextField
              label="نام"
              fullWidth
              type="text"
              error={!!errors.first_name}
              helperText={errors.first_name?.message}
              {...register("first_name", {
                required: "نام الزامی است",
              })}
            />

            <TextField
              label="نام خانوادگی"
              fullWidth
              type="text"
              error={!!errors.last_name}
              helperText={errors.last_name?.message}
              {...register("last_name", {
                required: "نام خانوادگی الزامی است",
              })}
            />

            <TextField
              label="ایمیل"
              fullWidth
              type="email"
              error={!!errors.email}
              helperText={errors.email?.message}
              {...register("email", {
                required: "ایمیل الزامی است",
              })}
            />

            <PhoneInput<RegisterRequest>
              register={register}
              errors={errors}
              name={"phone"}
            />

            <PasswordInput<RegisterRequest>
              label={"رمز عبور"}
              register={register}
              errors={errors}
              name={"password"}
            />

            <PasswordInput<RegisterRequest>
              label="تایید رمز عبور"
              register={register}
              errors={errors}
              name={"password_confirmation"}
              validation={{
                required: "تایید رمز عبور الزامی است",
                validate: (value: string) => {
                  if (!value) return "تایید رمز عبور الزامی است";
                  if (value !== password)
                    return "رمز عبور و تکرار آن مطابقت ندارند";
                  return true;
                },
              }}
            />
          </div>

          <Button
            type="submit"
            variant="contained"
            fullWidth
            size="large"
            disabled={isSubmitting}
            className="mt-2"
          >
            {isSubmitting ? "در حال ثبت نام..." : "ثبت نام"}
          </Button>

          <Typography className="mt-2! flex justify-center gap-1 text-sm text-gray-500">
            <span>قبلا ثبت نام کرده اید؟</span>
            <Link to="/login" className="text-info-500! font-semibold">
              وارد شوید
            </Link>
          </Typography>
        </form>
      </Paper>
    </Box>
  );
};

export default Register;
