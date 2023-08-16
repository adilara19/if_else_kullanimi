<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function students(){

        $students = ['Dilara', 'Emir', 'Burcu', 'Berke', 'Onur','İmge', 'Must', 'Salih'];
        $class = ['1a', '2a', '3a'];
        //*compact kullanımı: return view('pages.students', compact('students'));

        //* with kullanımı: return view('pages.students')->with('students',$students);

        return view('pages.students', compact('students','class'));
    }

}
