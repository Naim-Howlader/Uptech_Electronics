<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsLetter;

class NewsLetterController extends Controller
{
    public function subscribe(Request $request){
        $request->validate([
            'email' => 'required',
        ]);
        $newletteer = new NewsLetter();
        $newletteer->email = $request['email'];
        $newletteer->save();
        return redirect()->route('index');
    }
}
