import type { FC } from "react";
import { Container } from "@mui/material";
import Header from "../ui/Header.tsx";
import { Outlet } from "react-router";

const AppLayout: FC = () => {
  return (
    <div>
      <Header />

      <Container className={"pt-20"}>
        <Outlet />
      </Container>
    </div>
  );
};

export default AppLayout;
