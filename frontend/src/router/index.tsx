import { createBrowserRouter } from "react-router";
import { ProtectedRoute } from "../features/ProtectedRoute.tsx";
import { Suspense } from "react";
import Loading from "../ui/Loading.tsx";
import { AppLayout, Login, NotFound } from "./lazyImports.ts";
import Register from "../pages/auth/Register.tsx";
import Profile from "../pages/user/Profile.tsx";

const index = createBrowserRouter([
  {
    path: "login",
    element: (
      <Suspense fallback={<Loading />}>
        <Login />
      </Suspense>
    ),
  },
  {
    path: "register",
    element: (
      <Suspense fallback={<Loading />}>
        <Register />
      </Suspense>
    ),
  },
  {
    element: <ProtectedRoute />,
    children: [
      {
        element: (
          <Suspense fallback={<Loading />}>
            <AppLayout />
          </Suspense>
        ),
        children: [
          { index: true, element: <div>صفحه‌ی اصلی</div> },
          {
            path: "profile",
            element: <Profile />,
          },
        ],
      },
    ],
  },
  {
    path: "*",
    element: (
      <Suspense fallback={<Loading />}>
        <NotFound />
      </Suspense>
    ),
  },
]);

export default index;
