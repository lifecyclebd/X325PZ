<?php 

/*
 *  author: masuduzzaaman
*/

//use App\models\Common;  


use DB;

use App\System_settings;  

    public function  get_footer_info()
    {
        $sql_result=DB::table(system_settings)->select('*')->where(id,1)->first();
        return $sql_result;
    }
 

function getStudentRowId () {
    return Auth()->guard('students')->user()->student_row_id;
}

function getStudent () {
    return Auth()->guard('students')->user();
}



?>