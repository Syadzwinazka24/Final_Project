import React from 'react';
import { info } from 'autoprefixer';

const Info1 = ({ data }) => {
    return (
        <div>
            <div class="flex min-h-screen font-semibold items-center justify-center bg-gray-800">

                <div class="absolute top-20 pt-10">
                    <p class="text-4xl font-semibold text-cyan-500">Information <span className='text-white'>About </span><span class="text-cyan-500"> UKS</span></p>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3 a pt-48">
                    {data.map((info) => (


                        <div class="group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                            <div class="h-96 w-72">
                                <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src={`/storage/${info.img}`} alt="" />
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                            <div class="absolute inset-0 flex translate-y-[60%] flex-col items-center justify-center px-9 text-center transition-all duration-500 group-hover:translate-y-0">
                                <h1 class="font-dmserif text-3xl font-bold a text-cyan-400">{info.judul_info}</h1><br/>
                                <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Informasi terkait kegiatan dari UKS yang akan dilaksanakan pada tanggal {info.isi_info}</p>
                                <a href='/deskripsi' class="rounded-full bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">See More</a>
                            </div>
                        </div>

                    ))}
                </div>

            </div>

        </div>
    );
};

export default Info1;