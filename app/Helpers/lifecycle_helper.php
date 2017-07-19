<?php 
 
//use DB;


   function  get_footer()
    {
     $sql_result=DB::table('system_settings')->select('*')->where('id', 1)->first();
    // dd($sql_result);  
        return $sql_result;
    }
 ?>

