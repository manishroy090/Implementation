<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Check;

class checkController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function store(Request $request)
    {
       $data = validator::make($request->all(),[
               'tittle'=>'required',
        ],[
             'tittle'=>'Tittle is Required'
        ])->validate();
       $check = Check::create($data);
       $check->addMedia($request->img)->toMediaCollection();

        // Test::create($request->all());
        //  list($width,$height)=getimagesize($request->img);
        //  $newimage  = imagecreatetruecolor(100,100);
        //  $scource=imagecreatefromjpeg($request->img);
        //  imagecopyresized($newimage,$scource,0,0,0,0,100,100,$width,$height);
        //  imagejpeg($newimage);
        //  $filename = time() . ".jpg" ;
        //  $request->img->storeAs('uploads',$filename,'public');

        //  Image::make($filename);
        //  $request->file('img')->storeAs('uploads',$filename,'public');
    }
}
