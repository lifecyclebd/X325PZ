<?php 

use Illuminate\Http\Request;

   function  get_footer()
    {
     $sql_result=DB::table('system_settings')->select('*')->where('id', 1)->first();
    // dd($sql_result);  
        return $sql_result;
    }


    function get_session($column_name){
    	$request = request();
    	if ($request->session()->exists('email')) {
    		$session_email = $request->session()->get('email');
    		 $sql_result=DB::table('donors')->select('*')->where('email', $session_email)->first();
    		 $result= $sql_result->$column_name;
    	//	 dd($result);
	    	return $result;
    	}else{
    		 
   			  return null;
    	} 
    }
 ?>

