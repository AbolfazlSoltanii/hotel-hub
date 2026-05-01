import {
  Box,
  Button,
  Paper,
  TextField,
  Typography,
  CircularProgress,
} from "@mui/material";
import PhoneInput from "../../ui/PhoneInput.tsx";
import { useForm, useWatch } from "react-hook-form";
import { Link, Navigate, useNavigate } from "react-router";
import { useAuth } from "../../hooks/useAuth.ts";
import PasswordInput from "../../ui/PasswordInput.tsx";
import type {
  RegisterRequest,
  RegisterResponse,
} from "../../types/User/User.ts";
import { userApi } from "../../services/user/userApi.ts";
import { motion } from "framer-motion";

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
    const modifiedData = {
      ...data,
      user_status_id: 1,
      role_ids: [3],
    };

    const response = (await userApi.register(modifiedData)) as RegisterResponse;

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
    <Box
      className="from-primary-50 via-primary-100 to-primary-200 hidde relative flex min-h-screen items-center justify-center overflow-hidden! bg-linear-to-bl p-4"
      sx={{
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
        className="w-full max-w-2xl"
      >
        <Paper className="relative overflow-hidden rounded-2xl! p-6 shadow-2xl! sm:p-10">
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
              عضو شوید
            </Typography>

            <Typography className="text-sm! text-gray-400!">
              به خانواده بزرگ هتل هاب بپیوندید
            </Typography>

            <Box
              className="mx-auto mt-4! h-0.5! rounded-full! md:w-sm!"
              sx={{ background: "linear-gradient(90deg, #C9A03D, #1A3A5F)" }}
            />
          </Box>

          <form
            className="flex flex-col gap-5"
            onSubmit={handleSubmit(onSubmit)}
          >
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
                sx={{
                  "& .MuiOutlinedInput-root": {
                    borderRadius: "12px!",
                  },
                }}
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
                sx={{
                  "& .MuiOutlinedInput-root": {
                    borderRadius: "12px!",
                  },
                }}
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
                sx={{
                  "& .MuiOutlinedInput-root": {
                    borderRadius: "12px!",
                  },
                }}
              />

              <PhoneInput<RegisterRequest>
                register={register}
                errors={errors}
                name="phone"
              />

              <PasswordInput<RegisterRequest>
                label="رمز عبور"
                register={register}
                errors={errors}
                name="password"
              />

              <PasswordInput<RegisterRequest>
                label="تایید رمز عبور"
                register={register}
                errors={errors}
                name="password_confirmation"
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

            <motion.div whileHover={{ scale: 1.02 }} whileTap={{ scale: 0.98 }}>
              <Button
                type="submit"
                variant="contained"
                fullWidth
                size="large"
                disabled={isSubmitting}
                className="mt-4! py-3! text-base! font-semibold! normal-case! shadow-lg! transition-all duration-300"
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
                  "ثبت نام"
                )}
              </Button>
            </motion.div>

            <Typography className="mt-2! text-center text-sm! text-gray-500!">
              قبلا ثبت نام کرده اید؟{" "}
              <Link
                to="/login"
                className="font-semibold! transition-all duration-300 hover:underline"
                style={{ color: "#C9A03D" }}
              >
                وارد شوید
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

export default Register;
