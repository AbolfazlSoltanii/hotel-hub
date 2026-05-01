import { NavLink } from "react-router";

const Navigation = () => {
  return (
    <nav className="flex items-center gap-8 font-medium text-white">
      <NavLink
        to="/"
        className="transition-all duration-200 hover:font-bold hover:text-gray-200"
      >
        خانه
      </NavLink>
      <NavLink
        to="/hotels"
        className="transition-all duration-200 hover:font-bold hover:text-gray-200"
      >
        هتل
      </NavLink>
      <NavLink
        to="/about"
        className="transition-all duration-200 hover:font-bold hover:text-gray-200"
      >
        درباره ما
      </NavLink>
      <NavLink
        to="/contact"
        className="transition-all duration-200 hover:font-bold hover:text-gray-200"
      >
        تماس با ما
      </NavLink>
    </nav>
  );
};

export default Navigation;
