import React from 'react';
import { Card } from 'flowbite-react';
import img1 from '../../../public/img/demam-removebg-preview.png';
import img2 from '../../../public/img/magh.png';
import img3 from '../../../public/img/pusing.png';
import img4 from '../../../public/img/depresi.png';
// import {Image} from 'next/image';

const Disease = () => {
    return (
        <section className="py-10 text-white  bg-gray-700 pt-20 pb-20">
            <div>
                <h3 className="text-center text-4xl font-semibold">
                    <span className="text-cyan-600">Types </span><span className='text-white'>Of </span><span className="text-cyan-600">Diseases</span>
                </h3>
                <div className='grid flex-col grid-cols-2 lg:grid-cols-4 mt-10 gap-5 px-3'>
                    <Card
                        className="max-w-sm flex flex-col grid-cols-4  bg-gray-600 "
                    > <img src={img1} alt="" />
                        <h5 className="text-2xl font-bold tracking-tight text-cyan-500 dark:text-white">
                            Demam
                        </h5>
                        <p className="font-normal text-gray-100 dark:text-gray-300">
                            Demam terkadang disertai dengan gejala lain, seperti sakit kepala, menggigil, berkeringat, atau mual dan muntah.
                        </p>
                        <a href='/detailDemam' class="rounded-full bg-gray-400 py-2 px-3.5 font-com text-sm capitalize text-black text-center shadow shadow-black/60">See More</a>
                    </Card>
                    <Card
                        className="max-w-sm flex flex-col grid-cols-4  bg-gray-600"
                    > <img src={img2} alt="" />
                        <h5 className="text-2xl font-bold tracking-tight text-cyan-500 dark:text-white">
                            Magh
                        </h5>
                        <p className="font-normal text-gray-100 dark:text-gray-400">
                            Magh atau dispepsia adalah rasa nyeri dan tidak nyaman pada lambung akibat sejumlah kondisi, seperti telat makan.
                        </p>
                        <a href='/detailMagh' class="rounded-full bg-gray-400 py-2 px-3.5 font-com text-sm capitalize text-black text-center shadow shadow-black/60">See More</a>
                    </Card>
                    <Card
                        className="max-w-sm flex flex-col grid-cols-4  bg-gray-600"
                    > <img src={img3} alt="" />
                        <h5 className="text-2xl font-bold tracking-tight text-cyan-500 dark:text-white">
                            Pusing
                        </h5>
                        <p className="font-normal text-gray-100 dark:text-gray-400">
                            Pusing adalah sensasi seperti berputar, kliyengan, melayang, atau kondisi ketika kamu merasa akan pingsan.
                        </p>
                        <a href='/detailPusing' class="rounded-full bg-gray-400 py-2 px-3.5 font-com text-sm capitalize text-black text-center shadow shadow-black/60">See More</a>
                    </Card>
                    <Card
                        className="max-w-sm flex flex-col grid-cols-4  bg-gray-600"
                    > <img src={img4} alt="" />
                        <h5 className="text-2xl font-bold tracking-tight text-cyan-500 dark:text-white">
                            Depresi
                        </h5>
                        <p className="font-normal text-gray-100 dark:text-gray-400">
                        Depresi adalah gangguan mood, kondisi emosional berkepanjangan yang mewarnai proses berpikir, seperti perasaan tidak berdaya.
                        </p>
                        <a href='/detailDepresi' class="rounded-full bg-gray-400 py-2 px-3.5 font-com text-sm capitalize text-black text-center shadow shadow-black/60">See More</a>
                    </Card>

                </div>
            </div>
        </section>
    );
};

export default Disease;