import { type FC, useState, useRef } from "react";
import { Avatar, IconButton, CircularProgress, Box } from "@mui/material";
import { PhotoCamera, Delete } from "@mui/icons-material";
import * as React from "react";

interface AvatarUploadProps {
  value?: string;
  onChange?: (url: string) => void;
  disabled?: boolean;
}

const AvatarUpload: FC<AvatarUploadProps> = ({
  value = "",
  onChange,
  disabled = false,
}) => {
  const [preview, setPreview] = useState<string>(value);
  const [loading, setLoading] = useState(false);
  const fileInputRef = useRef<HTMLInputElement>(null);

  const handleFileChange = async (
    event: React.ChangeEvent<HTMLInputElement>,
  ) => {
    const file = event.target.files?.[0];
    if (!file) return;

    if (!file.type.startsWith("image/")) {
      alert("لطفاً فقط فایل تصویری انتخاب کنید");
      return;
    }

    if (file.size > 2 * 1024 * 1024) {
      alert("حجم تصویر باید کمتر از 2 مگابایت باشد");
      return;
    }

    const reader = new FileReader();
    reader.onload = (e) => {
      setPreview(e.target?.result as string);
    };
    reader.readAsDataURL(file);

    setLoading(true);
    try {
      // TODO: ارتباط با API آپلود
      // const response = await uploadApi.uploadAvatar(file);
      // onChange?.(response.url);

      // برای حال حاضر فقط شبیه‌سازی
      setTimeout(() => {
        onChange?.(reader.result as string);
        setLoading(false);
      }, 1000);
    } catch (error) {
      console.error("Error uploading avatar:", error);
      setLoading(false);
    }
  };

  const handleRemove = () => {
    setPreview("");
    onChange?.("");
    if (fileInputRef.current) {
      fileInputRef.current.value = "";
    }
  };

  return (
    <Box className="flex flex-col items-center gap-3">
      <Box className="relative">
        <Avatar
          src={preview}
          sx={{
            width: 100,
            height: 100,
            fontSize: 40,
          }}
        >
          {preview}
        </Avatar>

        {loading && (
          <Box className="absolute inset-0 flex items-center justify-center rounded-full bg-black/50">
            <CircularProgress size={24} sx={{ color: "white" }} />
          </Box>
        )}

        <IconButton
          size="small"
          className="absolute right-0! bottom-0 bg-white! shadow-md hover:bg-[#f5f5f5]!"
          onClick={() => fileInputRef.current?.click()}
          disabled={disabled || loading}
        >
          <PhotoCamera sx={{ fontSize: 18, color: "#1A3A5F" }} />
        </IconButton>

        {preview && (
          <IconButton
            size="small"
            className="absolute bottom-0 left-0! bg-white! shadow-md"
            onClick={handleRemove}
            disabled={disabled || loading}
          >
            <Delete sx={{ fontSize: 18, color: "#ef4444" }} />
          </IconButton>
        )}
      </Box>

      <input
        ref={fileInputRef}
        type="file"
        accept="image/*"
        className="hidden"
        onChange={handleFileChange}
        disabled={disabled || loading}
      />

      <p className="text-xs text-gray-400">حداکثر حجم 2 مگابایت</p>
    </Box>
  );
};

export default AvatarUpload;
