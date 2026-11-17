<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lecturer;

class LecturerController extends Controller
{
    public function index() {
        $lecturers = Lecturer::where('isActivated')
                    ->with('user')
                    ->withCount('courses')
                    ->get();

        return view('lecturers.index', compact('lecturers'));
    }

    // public function 
}
