import React from "react";
import goal from "../../../public/img/Premium_Vector___Online_doctor_concept-removebg-preview.png";
const About = () => {
    const info = [
        { text: "Years experience", count: "04" },
        { text: "Completed Projects", count: "24" },
        { text: "Companies Work", count: "06" },
    ];
    return (
        <section id="about" className="py-10 text-white  bg-gray-600">
            <div className="text-center mt-8">
                <h3 className="text-4xl font-semibold">
                    <span className="text-white">UKS</span> <span className="text-cyan-600">Objectives</span>
                </h3>
                <p className="text-gray-400 my-3 text-lg">What is purpose of UKS ?</p>
                <div className="flex md:flex-row flex-col-reverse items-center md:gap-6 gap-12 px-10 max-w-6xl mx-auto">
                    <div className="flex-1 md:mt-0 mt-6 flex justify-center items-center">
                        <div className="lg:w-96 h-full relative sm:w-10/12 w-11/12 max-w-sm aboutImg ">
                            <img
                                src={goal}
                                alt=""
                                width="150%"
                            />
                        </div>
                    </div>
                    <div className="p-2">
                        <div className="text-gray-300 my-3">
                            <p className="text-justify leading-7 w-11/12 mx-auto">
                                Tujuan Usaha Kesehatan Sekolah bertujuan meningkatkan kesehatan, mutu pendidikan dan prestasi belajar peserta didik yang tercermin dalam kehidupan perilaku hidup bersih sehat (PHBS) dan lingkungan sekolah yang sehat sehingga memungkinkan peserta didik mengalami pertumbuhan dan perkembangan yang optimal.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    );
};

export default About;