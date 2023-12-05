import React from 'react';
import { Card } from 'flowbite-react';
const Depresi = () => {
    return (
        <div className='overflow-x-auto min-h-screen items-center bg-gray-800 px-10 a pt-20 a pb-20'>
            <h3 className="text-center text-4xl font-semibold a pt-10 pb-10">
                <span className="text-cyan-600">Detail Depresi</span>
                <p className='text-center a text-2xl text-gray-200'>Info tentang depresi</p>
            </h3>
            <Card href="#" className="a text-left px-10 bg-gray-200 pb-5">
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Penyebab Depresi
                </h5>
                <p className="font-normal text-gray-700 dark:text-gray-400">
                    Depresi lebih sering dialami oleh orang dewasa. Penyebabnya diduga terkait dengan faktor genetik, hormon, dan zat kimia di otak. Beberapa faktor pemicu depresi antara lain:
                    Peristiwa traumatis
                    Tekanan batin, misalnya karena masalah keuangan atau masalah rumah tangga
                    Pola pikir yang salah, seperti toxic positivity
                </p>
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gejala Depresi</h5>
                <p className="font-normal text-gray-700 dark:text-gray-400">Seseorang yang depresi umumnya menunjukkan ciri-ciri psikologi dan fisik tertentu. Ciri psikologis orang yang depresi adalah rasa cemas dan khawatir yang berlebihan, emosi yang tidak stabil, serta rasa putus asa atau frustrasi.

                    Sementara itu, ciri-ciri fisik pada seseorang yang depresi adalah selalu merasa lelah dan tak bertenaga, pusing dan nyeri tanpa penyebab yang jelas, serta menurunnya selera makan.
                </p>
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pengobatan Depresi</h5>
                <p className="font-normal text-gray-700 dark:text-gray-400">
                    Dalam mengobati depresi, psikiater dapat melakukan beberapa cara berikut:

                    Melakukan psikoterapi atau terapi psikologis, untuk membantu mengatasi masalah akibat depresi
                    Memberikan obat antidepresan, untuk mengatasi depresi pasien
                    Menjalani perawatan di rumah sakit jika mengalami depresi yang parah
                </p>
            </Card>
        </div>
    );
};

export default Depresi;