import type { AuthAction, AuthState } from "../types/Auth.ts";

export const initialState = {
  token: null,
  user: null,
  isLoading: true,
};

export const authReducer = (
  state: AuthState,
  action: AuthAction,
): AuthState => {
  switch (action.type) {
    case "LOGIN":
      return {
        user: action.user,
        token: action.token,
        isLoading: false,
      };

    case "LOGOUT":
      return {
        user: null,
        token: null,
        isLoading: false,
      };

    case "SET_LOADING":
      return {
        ...state,
        isLoading: action.isLoading,
      };

    case "RESTORE_AUTH":
      return {
        user: action.user,
        token: action.token,
        isLoading: false,
      };

    default:
      return state;
  }
};
