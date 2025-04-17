<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
   public function tampilmahasiswa()
   {
      $datamahasiswa = Mahasiswa::all();
      return view('tampil_mahasiswa', ['KurirData'=>$datamahasiswa]);
   }
}
