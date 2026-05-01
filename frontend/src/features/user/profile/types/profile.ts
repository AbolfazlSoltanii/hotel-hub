export interface ProfileRequest {
  first_name?: string;
  last_name?: string;
  national_code?: string;
  birth_date?: string;
  gender_id?: number;
  address?: string;
  avatar?: string;
}

export interface ProfileState {
  avatar?: string;
  birthDate?: Date;
  isDirty: boolean;
  isSubmitting: boolean;
  errors: Record<string, string>;
}

export type ProfileAction =
  | { type: "SET_AVATAR"; payload?: string }
  | { type: "SET_BIRTH_DATE"; payload?: Date }
  | { type: "SET_DIRTY"; payload: boolean }
  | { type: "RESET_DIRTY" }
  | { type: "SET_SUBMITTING"; payload: boolean }
  | { type: "SET_ERRORS"; payload: Record<string, string> }
  | { type: "CLEAR_ERRORS" }
  | { type: "RESET_FORM"; payload?: ProfileRequest }
  | { type: "UPDATE_FORM"; payload: Partial<ProfileRequest> };
