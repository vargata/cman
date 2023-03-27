<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    public static function getLogo($company){
        
        $file = "/img/comp/" . $company->name . ".jpg";
        
        if(!Storage::disk('public')->exists($file)){
            $contents = file_get_contents($company->logo);
            Storage::disk('public')->put($file, $contents);
        }
        
        $url = "/storage" . $file;
        
        return $url;
    }
}
