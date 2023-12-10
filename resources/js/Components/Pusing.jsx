import React from 'react';
import { Card } from 'flowbite-react';
const Pusing = () => {
    return (
        <div className='overflow-x-auto min-h-screen items-center bg-blue-900 px-10 a pt-20 a pb-20'>
            <h3 className="text-center text-4xl font-semibold a pt-10 pb-10">
                <span className="text-cyan-600">Detail Pusing</span>
                <p className='text-center a text-2xl text-gray-200'>Info tentang Pusing</p>
            </h3>

            <Card href="#" className="a text-left px-10 bg-gray-200 opacity-70 pb-5">
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Penyebab Sakit Pusing
                </h5>
                <p className="font-normal text-gray-700 dark:text-gray-400">
                    Pusing juga dapat disebabkan oleh faktor lain, seperti:

                    Gangguan saraf, di antaranya penyakit Parkinson dan multiple sclerosis
                    Efek obat-obatan, seperti obat anti kejang, antidepresan, penenang, obat bius, dan obat penurun tekanan darah
                    Kekurangan zat besi (anemia)
                    Gangguan kecemasan
                    Hipoglikemia (kekurangan gula dalam darah)
                    Cuaca yang terlalu panas dan dehidrasi
                    Efek konsumsi minuman beralkohol jangka pendek
                </p>
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gejala Pusing</h5>
                <p className="font-normal text-gray-700 dark:text-gray-400">Pusing dapat dideskripsikan dengan sensasi berikut:

                    Rasa seperti melayang atau hilang keseimbangan
                    Kliyengan atau merasa akan pingsan
                    Kepala terasa berat
                    Kondisi sekitar terasa seperti berputar
                    Sensasi pusing dapat datang tiba-tiba (mendadak) atau perlahan, serta hanya sebentar atau terus menerus berkepanjangan. Pusing yang dirasakan juga dapat bertambah parah ketika penderitanya berjalan, berdiri, duduk, berbaring, atau menggerakan kepala.

                    Selain sensasi pusing itu sendiri, gejala lain yang dapat menyertai adalah lemas, mual, muntah, dan keringat dingin. Namun, keluhan yang dirasakan setiap orang saat pusing dapat berbeda-beda, tergantung pada penyebabnya..
                </p>
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pengobatan Pusing</h5>
                <p className="font-normal text-gray-700 dark:text-gray-400">
                    Biasanya, pusing dapat sembuh tanpa penanganan khusus, karena penderita akan beradaptasi dengan perubahan sistem tubuh yang menyebabkan pusing. Namun, untuk membantu meredakan pusing, ada beberapa upaya yang dapat dilakukan secara mandiri, antara lain:

                    Duduk atau berbaring saat merasa pusing untuk meredakan sensasi yang dirasakan.
                    Berbaring dan menutup mata di dalam ruangan yang gelap untuk meredakan sensasi berputar pada vertigo
                    Istirahat dalam ruangan yang sejuk
                    Menghindari konsumsi minuman berkafein (kopi atau teh) dan beralkohol, serta asap rokok, karena dapat memperburuk sensasi yang dirasakan
                    Melakukan manuver untuk vertigo
                    Sementara itu, beberapa hal yang dapat dilakukan untuk mencegah pusing adalah:

                    Berolahraga secara rutin
                    Mengonsumsi cukup air putih
                    Memastikan waktu tidur cukup
                    Diet sehat rendah garam (untuk penyakit Meniere)
                    Tidak mengonsumsi kafein atau alkohol secara berlebihan
                    Pengobatan ke dokter harus dilakukan jika muncul gejala yang mengkhawatirkan, seperti yang telah dijelaskan sebelumnya. Dokter akan menentukan pengobatan berdasarkan penyebab dari kondisi dan gejala yang dialami.

                    Jika pusing yang dialami tidak membaik, dokter akan memberikan beberapa obat di bawah ini untuk meredakan gejala yang dirasakan:

                    Diuretik untuk menangani penyakit Meniere
                    Obat untuk menangani vertigo dan mual, seperti antihistamin dan antikolinergik
                    Obat antikecemasan
                </p>
            </Card>

        </div>
    );
};

export default Pusing;