<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index(){

    //Step 1	
    	// $nama = "Nama Saya Iman";
    	// $umur = "Umur 20 Tahun";

    	// return view('profil')->with([
    	// 		'namaprofil' => $nama,
    	// 		'umur' 		 => $umur

    	// 		]);

    //step2
    // $data['nama'] = "Nama Saya Iman";
    // $data['umur'] = "umur 20 tahun";
    // 	return view('profil')->with('data', $data);

    //step3

    $nama ="Nama saya iman";
    $umur ="umur 20tahun";
    return view('profil')->with('data', compact('nama', 'umur'));
    }
}
