import { type FC } from "react";
import {
  Box,
  Button,
  Checkbox,
  FormControlLabel,
  Paper,
  Typography,
  CircularProgress,
} from "@mui/material";
import { useForm } from "react-hook-form";
import { Link, Navigate, useNavigate } from "react-router";
import { authApi } from "../../services/auth/authApi.ts";
import { useAuth } from "../../hooks/useAuth.ts";
import type { LoginRequest, LoginResponse } from "../../types/Auth.ts";
import PhoneInput from "../../ui/PhoneInput.tsx";
import PasswordInput from "../../ui/PasswordInput.tsx";
import { motion } from "framer-motion";

const Login: FC = () => {
  const navigate = useNavigate();
  const { login, isAuthenticated } = useAuth();

  const {
    register,
    handleSubmit,
    formState: { errors, isSubmitting },
  } = useForm<LoginRequest>({
    mode: "onChange",
  });

  const onSubmit = async (data: LoginRequest) => {
    const response = (await authApi.login(data)) as LoginResponse;
    if (!response.user) return;
    login(response.token, response.user);
    navigate("/");
  };

  if (isAuthenticated) {
    return <Navigate to={"/"} replace />;
  }

  return (
    <Box
      className="from-primary-50 via-primary-100 to-primary-200 flex min-h-screen items-center justify-center bg-linear-to-bl p-4"
      sx={{
        position: "relative",
        overflow: "hidden",
        "&::before": {
          content: '""',
          position: "absolute",
          top: "-20%",
          right: "-10%",
          width: "300px",
          height: "300px",
          borderRadius: "50%",
          background:
            "radial-gradient(circle, rgba(201,160,61,0.15) 0%, transparent 70%)",
        },
        "&::after": {
          content: '""',
          position: "absolute",
          bottom: "-20%",
          left: "-10%",
          width: "400px",
          height: "400px",
          borderRadius: "50%",
          background:
            "radial-gradient(circle, rgba(26,58,95,0.1) 0%, transparent 70%)",
        },
      }}
    >
      <motion.div
        initial={{ opacity: 0, y: 20 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ duration: 0.5 }}
        className="w-full max-w-md"
      >
        <Paper className="relative overflow-hidden rounded-2xl! p-8 shadow-2xl!">
          <Box
            className="absolute! top-0! right-0! left-0! h-1!"
            sx={{
              background: "linear-gradient(90deg, #C9A03D, #1A3A5F, #C9A03D)",
              backgroundSize: "200% 100%",
              animation: "gradient 2s ease infinite",
            }}
          />

          <Box className="mb-8 text-center">
            <Box
              className="mx-auto mb-4 flex h-16! w-16! items-center justify-center rounded-xl!"
              sx={{
                background: "linear-gradient(135deg, #1A3A5F 0%, #152E4C 100%)",
                boxShadow: "0 10px 25px -5px rgba(26, 58, 95, 0.3)",
              }}
            >
              <Typography variant="h3" className="text-white!">
                🏨
              </Typography>
            </Box>

            <Typography
              variant="h4"
              className="mb-2! font-bold!"
              sx={{
                background: "linear-gradient(135deg, #1A3A5F 0%, #152E4C 100%)",
                backgroundClip: "text",
                WebkitBackgroundClip: "text",
                color: "transparent",
              }}
            >
              خوش آمدید
            </Typography>

            <Typography className="text-sm! text-gray-400!">
              برای ورود اطلاعات خود را وارد کنید
            </Typography>

            <Box
              className="mx-auto mt-4! h-0.5! rounded-full! md:w-xs!"
              sx={{ background: "linear-gradient(90deg, #C9A03D, #1A3A5F)" }}
            />
          </Box>

          <form
            onSubmit={handleSubmit(onSubmit)}
            className="flex flex-col gap-5"
          >
            <PhoneInput<LoginRequest>
              register={register}
              errors={errors}
              name="phone"
            />

            <PasswordInput<LoginRequest>
              register={register}
              errors={errors}
              name="password"
              label="رمز عبور"
            />

            <div className="flex w-full items-center justify-between">
              <FormControlLabel
                control={<Checkbox {...register("remember_me")} />}
                label="مرا به خاطر بسپار"
                classes={{ label: "!text-[13px] !text-gray-500" }}
              />

              <Link
                to="/forgot-password"
                className="text-[13px]! font-medium! transition-all duration-300 hover:underline md:text-sm!"
                style={{ color: "#C9A03D" }}
              >
                رمزعبور را فراموش کردم؟
              </Link>
            </div>

            <motion.div whileHover={{ scale: 1.02 }} whileTap={{ scale: 0.98 }}>
              <Button
                type="submit"
                variant="contained"
                fullWidth
                size="large"
                disabled={isSubmitting}
                className="py-3! text-base! font-semibold! normal-case! shadow-lg! transition-all duration-300"
                sx={{
                  background:
                    "linear-gradient(135deg, #1A3A5F 0%, #152E4C 100%)!",
                  borderRadius: "12px!",
                  "&:hover": {
                    background:
                      "linear-gradient(135deg, #152E4C 0%, #102339 100%)!",
                    transform: "translateY(-2px)",
                  },
                }}
              >
                {isSubmitting ? (
                  <CircularProgress size={24} sx={{ color: "white" }} />
                ) : (
                  "ورود به حساب کاربری"
                )}
              </Button>
            </motion.div>

            <Typography className="mt-2! text-center text-sm! text-gray-500!">
              عضو هتل هاب نیستید؟{" "}
              <Link
                to="/register"
                className="font-semibold! transition-all duration-300 hover:underline"
                style={{ color: "#C9A03D" }}
              >
                ثبت نام کنید
              </Link>
            </Typography>
          </form>
        </Paper>
      </motion.div>

      <style>
        {`
          @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
          }
        `}
      </style>
    </Box>
  );
};

export default Login;
