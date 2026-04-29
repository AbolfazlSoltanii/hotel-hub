import { Box, CircularProgress } from "@mui/material";

const Loading = () => {
  return (
    <Box className="flex min-h-screen items-center justify-center">
      <CircularProgress className={"text-secondary-300!"} />
    </Box>
  );
};

export default Loading;
