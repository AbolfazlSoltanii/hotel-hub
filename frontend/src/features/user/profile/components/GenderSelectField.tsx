import { genderApi } from "../services/genderApi.ts";
import { useEffect, useState } from "react";
import type { Gender } from "../types/gender.ts";
import { CircularProgress, MenuItem, TextField } from "@mui/material";
import { type Control, type FieldErrors, Controller } from "react-hook-form";
import type { ProfileRequest } from "../types/profile.ts";

interface PhoneInputProps {
  errors: FieldErrors<ProfileRequest>;
  defaultValue?: number;
  control: Control<ProfileRequest>;
}

const GenderSelectField = ({
  defaultValue,
  errors,
  control,
}: PhoneInputProps) => {
  const [genders, setGenders] = useState<Gender[]>([]);
  const [loading, setLoading] = useState<boolean>(true);

  useEffect(() => {
    const fetchGenders = async () => {
      try {
        const data = await genderApi.getAll();
        setGenders(data);
      } catch (error) {
        console.log(error);
      } finally {
        setLoading(false);
      }
    };

    fetchGenders().then(() => {});
  }, []);

  return (
    <Controller
      name="gender_id"
      control={control}
      defaultValue={defaultValue}
      rules={{ required: "جنسیت الزامی است" }}
      render={({ field }) => (
        <TextField
          select
          label="جنسیت"
          fullWidth
          value={field.value ?? ""}
          onChange={(e) => field.onChange(Number(e.target.value))}
          error={!!errors.gender_id}
          helperText={errors.gender_id?.message as string}
          slotProps={{
            inputLabel: { shrink: true },
            select: {
              MenuProps: {
                disableScrollLock: true,
              },
            },
          }}
        >
          {loading ? (
            <MenuItem disabled>
              <CircularProgress size={20} className="mx-auto" />
            </MenuItem>
          ) : (
            genders.map((gender) => (
              <MenuItem key={gender.id} value={gender.id}>
                {gender.title}
              </MenuItem>
            ))
          )}
        </TextField>
      )}
    />
  );
};

export default GenderSelectField;
