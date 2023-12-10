import React from 'react';
import { usePage } from '@inertiajs/react';
const Deskripsi_info = ({ data }) => {
    const { info } = usePage().props;
    const renderHTML = (htmlString) => {
        return { __html: htmlString };
      };
    return (
        <div className='min-h-screen  bg-blue-900 px-10 a pt-24 pb-10'>
            <div className="text-center mt-8">
                <h3 className="text-4xl font-semibold text-white">
                    {info.judul_info}
                </h3>
                <p className="text-gray-400 my-3 text-lg">Detail Information</p>
                <div className="flex md:flex-row flex-col-reverse items-center md:gap-6 gap-12 px-10 max-w-6xl mx-auto a pt-10">
                    <div className="flex-1 md:mt-0 mt-6 flex justify-center items-center">
                        <div className="lg:w-96 h-full relative sm:w-10/12 w-11/12 max-w-sm aboutImg ">
                            <img
                                src={`/img/${info.img} `}
                                alt=""
                                className="w-full object-cover bg-cyan-600 rounded-xl"
                            />
                        </div>
                    </div>
                    <div className="p-2">
                        <div className="text-gray-300 my-3">
                            <p className="text-justify leading-7 w-11/12 mx-auto" dangerouslySetInnerHTML={renderHTML(info.deskripsi)}>
                                
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Deskripsi_info;