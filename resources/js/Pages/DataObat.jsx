import React from 'react';
import Navbar from '../Components/Navbar';
import Obat from '../Components/Obat';
import Footer1 from '../Components/Footer1';
const DataObat = ({obat}) => {
    return (
        <div>
            < Navbar/>
            < Obat data={obat}/>
            < Footer1/>
        </div>
    );
};

export default DataObat;