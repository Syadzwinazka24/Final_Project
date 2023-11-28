import React from "react";
import hireMe from "../../../public/img/Premium_Vector___Online_doctor_concept-removebg-preview.png";
const Hireme = () => {
    return (
        <section id="hireme" className="py-10 px-3 text-white bg-gray-700 pt-20">
            <div className="text-center">
                <h3 className="text-4xl font-semibold">
                    Tujuan <span className="text-cyan-600">UKS</span>
                </h3>
                <p className="text-gray-400 mt-3 text-lg">What is the purpose of UKS?</p>
            </div>
            <div className="bg-gray-700 relative px-20 rounded-2xl py-5 lg:max-w-4xl mx-auto min-h-[24rem] mt-24 flex gap-6 lg:flex-row flex-col-reverse items-center">
                <div className="a ml-50">
                    <h2 className="text-2xl font-semibold">
                        Tujuan UKS adalah
                    </h2>
                    <p className="lg:text-left text-justify max-w-lg text-sm mt-4 text-gray-200 leading-6">
                        untuk menciptakan lingkungan yang sehat bagi warga sekolah, sehingga akan berpengaruh terhadap keharmonisan lingkungan dan prestasi akademik siswa di sekolah. Selain itu, UKS juga dapat membina jiwa sosial dengan menumbuhkan rasa tanggung jawab dan menolong sesama manusia.
                    </p>
                </div>
                <img
                    src={hireMe}
                    alt=""
                    className="lg:h-[32rem] h-80 lg:absolute bottom-0 -right-10 object-cover ml"
                />
            </div>
        </section>
    );
};

export default Hireme;