<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\M_merk;

class Merk_controller extends Controller
{
    public function index(){
        $title = 'Master Data Merk';
        $data = M_Merk::orderBy('nama','asc')->get();

        return view('merk.index', compact('title','data'));
    }

    public function add(){
        $title = 'Tambah Merk';

        return view ('merk.add',compact('title'));
    }
}
