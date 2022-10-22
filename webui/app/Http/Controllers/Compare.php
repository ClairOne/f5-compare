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
        $allFiles = scandir(config('f5_compare.path_to_files'));
        // filter them
        $files = [];
        foreach($allFiles as $file){
            if(in_array(pathinfo($file, PATHINFO_EXTENSION),config('f5_compare.allowed_file_types'))){
                array_push($files,$file);
            }
        }
        return ($files);
    }
    public function getFileContents(string $file = ''){
        if(empty($file)
         || !in_array(pathinfo($file, PATHINFO_EXTENSION),config('f5_compare.allowed_file_types'))
         || !file_exists(config('f5_compare.path_to_files') . $file )
         ){
            return "400:Select a valid file to compare the contents";
        }
        return file_get_contents(config('f5_compare.path_to_files') . $file);
    }
}
