import React from 'react';
import Navbar from '../Components/Navbar';
import Data from '../Components/Data';
import Footer1 from '../Components/Footer1';
const patientData = ({pasien}) => {
    return (
        <div>
            < Navbar/>
            < Data data={pasien}/>
            < Footer1/>
        </div>
    );
};

export default patientData;