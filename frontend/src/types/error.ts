export interface ErrorResponse {
  message?: string;
  errors?: {
    [key: string]: string[];
  };
}

export type ToastSeverity = "success" | "error" | "warning" | "info";
export type ToastHandler = (message: string, severity: ToastSeverity) => void;
