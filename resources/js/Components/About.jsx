import React from "react";
import aboutImg from "../../../public/img/Premium Vector _ Medical examination or medical check up interior room.jpg";
const About = () => {
    const info = [
        { text: "Years experience", count: "04" },
        { text: "Completed Projects", count: "24" },
        { text: "Companies Work", count: "06" },
    ];
    return (
        <section id="about" className="py-10 text-white  bg-gray-700">
            <div className="text-center mt-8">
                <h3 className="text-4xl font-semibold">
                    <span className="text-white">About</span> <span className="text-cyan-600">UKS</span>
                </h3>
                <p className="text-gray-400 my-3 text-lg">Introduction</p>
                <div className="flex md:flex-row flex-col-reverse items-center md:gap-6 gap-12 px-10 max-w-6xl mx-auto">
                    <div className="p-2">
                        <div className="text-gray-300 my-3">
                            <p className="text-justify leading-7 w-11/12 mx-auto">
                                UKS atau Usaha Kesehatan Sekolah adalah upaya dalam menanamkan dan meningkatkan kemampuan hidup sehat dengan menerapkan Perilaku Hidup Bersih dan Sehat (PHBS) di lingkungan sekolah, mulai dari taman kanak-kanak sampai sekolah menengah.
                                Dalam mendukung upaya tersebut, UKS menerapkan tri program atau Trias UKS. Menurut Sonja Poernomo (2009) dalam repository.unmuha.ac.id, Trias UKS memadukan pendidikan dengan pelayanan kesehatan yang terdiri atas tiga program penting, yaitu:
                                Pendidikan kesehatan, Pelayanan kesehatan, dan Pembinaan lingkungan sekolah
                            </p>
                        </div>
                    </div>
                    <div className="flex-1 md:mt-0 mt-6 flex justify-center items-center">
                        <div className="lg:w-96 h-full relative sm:w-10/12 w-11/12 max-w-sm aboutImg ">
                            <img
                                src={aboutImg}
                                alt=""
                                className="w-full object-cover bg-cyan-600 rounded-xl"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
};

export default About;