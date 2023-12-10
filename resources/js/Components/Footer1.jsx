import React from 'react';
import footer from "../../../public/img/footerr.jpg";
import logo from '../../../public/img/logo-removebg-preview.png';
const Footer1 = () => {
    return (
        <section
        style={{
            width: "100%",
            backgroundImage: `url(${footer})`,
            backgroundSize: "cover",
          }}
        >
        <footer class=" px-30 pt-20">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
              <div class="mb-6 md:mb-0">
                  <a href="#" class="flex">
                      <img src={logo} class="h-20" alt="FlowBite Logo" />
                      <span class="a font-Cookie hover:text-cyan-600 self-center text-4xl font-semibold whitespace-nowrap text-gray-400">School</span><span className='a font-Cookie hover:text-gray-400 self-center text-4xl font-semibold whitespace-nowrap text-cyan-600 '>Health</span>
                  </a>
              </div>
              <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-gray-400 uppercase dark:text-white">Front Using</h2>
                      <ul class="text-gray-500 dark:text-gray-400 font-medium">
                          <li class="mb-4">
                              <a href="https://react.dev/learn" class="hover:underline">React JS</a>
                          </li>
                          <li>
                              <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                          </li>
                      </ul>
                  </div>
                 
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-gray-400 uppercase dark:text-white">Back using</h2>
                      <ul class="text-gray-500 dark:text-gray-400 font-medium">
                          <li class="mb-4">
                              <a href="https://laravel.com/docs/10.x" class="hover:underline">Laravel</a>
                          </li>
                          <li>
                              <a href="https://themewagon.com/themes/dashmin-responsive-free-bootstrap-5-html5-admin-dashboard-template/" class="hover:underline">Dashmin</a>
                          </li>
                      </ul>
                  </div>
                  <div>
                      <h2 class="mb-6 text-sm font-semibold text-gray-400 uppercase dark:text-white">Follow us</h2>
                      <ul class="text-gray-500 dark:text-gray-400 font-medium">
                          <li class="mb-4">
                              <a href="https://github.com/Syadzwinazka24/Final_Project" class="hover:underline ">Github</a>
                          </li>
                          <li>
                              <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <hr class="my-6 border-gray-500 sm:mx-auto dark:border-gray-700 lg:my-8" />
          <div class="sm:flex sm:items-center sm:justify-between">
              <span class="a text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://flowbite.com/" class="hover:underline">UKS™</a>
              </span>
              <div class="flex mt-4 sm:justify-center sm:mt-0 text-gray-500">
                <p>this website makes it easier for school uks to record patients and input information</p>
              </div>
          </div>
        </div>
    </footer>
    </section>
    );
};

export default Footer1;