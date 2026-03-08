<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Materi;
use App\Models\Quiz;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function dashboard()
    {

        $totalMahasiswa = User::count();
        $totalMateri = Materi::count();
        $totalQuiz = Quiz::count();

        return view('admin.dashboard', compact(
            'totalMahasiswa',
            'totalMateri',
            'totalQuiz'
        ));
    }
}