<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    //\
    public function setLang(Request $req)
    {
        $lang = $req->locale;
        Session::put('locale', $lang);
        // dd($lang);
        return redirect()->back();
    }
}
