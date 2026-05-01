import { TextField } from "@mui/material";
import type { User } from "../../types/user.ts";

interface ContractInfoProps {
  user?: User;
}

const ContactInfoForm = ({ user }: ContractInfoProps) => {
  return (
    <div className="grid grid-cols-1 gap-4 sm:grid-cols-2">
      <TextField
        label="ایمیل"
        type="email"
        fullWidth
        defaultValue={user?.email || ""}
        slotProps={{ input: { readOnly: true } }}
      />
      <TextField
        label="تلفن"
        type="tel"
        fullWidth
        defaultValue={user?.phone || ""}
        slotProps={{ input: { readOnly: true } }}
      />
    </div>
  );
};

export default ContactInfoForm;
