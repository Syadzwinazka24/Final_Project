import React from 'react';
import Navbar from '../Components/Navbar';
import Info1 from '../Components/Info1';
import Footer1 from '../Components/Footer1';

const Information = ({info}) => {
    return (
        <div>
            <Navbar/>
            <Info1 data = {info}/>
            <Footer1/>
        </div>
    );
};

export default Information;