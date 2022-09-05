<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){

        return view('users.index');
    }
    public function create(){
        return view ('users.create');
    }
    public function store(Request $request){

    }
    public function show($id){
        return view('users.profile',[
        'user'=> User::findOrFail($id)
            ]);
    }
    public function edit($id){
        return view('users.edit');

    }
    public function update(Request $request)
    {

    }
    public function destroy($id)
    {

    }
}
