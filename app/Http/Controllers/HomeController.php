<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        return view('room');
        
    }


    /**
     * 一覧を表示
     * 
     * @return view
     */
 
    // public function showName(){
    //     $users = User::all(); 
       
    //     return view('blog.list',
    //     ['users' => $users]);

    //     dd($users);
    //     return view('blog.list', compact('users'));
    //  }
}
