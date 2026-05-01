import { Box, TextField, Paper, Button, Divider } from "@mui/material";
import { useAuth } from "../../hooks/useAuth.ts";
import GenderSelect from "../../features/user/profile/components/GenderSelect.tsx";
import AvatarUpload from "../../features/user/profile/components/AvatarUpload.tsx";
import { useForm, Controller, useWatch } from "react-hook-form";
import type { ProfileRequest } from "../../features/user/profile/types/Profile.ts";
import { useEffect, useReducer } from "react";
import { userApi } from "../../services/user/userApi.ts";
import { DatePicker } from "@mui/x-date-pickers";
import { LocalizationProvider } from "@mui/x-date-pickers";
import { AdapterDateFnsJalali } from "@mui/x-date-pickers/AdapterDateFnsJalali";
import { faIR } from "date-fns-jalali/locale/fa-IR";
import {
  profileReducer,
  initialState,
} from "../../features/user/profile/reducers/profileReducer.ts";

const Profile = () => {
  const { user, login, token } = useAuth();
  const userId = user?.id;

  const [state, dispatch] = useReducer(profileReducer, {
    ...initialState,
    avatar: user?.avatar,
    birthDate: user?.birth_date ? new Date(user.birth_date) : undefined,
  });

  const {
    register,
    handleSubmit,
    control,
    formState: { errors, isSubmitting: formIsSubmitting },
    reset,
    setValue,
  } = useForm<ProfileRequest>({
    mode: "onChange",
    defaultValues: {
      first_name: user?.first_name || "",
      last_name: user?.last_name || "",
      national_code: user?.national_code || "",
      birth_date: user?.birth_date || "",
      address: user?.address || "",
      gender_id: user?.gender_id,
    },
  });

  const watchedFields = useWatch({ control });

  useEffect(() => {
    const hasChanges = Object.keys(watchedFields).some(
      (key) =>
        watchedFields[key as keyof ProfileRequest] !==
        user?.[key as keyof typeof user],
    );
    if (hasChanges || state.avatar !== user?.avatar) {
      dispatch({ type: "SET_DIRTY", payload: true });
    } else {
      dispatch({ type: "RESET_DIRTY" });
    }
  }, [watchedFields, state.avatar, user]);

  useEffect(() => {
    if (user) {
      reset({
        first_name: user.first_name || "",
        last_name: user.last_name || "",
        national_code: user.national_code || "",
        birth_date: user.birth_date || "",
        address: user.address || "",
        gender_id: user.gender_id,
      });

      dispatch({ type: "RESET_FORM", payload: user });

      if (user.birth_date) {
        const date = new Date(user.birth_date);
        dispatch({ type: "SET_BIRTH_DATE", payload: date });
        setValue("birth_date", user.birth_date);
      }
    }
  }, [user, reset, setValue]);

  const handleDateChange = (date: Date | null) => {
    dispatch({ type: "SET_BIRTH_DATE", payload: date || undefined });

    if (date) {
      const formattedDate = date.toISOString().split("T")[0];
      setValue("birth_date", formattedDate, { shouldValidate: true });
    } else {
      setValue("birth_date", "", { shouldValidate: true });
    }
  };

  const handleAvatarChange = (newAvatar?: string) => {
    dispatch({ type: "SET_AVATAR", payload: newAvatar });
  };

  const onSubmit = async (data: ProfileRequest) => {
    dispatch({ type: "SET_SUBMITTING", payload: true });
    dispatch({ type: "CLEAR_ERRORS" });

    const submitData = {
      ...data,
      avatar: state.avatar,
    };

    const response = await userApi.updateProfile(submitData, userId);

    if (!response.success) {
      return;
    }

    const updatedUser = {
      ...user,
      first_name: data.first_name,
      last_name: data.last_name,
      national_code: data.national_code,
      birth_date: data.birth_date,
      address: data.address,
      gender_id: data.gender_id,
      avatar: state.avatar,
    };

    localStorage.setItem("user", JSON.stringify(updatedUser));
    login(token || "", updatedUser);

    dispatch({ type: "RESET_DIRTY" });
    reset(data);

    dispatch({ type: "SET_SUBMITTING", payload: false });
  };

  const isSubmitDisabled = formIsSubmitting || !state.isDirty;

  return (
    <LocalizationProvider
      dateAdapter={AdapterDateFnsJalali}
      adapterLocale={faIR}
    >
      <Box className="p-6">
        <Paper className="mx-auto max-w-4xl rounded-2xl p-8 shadow-lg">
          <h2 className="text-primary-500 mb-6! text-2xl font-bold">
            اطلاعات پروفایل کاربری
          </h2>

          <form
            className="flex flex-col gap-5"
            onSubmit={handleSubmit(onSubmit)}
          >
            <div className="mb-4 flex justify-center">
              <AvatarUpload
                value={state.avatar}
                onChange={handleAvatarChange}
              />
            </div>

            <Divider className="my-2!">
              <span className="px-3 text-sm text-gray-400">اطلاعات شخصی</span>
            </Divider>

            <div className="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <TextField
                label="نام"
                type="text"
                fullWidth
                error={!!errors.first_name}
                helperText={errors.first_name?.message}
                {...register("first_name", {
                  required: "نام الزامی است",
                  minLength: { value: 2, message: "نام حداقل 2 کاراکتر است" },
                })}
              />
              <TextField
                label="نام خانوادگی"
                type="text"
                fullWidth
                error={!!errors.last_name}
                helperText={errors.last_name?.message}
                {...register("last_name", {
                  required: "نام خانوادگی الزامی است",
                  minLength: {
                    value: 2,
                    message: "نام خانوادگی حداقل 2 کاراکتر است",
                  },
                })}
              />
            </div>

            <div className="grid grid-cols-1 gap-4 sm:grid-cols-2">
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

              <Controller
                name="birth_date"
                control={control}
                rules={{ required: "تاریخ تولد الزامی است" }}
                render={() => (
                  <DatePicker
                    label="تاریخ تولد"
                    value={state.birthDate}
                    onChange={handleDateChange}
                    slotProps={{
                      textField: {
                        fullWidth: true,
                        error: !!errors.birth_date,
                        helperText: errors.birth_date?.message,
                      },
                    }}
                  />
                )}
              />
            </div>

            <div className="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <TextField
                label="ایمیل"
                type="email"
                fullWidth
                defaultValue={user?.email || ""}
                slotProps={{ input: { readOnly: true } }}
              />
              <TextField
                label="تلفن"
                type="tel"
                fullWidth
                defaultValue={user?.phone || ""}
                slotProps={{ input: { readOnly: true } }}
              />
            </div>

            <div className="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <GenderSelect
                errors={errors}
                defaultValue={user?.gender_id}
                control={control}
              />
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
            </div>

            <div className="mt-6 flex justify-end">
              <Button
                type="submit"
                variant="contained"
                disabled={isSubmitDisabled}
                className="from-primary-500 to-primary-600 rounded-xl! bg-linear-to-r px-8 py-2.5 text-sm font-semibold text-white! normal-case shadow-md transition-all hover:shadow-lg disabled:opacity-50"
              >
                {state.isSubmitting ? "در حال ذخیره..." : "ذخیره تغییرات"}
              </Button>
            </div>
          </form>
        </Paper>
      </Box>
    </LocalizationProvider>
  );
};

export default Profile;
