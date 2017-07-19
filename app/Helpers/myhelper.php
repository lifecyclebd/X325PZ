<?php 
 
use DB;

use App\System_settings;  

    public function  get_footer()
    {
        $sql_result=DB::table(system_settings)->select('*')->where(id,1)->first();
        return $sql_result;
    }
 ?>

