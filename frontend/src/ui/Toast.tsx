import { Snackbar, Alert } from "@mui/material";
import type { ToastProps } from "../types/Toast.ts";

const Toast = ({ open, message, severity, onClose }: ToastProps) => {
  const getGradient = () => {
    switch (severity) {
      case "success":
        return "linear-gradient(135deg, #10b981 0%, #059669 100%)";
      case "error":
        return "linear-gradient(135deg, #ef4444 0%, #dc2626 100%)";
      case "warning":
        return "linear-gradient(135deg, #f59e0b 0%, #d97706 100%)";
      case "info":
        return "linear-gradient(135deg, #3b82f6 0%, #2563eb 100%)";
      default:
        return "none";
    }
  };

  return (
    <Snackbar
      open={open}
      autoHideDuration={3000}
      onClose={onClose}
      anchorOrigin={{ vertical: "top", horizontal: "center" }}
    >
      <Alert
        onClose={onClose}
        severity={severity}
        icon={false}
        sx={{
          background: getGradient(),
          color: "white",
          borderRadius: "16px",
          minWidth: "300px",
          boxShadow: "0 10px 40px -12px rgba(0,0,0,0.3)",
          backdropFilter: "blur(10px)",
          "& .MuiAlert-message": {
            fontWeight: 500,
            fontSize: "0.95rem",
            flexGrow: 1,
            textAlign: "right",
          },
          "& .MuiAlert-action": {
            padding: 0,
            marginRight: 0,
            marginLeft: 0,
            "& .MuiIconButton-root": {
              color: "white",
              marginRight: "0px",
              marginLeft: "auto",
              padding: "8px",
              order: 1,
              "&:hover": {
                backgroundColor: "rgba(255,255,255,0.2)",
              },
            },
          },
        }}
      >
        {message}
      </Alert>
    </Snackbar>
  );
};

export default Toast;
