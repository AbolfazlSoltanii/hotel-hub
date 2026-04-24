import { Container } from "@mui/material";
import { type FC } from "react";
import Header from "./ui/Header";

const App: FC = () => {
  return (
    <>
      <Header />

      <Container className="flex justify-center items-center">

        <span className="text-4xl font-bold ">هتل هاب! جایی برای ماندن</span>
      </Container>
    </>
  )
};

export default App;
