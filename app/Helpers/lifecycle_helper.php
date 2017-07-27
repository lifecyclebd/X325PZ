<?php 

use Illuminate\Http\Request;

   function  get_footer()
    {
     $sql_result=DB::table('system_settings')->select('*')->where('id', 1)->first();
    // dd($sql_result);  
        return $sql_result;
    }


    function get_session(){
    	$request = request();
        $value = $request->session()->get('email');
        if(!empty($value)){
     //	if ($request->session()->exists('email')) {

    		 $sql_result=DB::table('donors')->select('*')->where('email', $value)->first();
    		 //$result= $sql_result->$column_name;
    	//	 dd($result);
	    	return $sql_result;
    	}else{
    		 
   			  return null;
    	} 
    }
 ?>

