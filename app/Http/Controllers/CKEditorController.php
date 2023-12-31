<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CKEditorController extends Controller
{
    public function uploadNews(Request $request){
        $type = $request->file('upload')->getClientOriginalExtension();

        $filename = date('dmy') . "_" . Str::random(20) . "." . $type;

        $request->file('upload')->move(public_path('image/news/temp'), $filename);

        $url = asset('image/news/temp/' . $filename);

        return response()->json([
            'filename' => $filename, 
            'uploaded' => 1,
            'url' => $url
        ]);
    }
}
