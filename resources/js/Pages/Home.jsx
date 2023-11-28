import React from 'react';
import Navbar from '../Components/Navbar';
import Hero from '../Components/Hero';
import About from '../Components/About';
import Goal from '../Components/Goal';
import Disease from '../Components/Disease';
import Footer1 from '../Components/Footer1';

const Home = () => {
    return (
        <div>
           <Navbar/>
           <Hero/>
           <About/>
           <Goal/>
           <Disease/>
           <Footer1/>
        </div>
    );
};

export default Home;