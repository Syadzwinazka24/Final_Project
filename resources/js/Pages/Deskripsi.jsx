import React from 'react';
import Navbar from '../Components/Navbar';
import Deskripsi_info from '../Components/Deskripsi_info';
import Footer1 from '../Components/Footer1';
const Deskripsi = ({info}) => {
    return (
        <div>
            < Navbar />
            < Deskripsi_info data={info}/>
            < Footer1 />
        </div>
    );
};

export default Deskripsi;