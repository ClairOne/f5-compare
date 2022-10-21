<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use diffTool;

class Compare extends Controller
{
    public function compare (){
        $files = $this->filelist();
        return view('compare/compare', ['files'=>$files,'lhsFile'=>'','rhsFile'=>'']);
    }
    public function filelist(){
        $basePath = '../public/src/';
        $allFiles = scandir($basePath);
        $allowedExtensions = ['html','txt','conf'];
        // filter them
        $files = [];
        foreach($allFiles as $file){
            if(in_array(pathinfo($file, PATHINFO_EXTENSION),$allowedExtensions)){
                array_push($files,$file);
            }
        }
        return ($files);
    }
    public function getFileContents(string $file = ''){
        dd($file);
        $basePath = '../public/src/';
        if(empty($file) || !file_exists($basePath . $file)){
            return 'Select a valid file to compare the contents';
        }
        return file_get_contents($basePath . $file);
    }
}
