import {
  type Control,
  Controller,
  type FieldErrors,
  type UseFormSetValue,
} from "react-hook-form";
import { DatePicker } from "@mui/x-date-pickers";
import type {
  ProfileAction,
  ProfileRequest,
  ProfileState,
} from "../types/profile.ts";
import type { ActionDispatch } from "react";

interface BirthDateFieldProps {
  dispatch: ActionDispatch<[action: ProfileAction]>;
  control: Control<ProfileRequest, ProfileRequest>;
  errors: FieldErrors<ProfileRequest>;
  state: ProfileState;
  setValue: UseFormSetValue<ProfileRequest>;
}

const BirthDateField = ({
  dispatch,
  control,
  errors,
  state,
  setValue,
}: BirthDateFieldProps) => {
  const handleDateChange = (date: Date | null) => {
    dispatch({ type: "SET_BIRTH_DATE", payload: date || undefined });

    if (date) {
      const formattedDate = date.toISOString().split("T")[0];
      setValue("birth_date", formattedDate, { shouldValidate: true });
    } else {
      setValue("birth_date", "", { shouldValidate: true });
    }
  };

  return (
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
  );
};

export default BirthDateField;
