import React, { useState } from 'react';
import { FaBars, FaTimes } from "react-icons/fa";
import logo from '../../../public/img/logo-removebg-preview.png';

const navlinks = [
  {
    title: "HOME",
    link: "/",
  },
  {
    title: "INFORMATION",
    link: "/info",
  },
  {
    title: "PATIENT DATA",
    link: "/data",
  },
  {
    title: "MEDICINE DATA",
    link: "/obat",
  },
  {
    title: "LOGIN",
    link: "/login",
  },
];

const Navbar = () => {
  const [open, setOpen] = useState(false);

  const handleMenu = () => {
    setOpen((prev) => !prev);
    console.log(open);
  };
  
  return (

    <div className='header a bg-blue-950 a pb-1 fixed w-full a opacity-80'>
      <div className='mx-auto px-4 sm:px-6 lg:px-8'>
        <div className='flex items-center justify-between h-16'>

          <div className='flex justify-between a w-20'>
            <h4 className="text-4xl flex uppercase font-bold">
              <img src={logo} alt="" width="100%" className='flex pt-2' />
              <span className="text-cyan-400 pt-7">U<span className="text-white">K</span>S</span>
            </h4>
          </div>

          {/* navlinks */}
          <div className='hidden md:block'>
            <div className='uppercase a font-extrabold ml-10 flex items-baseline space-x-4'>
              {navlinks.map((link, index) => (
                <a key={index} className='text-white transition-all duration-500 hover:text-cyan-400 px-3 py-2 rounded-md text-md font-medium'
                  href={link.link}
                >
                  {link.title}
                </a>
              ))}
            </div>
          </div>
          {/* hamburger button */}
          <div className='-ml-2 flex md:hidden'>
            <button
              type='button'
              onClick={handleMenu}
              className='inline-flex items-center justify-center p-2 
                rounded-md text-cyan-600 hover:text-slate-600 hover:bg-white 
                focus:outline-none focus:ring-2 focus:ring-offset-2 
                focus:ring-offset-slate-600 focus:ring-white'
            >
              <span className='sr-only'>Open Main Menu</span>
              {open == true ? <FaTimes /> : <FaBars />}
            </button>
          </div>
        </div>
      </div>
      {/* mobile-menu */}
      {open ? (
        <div className='md:hidden'>
          <div className='ox-2 pt-2 pb-3 space-y-1 sm:px-3'>
            {navlinks.map((link, index) => (
              <a
                key={index}
                className='text-gray-200 hover:bg-white hover:text-cyan-600 
              block px-3 py-2 rounded-md text-base font-medium'
                href={link.link}
              >
                {link.title}
              </a>
            ))}
          </div>
        </div>
      ) : null}
    </div>
  );
};

export default Navbar;


















