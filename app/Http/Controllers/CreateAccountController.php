<?php

namespace App\Http\Controllers;

use App\CreateAccount;
use App\Roles;
use Illuminate\Http\Request;

class CreateAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles_model = new Roles();
        $roles =  $roles_model->getRoles();
        return view('auth/new_account',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CreateAccount  $createAccount
     * @return \Illuminate\Http\Response
     */
    public function show(CreateAccount $createAccount)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CreateAccount  $createAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateAccount $createAccount)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CreateAccount  $createAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateAccount $createAccount)
    {
        //
    }
}
