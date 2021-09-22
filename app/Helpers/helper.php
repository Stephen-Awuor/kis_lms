<?php
namespace App\Helpers;

class Helper{
    public static function IDGenerator($model, $trow, $length = 4, $prefix){
        $data = $model::orderBy('id',"desc")->first();
        if(!$data){
            $og_length = $length;
            $last_number = '';
        }else{
            $code = substr($data->$trow, strlen($prefix)+1);
            $actial_last_number = ($code/1)*1;
            $incerement_last_number = $actial_last_number+1;
            $last_number_length = strlen($incerement_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $incerement_last_number;
        }
        $newstudent= '';
        for($i=0; $i<$og_length; $i++){
           $newstudent.="0";
        }
        return $prefix.'-'.$newstudent.$last_number;
    }
}
?>