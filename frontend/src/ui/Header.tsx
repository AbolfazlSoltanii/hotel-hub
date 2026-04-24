import type { FC } from "react";
import Logo from "./Logo";
import { Avatar, Container } from "@mui/material";

const Header: FC = () => {
    return (
        <header className="bg-[#F59E0B] p-2">
            <Container className="flex items-center justify-between">
                <div>
                    <Logo />
                </div>

                <nav className="flex items-center gap-6 text-white font-medium">
                    <a href={'/'} className="hover:text-gray-200 hover:font-bold">خانه</a>
                    <a href="/hotels" className="hover:text-gray-200 hover:font-bold">هتل</a>
                    <a href="/about" className="hover:text-gray-200 hover:font-bold">درباره ما</a>
                    <a href="/contact" className="hover:text-gray-200 hover:font-bold">تماس با ما</a>
                </nav>

                <div className="flex items-center justify-center gap-3">
                    <Avatar />
                    <span className='text-white cursor-pointer'>ورود | خروج</span>
                </div>
            </Container>
        </header>
    );
}

export default Header;