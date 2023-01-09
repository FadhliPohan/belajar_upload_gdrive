<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class FileHandler extends Controller
{
  //
  public function getFile()
  {

    $path = "meja/230109071045-264948475_453438253527756_4398472746188666217_n.jpg";
    $file = Storage::disk("webdav")->get($path);
    $type = Storage::disk("webdav")->mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
  }

  public function storeFile(Request $req)
  {
    $file = $req->file('iqbal');
    $now = date("ymdhis");
    $originalFileName = $file->getClientOriginalName();
    $filename = "$now-$originalFileName";
    // dd($filename);
    // dd($file);
    try {
      Storage::disk("webdav")->put("/meja/$filename", file_get_contents($file->getRealPath()));
      dd("berhasil");
    } catch (\Throwable $th) {
      dd($th);
    }
  }
}
