import { useState, useCallback } from "react";
import { type AlertColor } from "@mui/material";
import type { ToastState } from "../types/Toast.ts";

export const useToast = () => {
  const [toast, setToast] = useState<ToastState>({
    open: false,
    message: "",
    severity: "info",
  });

  const showToast = useCallback((message: string, severity: AlertColor) => {
    setToast({
      open: true,
      message,
      severity,
    });
  }, []);

  const hideToast = useCallback(() => {
    setToast((prev) => ({ ...prev, open: false }));
  }, []);

  return {
    toast,
    showToast,
    hideToast,
  };
};
