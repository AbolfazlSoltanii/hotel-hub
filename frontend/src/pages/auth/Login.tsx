import { type FC, useState } from "react";
import {
  Box,
  Button,
  Checkbox,
  FormControlLabel,
  Paper,
  TextField,
  Typography,
  IconButton,
} from "@mui/material";
import { Visibility, VisibilityOff } from "@mui/icons-material";
import { useForm } from "react-hook-form";
import { Link, Navigate, useNavigate } from "react-router";
import { authApi } from "../../services/auth/authApi.ts";
import { useAuth } from "../../hooks/useAuth.ts";
import type { LoginRequest, LoginResponse } from "../../types/Auth.ts";

const Login: FC = () => {
  const [showPassword, setShowPassword] = useState<boolean>(false);
  const navigate = useNavigate();

  const { login, isAuthenticated } = useAuth();

  const {
    register,
    handleSubmit,
    formState: { errors, isSubmitting },
  } = useForm<LoginRequest>({
    mode: "onChange",
  });

  if (isAuthenticated) {
    return <Navigate to={"/"} replace />;
  }

  const onSubmit = async (data: LoginRequest) => {
    const response = (await authApi.login(data)) as LoginResponse;

    if (!response.user) {
      return false;
    }

    login(response.token, response.user);
    navigate("/");
  };

  return (
    <Box
      className={
        "from-primary-50 via-primary-100 to-primary-200 flex min-h-screen items-center justify-center bg-linear-to-bl"
      }
    >
      <Paper className={"w-full max-w-md rounded-xl! p-10 shadow-2xl!"}>
        <form
          onSubmit={handleSubmit(onSubmit)}
          className={"flex flex-col items-center justify-center gap-4"}
        >
          <Typography
            variant={"h4"}
            className="text-info-500 mb-2 text-center font-bold! select-none"
          >
            هتل هاب
          </Typography>
          <Typography className="border-primary-100 mb-4! border-b-2 pb-2 text-center text-sm text-gray-500 select-none">
            به خانواده بزرگ ما خوش آمدید.
          </Typography>

          <TextField
            label={"تلفن"}
            fullWidth={true}
            type={"tel"}
            error={!!errors.phone}
            helperText={errors.phone?.message}
            {...register("phone", {
              required: "شماره تلفن الزامی است",
              pattern: {
                value: /^09[0-9]{9}$/,
                message: "شماره تلفن باید 11 رقم و با 09 شروع شود",
              },
            })}
          />

          <div className="relative w-full">
            <TextField
              label={"رمز عبور"}
              fullWidth={true}
              type={showPassword ? "text" : "password"}
              error={!!errors.password}
              helperText={errors.password?.message}
              {...register("password", {
                required: "رمز عبور الزامی است",
                minLength: {
                  value: 4,
                  message: "رمز عبور حداقل 4 کاراکتر است",
                },
              })}
            />
            <IconButton
              onClick={() => setShowPassword(!showPassword)}
              className="absolute! top-1/5 left-2"
              size="small"
            >
              {showPassword ? <VisibilityOff /> : <Visibility />}
            </IconButton>
          </div>

          <div className={"flex w-full items-center justify-between"}>
            <FormControlLabel
              control={<Checkbox {...register("remember_me")} />}
              label="مرا به خاطر بسپار"
              sx={{
                "& .MuiFormControlLabel-label": {
                  fontSize: "0.875rem",
                  color: "#6b7280",
                },
              }}
            />

            <Typography className="text-info-600 text-sm!">
              <Link to={"/forgot-password"}>رمزعبور را فراموش کردم؟</Link>
            </Typography>
          </div>

          <Button
            type={"submit"}
            variant={"contained"}
            fullWidth={true}
            size={"large"}
            disabled={isSubmitting}
          >
            {isSubmitting ? "در حال ورود..." : "ورود به حساب کاربری"}
          </Button>

          <Typography className="mt-3! flex gap-1 text-center text-sm text-gray-500">
            <span>عضو هتل هاب نیستید؟</span>
            <Link to={"/register"} className={"text-info-500! font-semibold"}>
              ثبت نام کنید
            </Link>
          </Typography>
        </form>
      </Paper>
    </Box>
  );
};

export default Login;
