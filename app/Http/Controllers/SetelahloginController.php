<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\kupon;
use App\Models\User;
use Illuminate\Http\Request;

class SetelahloginController extends Controller
{
    //
    public function biodata()
    {
        $user = auth()->User();
        return view('setelah_login/biodata',compact('user'));
    }

    public function gallery()
    {
        return view('setelah_login/gallery');
    }

    public function tips()
    {
        return view('setelah_login/tips');
    }


    public function contact()
    {
        return view('setelah_login/contact');
    }

    public function harga()
    {
       
        return view('setelah_login/harga',[
            'product' => product::all(),
        ]);
        
        
    }

    public function kupon()
    {
        return view('setelah_login/kupon', ['kupon' => kupon::all()]);
    }

}
