import React from 'react';
import { Card } from 'flowbite-react';
const Detaildemam = () => {
    return (
        <div className='overflow-x-auto min-h-screen items-center bg-gray-800 px-10 a pt-20 a pb-20'>
            <h3 className="text-center text-4xl font-semibold a pt-10 pb-10">
                <span className="text-cyan-600">Detail Demam</span>
                <p className='text-center a text-2xl text-gray-200'>Info tentang demam</p>
            </h3>
            <Card href="#" className="a text-left px-10 bg-gray-200 pb-5">
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    Penyebab Demam
                </h5>
                <p className="font-normal text-gray-700 dark:text-gray-400">
                    Demam merupakan gejala atau respons tubuh terhadap suatu infeksi atau penyakit. Maka dari itu, penyebab demam pun akan bervariasi, antara lain:

                    Imunisasi, misalnya setelah mendapat vaksin pertusis.
                    Infeksi virus dan bakteri, misalnya infeksi COVID-19, meningitis, tifus, disentri, cacar air, dan infeksi saluran kemih.
                    Penyakit akibat gigitan nyamuk, seperti demam berdarah, malaria, dan chikungunya.
                    Sebagian jenis obat juga dapat menyebabkan gejala demam.
                </p>
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gejala Demam</h5>
                <p className="font-normal text-gray-700 dark:text-gray-400">Meski penyebabnya dapat bervariasi, berikut adalah beberapa gejala demam secara umum, antara lain:

                    Nyeri kepala.
                    Keringat dingin.
                    Menggigil.
                    Dehidrasi.
                    Batuk.
                    Nyeri tenggorokan.
                    Nyeri telinga.
                    Diare.
                    Muntah-muntah.
                    Nyeri otot.
                    Nafsu makan turun.
                    Kelelahan.
                    Sementara itu, terdapat gejala demam yang perlu diwaspadai yang menunjukkan bahwa demam membutuhkan penanganan sesegera mungkin, antara lain:

                    Leher kaku.
                    Mata sangat sensitif terhadap cahaya.
                    Muntah terus-menerus.
                    Timbul bercak-bercak kemerahan pada kulit.
                    Sesak napas.
                    Cenderung mengantuk terus-menerus.
                    Nyeri dan tampak kesakitan.
                    Tidak mau minum dan frekuensi buang air kecil berkurang.
                    Jangan tunggu sampai parah apabila mengalami gejala-gejala di atas,
                </p>
                <h5 className="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Pengobatan Demam</h5>
                <p className="font-normal text-gray-700 dark:text-gray-400">
                    Pada orang dewasa, banyak jenis obat yang dijual bebas di pasaran untuk menurunkan demam. Obat-obatan tersebut bisa dibeli secara bebas. Namun, demam ringan sebaiknya tidak perlu diobati.

                    Jika demam disebabkan oleh infeksi bakteri, dokter mungkin bisa meresepkan antibiotik. Namun, jika demam disebabkan oleh infeksi virus, penggunaan obat penghilang rasa nyeri juga dapat mengurangi gejalanya.

                    Kamu juga bisa meredakan gejala yang timbul dari demam melalui beberapa perawatan rumahan seperti berikut:

                    Minum banyak air putih, karena demam dapat menyebabkan kehilangan cairan dan dehidrasi.
                    Kamu perlu beristirahat yang cukup untuk pulih, karena beraktivitas dapat meningkatkan suhu tubuh.
                    Buatlah diri sendiri nyaman dengan mengenakan pakaian yang ringan.
                    Kompres hangat area kening,  serta jaga suhu ruangan tetap sejuk dan tidur hanya dengan sprei atau selimut tipis.
                </p>
            </Card>
        </div>
    );
};

export default Detaildemam;