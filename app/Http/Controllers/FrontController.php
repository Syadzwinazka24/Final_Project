<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function index() {
        return Inertia('Home');
    }

    public function information() {
        return Inertia('Information');
    }

    public function patientData() {
        return Inertia('patientData');
    }
}
