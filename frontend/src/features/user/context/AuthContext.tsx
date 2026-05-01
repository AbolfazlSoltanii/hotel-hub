import {
  createContext,
  type FC,
  type ReactNode,
  useEffect,
  useReducer,
} from "react";
import type { User } from "../types/user.ts";
import type { AuthContextType } from "../types/auth.ts";
import { authReducer, initialState } from "../reducers/authReducer.ts";

const AuthContext = createContext<AuthContextType | undefined>(undefined);

export const AuthProvider: FC<{ children: ReactNode }> = ({ children }) => {
  const [{ user, token, isLoading }, dispatch] = useReducer(
    authReducer,
    initialState,
  );

  useEffect(() => {
    const storedToken: string | null = localStorage.getItem("token");
    const storedUser: string | null = localStorage.getItem("user");

    if (storedToken && storedUser) {
      dispatch({
        type: "RESTORE_AUTH",
        user: JSON.parse(storedUser),
        token: storedToken,
      });
    } else {
      dispatch({
        type: "SET_LOADING",
        isLoading: false,
      });
    }
  }, []);

  const login = (newToken?: string, newUser?: User) => {
    dispatch({
      type: "RESTORE_AUTH",
      user: newUser,
      token: newToken,
    });

    localStorage.setItem("token", newToken || "");
    localStorage.setItem("user", JSON.stringify(newUser));
  };

  const logout = () => {
    dispatch({
      type: "LOGOUT",
    });

    localStorage.removeItem("token");
    localStorage.removeItem("user");
  };

  return (
    <AuthContext.Provider
      value={{
        user,
        token,
        isLoading,
        isAuthenticated: !!user && !!token,
        login,
        logout,
      }}
    >
      {children}
    </AuthContext.Provider>
  );
};

export { AuthContext };
