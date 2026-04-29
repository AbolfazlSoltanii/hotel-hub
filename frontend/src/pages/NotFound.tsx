import type { FC } from "react";
import { Box, Button, Container, Paper } from "@mui/material";
import { Link } from "react-router";
import { Home as HomeIcon, Search as SearchIcon } from "@mui/icons-material";

const NotFound: FC = () => {
  return (
    <Box className="relative flex min-h-screen items-center justify-center overflow-hidden bg-linear-to-br from-[#1A3A5F] to-[#0F2B45] p-4">
      <div className="absolute! top-[-10%]! right-[-10%]! h-75 w-75 rounded-full bg-linear-to-br from-[#C9A03D]/10 to-transparent" />
      <div className="absolute! bottom-[-10%]! left-[-10%]! h-100 w-100 rounded-full bg-linear-to-tr from-[#C9A03D]/10 to-transparent" />

      <Container maxWidth="md">
        <Paper
          elevation={24}
          className="relative overflow-hidden rounded-4xl! bg-white/95 p-[40px_20px] text-center backdrop-blur-[10px] sm:p-[60px_40px]"
        >
          <div className="relative mb-8">
            <h1 className="bg-linear-to-r from-[#1A3A5F] to-[#C9A03D] bg-clip-text text-[120px] font-extrabold tracking-[10px] text-transparent shadow-lg sm:text-[180px] md:text-[220px]">
              404
            </h1>

            <div className="animate-float absolute! top-[20%]! right-[15%]!">
              <span className="text-[40px]">🏨</span>
            </div>

            <div className="animate-float-reverse absolute! bottom-[20%]! left-[10%]!">
              <span className="text-[35px]">🔑</span>
            </div>
          </div>

          <h4 className="mb-3! text-xl font-bold text-[#1A3A5F] sm:text-2xl">
            اوه! صفحه‌ای که دنبالش هستی پیدا نشد!
          </h4>

          <p className="mx-auto mb-8! text-base leading-relaxed text-gray-500">
            متأسفیم، صفحه‌ای که به دنبال آن هستید حذف شده، نام آدرس آن تغییر
            کرده یا موقتاً در دسترس نیست.
          </p>

          <div className="mb-6 flex flex-wrap justify-center gap-4">
            <Button
              component={Link}
              to="/"
              variant="contained"
              startIcon={<HomeIcon />}
              className="hover:to-primary-700 rounded-xl! bg-linear-to-r from-[#1A3A5F] to-[#152E4C] px-6! py-2.5! text-base font-semibold! normal-case shadow-md transition-all hover:from-[#152E4C] hover:shadow-lg"
            >
              بازگشت به صفحه اصلی
            </Button>

            <Button
              component={Link}
              to="/hotels"
              variant="outlined"
              startIcon={<SearchIcon />}
              className="rounded-xl! border-[#C9A03D] px-6! py-2.5! text-base font-semibold! text-[#C9A03D] normal-case transition-all hover:border-[#B48A2E] hover:bg-[#C9A03D]/10"
            >
              جستجوی هتل‌ها
            </Button>
          </div>

          <div className="border-t border-gray-200 pt-6">
            <p className="text-sm text-gray-400">
              یا می‌توانی به یکی از این صفحات بروی:
            </p>
            <div className="mt-3 flex flex-wrap justify-center gap-4">
              <Link
                to="/"
                className="text-sm text-[#1A3A5F] transition hover:underline"
              >
                صفحه اصلی
              </Link>
              <Link
                to="/hotels"
                className="text-sm text-[#1A3A5F] transition hover:underline"
              >
                هتل‌ها
              </Link>
              <Link
                to="/about"
                className="text-sm text-[#1A3A5F] transition hover:underline"
              >
                درباره ما
              </Link>
              <Link
                to="/contact"
                className="text-sm text-[#1A3A5F] transition hover:underline"
              >
                تماس با ما
              </Link>
            </div>
          </div>
        </Paper>
      </Container>

      <style>
        {`
                    @keyframes float {
                        0%, 100% { transform: translateY(0px); }
                        50% { transform: translateY(-15px); }
                    }
                    @keyframes float-reverse {
                        0%, 100% { transform: translateY(0px); }
                        50% { transform: translateY(15px); }
                    }
                    .animate-float {
                        animation: float 3s ease-in-out infinite;
                    }
                    .animate-float-reverse {
                        animation: float-reverse 4s ease-in-out infinite;
                    }
                `}
      </style>
    </Box>
  );
};

export default NotFound;
