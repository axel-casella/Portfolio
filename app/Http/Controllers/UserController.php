<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserRequest;
use App\Http\Requests\EditRequest;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('skill','education','aboutme','workexperience','blog','contactme', 'roles')->latest()->get();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(EditRequest $request, User $user)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, User $user)
    {   
        /*$request->validate([
            'name' => 'required | min:5 | max:64',
            'title_job' => 'required | min:5 | max:1000',
            'email'=> 'required | min:15 | max:64',
            'tel' => 'required | numeric | min:64',
            'address' => 'required | min:10 | max:128',
            'file' => 'image:jpg | dimensions:min_width=100,min_height=200 | size:512',
        ]);*/

        if($request->file('file')){
            Storage::disk('public')->delete($user->image);
            $user->image =  $request->file('file')->store('users','public');
            $user->save();
        }

        $user->update($request->all());
        return redirect()->to('user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if ($user->image){
            Storage::disk('public')->delete($user->image);
        }
        $user->delete();

        return redirect()->to('user');
    }
}
