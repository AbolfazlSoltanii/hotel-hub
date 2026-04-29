import type { User } from "./User.ts";

export interface LoginRequest {
  phone: string;
  password: string;
  remember_me: boolean;
}

export interface LoginResponse {
  token: string;
  user: {
    id: number;
    name: string;
    phone: string;
  };
}

export interface AuthContextType {
  user: User | null;
  token: string | null;
  isLoading: boolean;
  isAuthenticated: boolean;
  login: (token: string, user: User) => void;
  logout: () => void;
}

export interface AuthState {
  user: User | null;
  token: string | null;
  isLoading: boolean;
}

export type AuthAction =
  | { type: "LOGIN"; token: string; user: User }
  | { type: "LOGOUT" }
  | { type: "SET_LOADING"; isLoading: boolean }
  | { type: "RESTORE_AUTH"; token: string; user: User };
