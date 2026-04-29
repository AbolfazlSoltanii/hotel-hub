import type { AlertColor } from "@mui/material";

export interface ToastProps {
  open: boolean;
  message: string;
  severity: AlertColor;
  onClose: () => void;
}

export interface ToastState {
  open: boolean;
  message: string;
  severity: AlertColor;
}
