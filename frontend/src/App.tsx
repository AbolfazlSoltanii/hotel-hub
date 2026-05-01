import { type FC, useEffect } from "react";
import { RouterProvider } from "react-router";
import { ThemeProvider, createTheme } from "@mui/material/styles";
import { CssBaseline } from "@mui/material";
import { CacheProvider } from "@emotion/react";
import createCache from "@emotion/cache";
import rtlPlugin from "stylis-plugin-rtl";
import { LocalizationProvider } from "@mui/x-date-pickers";
import { AdapterDateFnsJalali } from "@mui/x-date-pickers/AdapterDateFnsJalali";
import { faIR } from "date-fns-jalali/locale/fa-IR";

import { useToast } from "./hooks/useToast";
import { setGlobalToastHandler } from "./services/axios.config";
import Toast from "./ui/Toast";
import { AuthProvider } from "./features/user/context/AuthContext.tsx";
import index from "./router";

const theme = createTheme({ direction: "rtl" });

const cacheRtl = createCache({
  key: "mui-rtl",
  stylisPlugins: [rtlPlugin],
});

const App: FC = () => {
  const { toast, showToast, hideToast } = useToast();

  useEffect(() => {
    setGlobalToastHandler(showToast);
  }, [showToast]);

  return (
    <AuthProvider>
      <LocalizationProvider
        dateAdapter={AdapterDateFnsJalali}
        adapterLocale={faIR}
      >
        <CacheProvider value={cacheRtl}>
          <ThemeProvider theme={theme}>
            <CssBaseline />
            <RouterProvider router={index} />
          </ThemeProvider>
        </CacheProvider>
        <Toast
          open={toast.open}
          message={toast.message}
          severity={toast.severity}
          onClose={hideToast}
        />
      </LocalizationProvider>
    </AuthProvider>
  );
};

export default App;
