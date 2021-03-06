<?php

namespace App\Http\Controllers;
use App\Coordinator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoordinatorController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:Coordinator');
    }

    public function getUsers(){
	    $users = User::paginate(10);
	    return view('displayUsers', compact('users'));
   }

   public function getCoordinatorView(){
   	return view('coordinator');
   }
}
