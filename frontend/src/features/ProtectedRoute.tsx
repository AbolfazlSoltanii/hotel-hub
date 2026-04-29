import { Navigate, Outlet } from "react-router";
import { useAuth } from "../hooks/useAuth";
import Loading from "../ui/Loading.tsx";

export const ProtectedRoute = () => {
  const { isAuthenticated, isLoading } = useAuth();

  if (isLoading) {
    return <Loading />;
  }

  return isAuthenticated ? <Outlet /> : <Navigate to="/login" replace />;
};
