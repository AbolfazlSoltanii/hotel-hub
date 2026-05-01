import { type FC } from "react";
import { useState } from "react";
import Logo from "./Logo";
import {
  Avatar,
  Container,
  Menu,
  MenuItem,
  Divider,
  IconButton,
  CircularProgress,
} from "@mui/material";
import { useAuth } from "../hooks/useAuth.ts";
import { useNavigate } from "react-router";
import {
  AccountCircle,
  Logout,
  KeyboardArrowDown,
  KeyboardArrowUp,
} from "@mui/icons-material";
import * as React from "react";
import Navigation from "./Navigation.tsx";
import { authApi } from "../services/auth/authApi.ts";

const Header: FC = () => {
  const [anchorEl, setAnchorEl] = useState<null | HTMLElement>(null);
  const [isLoggingOut, setIsLoggingOut] = useState(false);
  const { isAuthenticated, user, logout } = useAuth();
  const navigate = useNavigate();

  const firstName = user?.first_name;
  const lastName = user?.last_name;
  const open = Boolean(anchorEl);

  const handleClick = (event: React.MouseEvent<HTMLElement>) => {
    setAnchorEl(event.currentTarget);
  };

  const closeMenu = () => {
    setAnchorEl(null);
  };

  const handleProfile = () => {
    closeMenu();
    navigate("/profile");
  };

  const handleLogout = async () => {
    setIsLoggingOut(true);

    await authApi.logout().then(() => {
      closeMenu();

      logout();
      navigate("/login");

      setIsLoggingOut(false);
    });
  };

  return (
    <header className="bg-primary-500 fixed top-0 right-0 left-0 z-50 py-2 shadow-md">
      <Container className="flex items-center justify-between">
        <Logo />
        <Navigation />

        {isAuthenticated ? (
          <div className="flex items-center gap-2">
            <div
              className="flex cursor-pointer items-center gap-2 rounded-lg px-3 py-1.5 transition-all duration-200"
              onClick={handleClick}
            >
              <Avatar className="h-9 w-9 cursor-pointer bg-[#C9A03D]!">
                {firstName?.charAt(0) || "U"}
              </Avatar>

              <span className="text-sm font-medium text-white select-none">
                {firstName} {lastName}
              </span>

              <IconButton
                size="small"
                className="p-0.5! text-white! hover:bg-white/10!"
                disabled={isLoggingOut}
              >
                {open ? <KeyboardArrowUp /> : <KeyboardArrowDown />}
              </IconButton>
            </div>

            <Menu
              anchorEl={anchorEl}
              open={open}
              onClose={closeMenu}
              disableScrollLock={true}
              anchorOrigin={{
                vertical: "bottom",
                horizontal: "center",
              }}
              transformOrigin={{
                vertical: "top",
                horizontal: "center",
              }}
              slotProps={{
                paper: {
                  className: "!w-[200px] !max-w-none mt-1 rounded-xl shadow-lg",
                },
              }}
            >
              <MenuItem
                onClick={handleProfile}
                className="flex gap-2 px-5 py-2.5"
                disabled={isLoggingOut}
              >
                <AccountCircle sx={{ fontSize: 20, color: "#1A3A5F" }} />
                <span>حساب کاربری</span>
              </MenuItem>

              <Divider className="my-0.5" />

              <MenuItem
                onClick={handleLogout}
                className="flex gap-2 px-5 py-2.5"
                disabled={isLoggingOut}
              >
                {isLoggingOut ? (
                  <>
                    <CircularProgress size={18} sx={{ color: "#ef4444" }} />
                    <span className="text-red-500">در حال خروج...</span>
                  </>
                ) : (
                  <>
                    <Logout sx={{ fontSize: 20, color: "#ef4444" }} />
                    <span className="text-red-500">خروج</span>
                  </>
                )}
              </MenuItem>
            </Menu>
          </div>
        ) : (
          <div
            className="flex cursor-pointer items-center gap-2 rounded-lg px-3 py-1.5 transition-all duration-200"
            onClick={() => navigate("/login")}
          >
            <Avatar className="h-9 w-9 bg-[#C9A03D]!" />
            <span className="text-sm font-medium text-white">ورود</span>
          </div>
        )}
      </Container>
    </header>
  );
};

export default Header;
