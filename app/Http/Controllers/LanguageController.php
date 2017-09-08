<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\facades\Session;
use Illuminate\Support\facades\Input;
use App;
use Lang;

class LanguageController extends Controller
{
    /**
    *   @desc to change the current Language
    *   @request Ajax
    */
    public function changeLanguage(Request $request){
        if($request->ajax()){
            $request->session()->put('locale', $request->local);
            $request->session()->flash('alert-success', ('app.Locale_Change_Success'));
        }
    }
}
