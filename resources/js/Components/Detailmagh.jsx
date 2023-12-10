import React from 'react';
import { Card } from 'flowbite-react';
const Detailmagh = () => {
    return (
        <div className='overflow-x-auto min-h-screen items-center bg-blue-900 px-10 a pt-20 a pb-20'>
            <h3 className="text-center text-4xl font-semibold a pt-10 pb-10">
                <span className="text-cyan-600">Detail Magh</span>
                <p className='text-center a text-2xl text-gray-200'>Info tentang Magh</p>
            </h3>

            <Card href="#" className="a text-left px-10 bg-gray-200 opacity-70 pb-5">
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Penyebab Sakit Maag
                </h5>
                <p className="font-normal text-gray-700 dark:text-gray-400">
                    Sebelum merinci penyebab kondisi ini, penting untuk mengetahui cara kerja lambung terlebih dahulu. Setiap makanan yang kamu konsumsi akan masuk ke lambung dan dicerna secara kimiawi. Proses pencernaan ini dibantu oleh enzim pepsin dan renin yang bercampur  dengan asam lambung (HCl). Jika terjadi gangguan, mukosa akan rusak dan menimbulkan rasa sakit atau nyeri.
                    Apabila gangguan ini terus-menerus terjadi, asam lambung akan memecah mukosa dan menyebabkan iritasi dan peradangan. Kondisi inilah yang mengakibatkan sakit maag. Rasa nyeri karena maag akut disebabkan oleh asam lambung yang bersentuhan dengan lapisan mukosa. Akibatnya, ujung-ujung saraf menjadi lebih peka oleh rasa nyeri.
                </p>
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gejala Sakit Maag</h5>
                <p className="font-normal text-gray-700 dark:text-gray-400">Tanda dan gejala yang dapat dikenali, antara lain:

                    Cepat merasa kenyang saat makan dan rasa kenyang berkepanjangan setelah makan.
                    Mual.
                    Kembung pada perut bagian atas.
                    Sering bersendawa.
                    Nyeri pada ulu hati dan nyeri di tengah dada yang muncul ketika atau setelah makan.
                    Rasa panas pada perut bagian atas.
                    Selain gejala di atas, maag juga dapat menimbulkan rasa panas di dalam dada akibat naiknya asam lambung ke bagian kerongkongan. Stres dapat memperburuk kondisi ini.
                </p>
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pengobatan Sakit Maag</h5>
                <p className="font-normal text-gray-700 dark:text-gray-400">
                    Penaganan tergantung pada penyebab dan tingkat keparahan gejala. Apabila gejalanya ringan, perubahan gaya hidup mungkin sudah bisa meredakannya. Berikut adalah gaya hidup untuk mengatasi sakit maag:

                    Kurangi makanan berlemak dan pedas.
                    Kurangi konsumsi minuman beralkohol dan berkafein.
                    Tidur setidaknya selama 7 jam setiap malam juga bisa membantu meredakan kondisi ini.
                    Berolahraga secara teratur dan berhenti merokok.
                    Dalam kasus yang parah, dokter bisa meresepkan obat, seperti obat golongan antasida, antagonis reseptor H-2, dan inhibitor pompa proton (PPI).
                </p>
            </Card>

        </div>
    );
};

export default Detailmagh;