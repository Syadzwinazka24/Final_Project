import React, { useEffect, useState } from "react";
import logo from '../../../public/img/logo-removebg-preview.png';
import Button from './Button';
import { Link } from "react-scroll";
const Navbar = () => {
  const [sticky, setSticky] = useState(false);
  const [open, setOpen] = useState(false);
  const menuLinks = [
    { name: "HOME", link: "#HOME" },
    { name: "INFORMATION", link: "#INFORMATION" },
    { name: "PATIENT DATA", link: "#PATIENT DATA" },
    { name: "HISTORY", link: "#HISTORY" },
    { name: "LOGIN", link: "#LOGIN" },
  ];
  useEffect(() => {
    window.addEventListener("scroll", () => {
      const nav = document.querySelector("nav");
      window.scrollY > 0 ? setSticky(true) : setSticky(false);
    });
  }, []);
  return (
    <nav
      className={`fixed w-full left-0 top-0 z-[999]  ${sticky ? "bg-white/60  text-gray-900" : "text-white"
        }`}
    >
      <div className="flex items-center justify-between">
        <div className="mx-7 flex justify-between a w-20">
          <h4 className="text-4xl flex uppercase font-bold">
            <img src={logo} alt="" width="100%" className='flex pt-2' />
            <span className="text-cyan-600 pt-7">U<span className="text-white">K</span>S</span>
          </h4>
        </div>
        <div
          // className={` ${sticky ? "md:bg-white/0 bg-white" : "bg-white"
          //   } text-gray-900 md:block  px-7 py-2 font-medium  rounded-bl-full`}
        >

          <ul className="md:flex hidden items-center gap-1 py-2 text-lg">

            <li
              className="px-6 hover:text-cyan-600"
            >
              <a href="/">HOME</a>
            </li>
            <li
              className="px-6 hover:text-cyan-600"
            >
              <a href="/info">INFORMATION</a>
            </li>
            <li
              className="px-6 hover:text-cyan-600"
            >
              <a href="/data">PATIENT DATA</a>
            </li>
            <li
              className="px-6 hover:text-cyan-600"
            >
              <a href="/obat">MEDICINE DATA</a>
            </li>
            <li
              className="px-6 hover:text-cyan-600"
            >
              <a href="/login">LOGIN</a>
            </li>

            {/* mobile */}
            <ul className={`md:flex md:hidden md:items-center `}>
              <li
                className="md:ml-8 text-xl md:my-0 my-7"
              >
                <a href="/" className="text-gray-800">HOME</a>
              </li>
              <li
                className="px-6 hover:text-cyan-600"
              >
                <a href="/info">INFORMATION</a>
              </li>
              <li
                className="px-6 hover:text-cyan-600"
              >
                <a href="/data">PATIENT DATA</a>
              </li>
              <li
                className="px-6 hover:text-cyan-600"
              >
                <a href="/obat">MEDICINE DATA</a>
              </li>
              <li
                className="px-6 hover:text-cyan-600"
              >
                <a href="/login">LOGIN</a>
              </li>
              <Button>
                Get Started
              </Button>
            </ul>
          </ul>
        </div>
        <div
          onClick={() => setOpen(!open)}
          className={`z-[999]  ${open ? "text-gray-900" : "text-gray-100"
            } text-3xl md:hidden m-5`}
        >
          <ion-icon name="menu"></ion-icon>
        </div>
        <div
          className={`md:hidden text-gray-900 absolute w-2/3 h-screen
      px-7 py-2 font-medium bg-white top-0 duration-300 ${open ? "right-0" : "right-[-100%]"
            }`}
        >
        </div>
      </div>
    </nav>
  );
};

export default Navbar;