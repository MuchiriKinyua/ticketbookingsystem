<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
public function login()
{
    return view('admin.login');
}

public function create()
{
    // Logic for creating events
}

public function edit($eventId)
{
    // Logic for editing events
}

public function index()
{
    // Logic for listing events
}

}
