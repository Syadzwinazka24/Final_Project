import React from 'react';
import { Card } from 'flowbite-react';
import img1 from '../../../public/img/demam-removebg-preview.png';
import img2 from '../../../public/img/magh.png';
import img3 from '../../../public/img/pusing.png';
import img4 from '../../../public/img/depresi.png';
// import {Image} from 'next/image';

const Disease = () => {
    return (
        <section className="py-10 text-white  bg-gray-600 pt-20 pb-20">
            <div>
                <h3 className="text-center text-4xl font-semibold">
                    <span className="text-cyan-600">Types </span><span className='text-white'>Of </span><span className="text-cyan-600">Diseases</span>
                </h3>
                <div className='grid flex-col grid-cols-4 mt-10 gap-5 px-3'>
                    <Card
                        className="max-w-sm flex flex-col grid-cols-4  bg-gray-600 "
                    > <img src={img1} alt="" />
                        <h5 className="text-2xl font-bold tracking-tight text-gray-200 dark:text-white">
                            Demam
                        </h5>
                        <p className="font-normal text-gray-100 dark:text-gray-300">
                            Demam terkadang disertai dengan gejala lain, seperti sakit kepala, menggigil, berkeringat, atau mual dan muntah. Untuk mengatasi demam, salah satu cara yang bisa Anda lakukan adalah dengan mengonsumsi obat demam.
                        </p>
                    </Card>
                    <Card
                        className="max-w-sm flex flex-col grid-cols-4  bg-gray-600"
                    > <img src={img2} alt="" />
                        <h5 className="text-2xl font-bold tracking-tight text-gray-200 dark:text-white">
                            Magh
                        </h5>
                        <p className="font-normal text-gray-100 dark:text-gray-400">
                            Sakit maag atau dispepsia adalah rasa nyeri dan tidak nyaman pada lambung akibat sejumlah kondisi.Bahkan, maag yang semakin parah mampu mengganggu pengidapnya untuk beraktivitas normal. Itu sebabnya, segera lakukan perawatan yang diperlukan ketika timbul gejala maag.
                        </p>
                    </Card>
                    <Card
                        className="max-w-sm flex flex-col grid-cols-4  bg-gray-600"
                    > <img src={img3} alt="" />
                        <h5 className="text-2xl font-bold tracking-tight text-gray-200 dark:text-white">
                            Pusing
                        </h5>
                        <p className="font-normal text-gray-100 dark:text-gray-400">
                            Pusing memiliki banyak kemungkinan penyebab, termasuk gangguan telinga bagian dalam, mabuk perjalanan, dan efek pengobatan. Terkadang pusing juga disebabkan oleh kondisi kesehatan yang mendasarinya. Seperti sirkulasi darah yang buruk, infeksi, atau cedera.
                        </p>
                    </Card>
                    <Card
                        className="max-w-sm flex flex-col grid-cols-4  bg-gray-600"
                    > <img src={img4} alt="" />
                        <h5 className="text-2xl font-bold tracking-tight text-gray-200 dark:text-white">
                            Depresi
                        </h5>
                        <p className="font-normal text-gray-100 dark:text-gray-400">
                        Seseorang yang depresi umumnya menunjukkan ciri-ciri psikologi dan fisik tertentu. Ciri psikologis orang yang depresi adalah rasa cemas dan khawatir yang berlebihan, emosi yang tidak stabil, serta rasa putus asa atau frustrasi.
                        </p>
                    </Card>

                </div>
            </div>
        </section>
    );
};

export default Disease;