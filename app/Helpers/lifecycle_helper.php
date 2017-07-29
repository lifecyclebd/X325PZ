<?php 

use Illuminate\Http\Request;
use App\Message;
use App\Activity;
use App\Division;
use App\Donor;
   function  get_footer()
    {
     $sql_result=DB::table('system_settings')->select('*')->where('id', 1)->first(); 
        return $sql_result;
    }


    function get_session(){
    	$request = request();
        $donor_login_email= $request->session()->get('email');
        $donor_login_id= $request->session()->get('id');
        if(!empty($donor_login_email)){
    		 $sql_result=DB::table('donors')->select('*')->where('email', $donor_login_email)->first();
	    	 return $sql_result;
    	}else{
        	return null;
    	} 
    }

    function after_login(){
        $request = request();
         
        if(!empty($request->session()->get('email'))){
            $data['login_id'] = $request->session()->get('id');
            $donor_email= $request->session()->get('email');

           $data['messages'] = Message::where([['sender_email',$donor_email], ['sender_type', 'donor']])->get();  
           $data['last5message'] = Message::where([['sender_email', $donor_email], ['sender_type', 'donor'],['is_read',0]])->orderByDesc('created_at')->take(5)->get(); 
           
           if(!empty($data['last5message'])){
            $data['last5messageCount']=$data['last5message']->count();
            }
            
            $data['activities'] = Activity::where([['created_id', $data['login_id']], ['created_type', 'donor']])->get(); 
            $data['last5activities']= Activity::where([['created_id', $data['login_id']], ['created_type', 'donor']])->orderByDesc('created_at')->take(5)->get(); 
            $data['division'] = Division::all();
            $data['donor'] = Donor::where('email',$donor_email)->first();
        }
        $data['empty']="";
        return $data;
    }
 ?>

