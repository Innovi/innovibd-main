<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo "create";
    }

    // Design Sample showing
    public function design()
    {
        return view('gallery');
    }

    // wedding card sample showing
    public function wedding()
    {
        return view ('welcome');
    }

    // membership card showing
    public function membership()
    {
        echo "membership card showing";
    }
}
