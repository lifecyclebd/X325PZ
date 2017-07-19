<?php 
 
use DB;


   function  get_footer()
    {
    //	 return 'sad';
        $sql_result=DB::table('system_settings')->select('*')->where('id', 1)->first();
        
        return $sql_result;
    }
 ?>

