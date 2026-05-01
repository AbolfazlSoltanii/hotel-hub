import type { ProfileAction, ProfileState } from "../types/Profile.ts";

export const initialState: ProfileState = {
  avatar: undefined,
  birthDate: undefined,
  isDirty: false,
  isSubmitting: false,
  errors: {},
};

export const profileReducer = (
  state: ProfileState,
  action: ProfileAction,
): ProfileState => {
  switch (action.type) {
    case "SET_AVATAR":
      return { ...state, avatar: action.payload, isDirty: true };

    case "SET_BIRTH_DATE":
      return { ...state, birthDate: action.payload, isDirty: true };

    case "SET_DIRTY":
      return { ...state, isDirty: action.payload };

    case "RESET_DIRTY":
      return { ...state, isDirty: false };

    case "SET_SUBMITTING":
      return { ...state, isSubmitting: action.payload };

    case "SET_ERRORS":
      return { ...state, errors: action.payload };

    case "CLEAR_ERRORS":
      return { ...state, errors: {} };

    case "RESET_FORM":
      return {
        ...state,
        avatar: action.payload?.avatar,
        birthDate: action.payload?.birth_date
          ? new Date(action.payload.birth_date)
          : undefined,
        isDirty: false,
        errors: {},
      };

    default:
      return state;
  }
};
