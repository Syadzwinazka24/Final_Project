import React from "react";
import hero from "../../../public/img/a.jpg";
import hei from "../../../public/img/hero.png";
const Hero = () => {

  return (
    <section
      style={{
        width: "100%",
        backgroundImage: `url(${hero})`,
        backgroundSize: "cover",
      }}
      >
      <section id="home" class="a pt-20 a pb-16 a px-10">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2 a pl-16 a pt-16">
              <h1
                class="text-base font-semibold text-white md:text-xl lg:text-2xl"
              >
                Hello everyone<span
                  class="block font-bold text-cyan-500 text-4xl mt-1 lg:text-5xl"
                >Welcome to <br /> Website U<span className="text-white">K</span>S</span
                >
              </h1>
              <br />
              <p class="font-medium text-gray-300 mb-10 leading-relaxed">
                This website was built to make it easier for uks officers to record patients and also input information which can be seen by visitors.
              </p>
            </div>
            <div class="w-full self-end px-4 lg:w-1/2">
              <div class="relative mt-5 lg:mt-9 lg:right-0">
                <img src={hei} alt="heroin" class="max-w-full mx-auto" />
                <span
                  class="absolute -bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125"
                >
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
    </section>

  );
};

export default Hero;