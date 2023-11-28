import React from "react";
import hero from "../../../public/img/hero.png";
const Hero = () => {

  return (
    <section
      id="home"
      className="min-h-screen flex py-10 md:flex-row flex-col items-center bg-gray-800"
    >
      <div className="flex-1 flex items-center justify-center h-full">
        <img src={hero} alt="" className="md:w-11/12 h-full object-cover" />
      </div>
      <div className="flex-1">
        <div className="md:text-left text-center">
          <h1 className="md:text-5xl text-2xl md:leading-normal leading-10 text-white font-bold">
            <span className="text-cyan-600 md:text-6xl text-5xl">
              Welcome to
              <br />
              <span className="text-gray-300 md:text-6xl text-5xl">Website </span>
              <span>UKS</span>
            </span>
   
          </h1>
          <h4 className="md:text-2xl text-lg md:leading-normal leading-5 mt-4 font-bold text-gray-400">
            School Health Room
          </h4>
        </div>
      </div>
    </section>
  );
};

export default Hero;