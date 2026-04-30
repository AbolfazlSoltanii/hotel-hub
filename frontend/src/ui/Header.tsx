import type { FC } from "react";
import Logo from "./Logo";
import { Avatar, Container } from "@mui/material";
import { useAuth } from "../hooks/useAuth.ts";

const Header: FC = () => {
  const { isAuthenticated, user } = useAuth();
  const fullName = user?.full_name;

  return (
    <header className="bg-primary-500 p-2">
      <Container className="flex items-center justify-between">
        <div>
          <Logo />
        </div>

        <nav className="flex items-center gap-6 font-medium text-white">
          <a href={"/"} className="hover:font-bold hover:text-gray-200">
            خانه
          </a>
          <a href="/hotels" className="hover:font-bold hover:text-gray-200">
            هتل
          </a>
          <a href="/about" className="hover:font-bold hover:text-gray-200">
            درباره ما
          </a>
          <a href="/contact" className="hover:font-bold hover:text-gray-200">
            تماس با ما
          </a>
        </nav>

        <div className="flex items-center justify-center gap-3">
          <Avatar />
          <span className="cursor-pointer text-white">
            {isAuthenticated ? fullName : "ورود"}
          </span>
        </div>
      </Container>
    </header>
  );
};

export default Header;
