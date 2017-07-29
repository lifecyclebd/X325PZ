<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;
use App\Division;
use App\District;
use App\Upazila;
use App\Activity;
use App\BloodRequest;
use App\Message;
use App\Libraries\Common;
use DB;
use Hash;
class DonorController extends Controller {

    public function index() {
        $data['division'] = Division::all();
        $data['donor'] = Donor::all();
        return view('donor.view')->with('data', $data);
    }
    
 


    public function create() {
        //  $blood_group= new Common;
        //=$blood_group->get_blood_group();
        $data['division'] = Division::all();
        return view('donor.create')->with('data', $data);
    }
    public function donor_register(){
        //$data['request_list']= BloodRequest::all();
        $data['division'] = Division::all();
        return view('frontend.donor_register')->with('data', $data);
        
    }

    public function get_district($division_id) {
        $districts = \App\District::where('division_row_id', $division_id)->get();
        $str = '<option value="">Select District</option>';
        foreach ($districts as $district)
            $str .= '<option value="' . $district->id . '">' . $district->district_name . '</option>';
        echo $str;
    }

    public function get_upazilla($district_id) {
        $Upazilas = \App\Upazila::where('district_row_id', $district_id)->get();
        $str = '<option value="">Select Upazilla</option>';
        foreach ($Upazilas as $Upazila)
            $str .= '<option value="' . $Upazila->id . '">' . $Upazila->upazila_name . '</option>';
        echo $str;
    }

    public function store(Request $request) {
        $Donor = new Donor;
        $common = new Common;

        $Donor->fname = $request->fname;
        $Donor->lname = $request->fullname;
        $Donor->email = $request->email;
        $Donor->fcm_email = 'na';
        $Donor->fcm_uid =  'na';
        $Donor->fcm_token =  'na';
        $Donor->verification =0;
        $Donor->gender = $request->gender;
        $Donor->birth_date = $request->birth_date;
        $Donor->last_donation = $request->last_donation;
        $Donor->phone = $request->phone;
        $Donor->division = $request->division;
        $Donor->district = $request->district;
        $Donor->thana = $request->thana;
        $Donor->address = $request->address;
        $Donor->blood_group = $request->blood_group;
        $Donor->rank = $request->rank;
        $Donor->web_url = $request->web_url;
        $Donor->fb_url = $request->fb_url;
        $Donor->status = $request->status;
        $Donor->donations_number = $request->donations_number;
        $Donor->password = bcrypt($request->password);
        $Donor->called_date = 'na';
        $Donor->called_today = 0;
        $Donor->religion = $request->religion;
        $Donor->is_physically_disble = $request->is_physically_disble;
        $Donor->nationality = $request->nationality;
        $Donor->nid = $request->nid;
        $Donor->age = $request->age;
        $Donor->pro_visible = 1;
        $Donor->latitude = 'na';
        $Donor->longitude = 'na';
        $Donor->lastLat = 'na';
        $Donor->lastLng = 'na';
        $Donor->post_code = $request->post_code;
        $Donor->updated_by = 2;

        $Donor->save();

        $last_insert_id = $Donor->id;

        $Donor_file = new Donor;
        $Donor_file = Donor::find($last_insert_id);
        if ($request->pic_path) {

            $fileName = $last_insert_id . '_' . $request->fullname;
            $profile_photo = $common->uploadImage('pic_path', 'images/profile', $fileName);
            $Donor_file->pic_path = $profile_photo;
            $Donor_file->save();
        }

        return redirect('/donor');
    }



public function signup(Request $request) {
        $Donor = new Donor;
        $common = new Common;

        $Donor->fname = $request->fname;
        $Donor->lname = $request->fullname;
        $Donor->email = $request->email;
        $Donor->fcm_email = 'na';
        $Donor->fcm_uid =  'na';
        $Donor->fcm_token =  'na';
        $Donor->verification =0;
        $Donor->gender = $request->gender;
        $Donor->birth_date = $request->birth_date;
        $Donor->last_donation = $request->last_donation;
        $Donor->phone = $request->phone;
        $Donor->division = $request->division;
        $Donor->district = $request->district;
        $Donor->thana = $request->thana;
        $Donor->address = $request->address;
        $Donor->blood_group = $request->blood_group;
        $Donor->rank = 0;
        $Donor->web_url = 'na';
        $Donor->fb_url = 'na';
        $Donor->status =1;
        $Donor->donations_number =0;
        $Donor->password =$request->password;
        $Donor->called_date = 'na';
        $Donor->called_today = 0;
        $Donor->religion = 'na';
        $Donor->is_physically_disble = 0;
        $Donor->nationality ='Bangladeshi';
        $Donor->nid ='na';
        $Donor->age = 0;
        $Donor->pro_visible = 1;
        $Donor->latitude =0;
        $Donor->longitude =0;
        $Donor->lastLat = 0;
        $Donor->lastLng = 0;
        $Donor->pic_path = $common->get_site_url().'public/images/profile/user.png';
        $Donor->post_code = $request->post_code;
         
        $Donor->save();

        $last_insert_id = $Donor->id; 

            $request->session()->put('id',$last_insert_id);
            $request->session()->put('email',$request->email); 


        return redirect('/donor-profile');

}
    public function show($id) {
        $data = Donor::find($id);
        return view('donor.show')->with('data', $data);
    }

    public function edit($id) {
        $data = Donor::find($id);
        return view('donor.edit')->with('data', $data);
    }

    public function update(Request $request) {
        $id = $request->id;
        $Donor = Donor::find($id);
        $Donor->fullname = $request->fullname;
        $Donor->email = $request->email;
        $Donor->gender = $request->gender;
        $Donor->date_of_birth = $request->date_of_birth;
        $Donor->last_donate_date = $request->last_donate_date;
        $Donor->phone = $request->phone;
        $Donor->district = $request->district;
        $Donor->upazila = $request->upazila;
        $Donor->location = $request->location;
        $Donor->blood_group = $request->blood_group;
        $Donor->donner_id = $request->donner_id;
        $Donor->rank = $request->rank;
        $Donor->web_url = $request->web_url;
        $Donor->fb_url = $request->fb_url;
        $Donor->profile_photo = $request->profile_photo;
        $Donor->status = $request->status;
        $Donor->number_of_donate = $request->number_of_donate;
        $Donor->password = bcrypt($request->password);
        $Donor->save();
        return redirect('/donor/' . $id);
    }

    public function destroy($id) {
        $donor = Donor::find($id);
        $donor->delete();
        return redirect('/donor');
    }

    public function donate() {
        return view('user/donationPage');
    }

    public function search(Request $request) {
        $data['division'] = Division::all();
        $donor = new Donor;
        $post_division = $request->division;
        $post_blood_group = $request->blood_group;
        $post_district = $request->district;
        $post_upazila = $request->upazila;
        //dd($post_blood_group);
        
        if ($post_division == 0 && $post_blood_group == '0') {
            $str = "SELECT * FROM donors"; 
        } elseif ($post_division == 0 && $post_blood_group != '0') {
            $str = "SELECT * FROM donors  WHERE blood_group='$post_blood_group' ";
        }elseif ($post_division != 0 && $post_blood_group != '0') {
            $str = "SELECT * FROM donors  WHERE blood_group='$post_blood_group' AND ";
        }
        if ($post_division != 0 && $post_blood_group == '0') {
             $str = "SELECT * FROM donors  WHERE";
        }

        if ($request->division != 0) {
            if (isset($request->division)) {
                $str .= "  division_id=" . $request->division;
            }
            if (isset($request->district)) {
                $str .= " AND district=" . $request->district;
            }
            if (isset($request->upazila)) {
                $str .= " AND upazila=" . $request->upazila;
            }
        }

        $data['result'] = DB::select($str);
        return view('search.ajax_search')->with('data', $data);
    }


    public function viewprofile($id) {
        $donor = new Donor;
        $data['donor_single'] = $donor->where('id', $id)->get();
        return view('search.viewprofile')->with('data', $data);
    }
    
    public function blood_request_view(){
        $data['request_list']= BloodRequest::all();
        return view('bloodrequest.view')->with('data',$data);
        
    }
    public function blood_request_create(){
        return view('bloodrequest.create');
    }
    public function blood_request_store(Request $request){
        $data =new BloodRequest;
        $data->user_id=$request->user_id;
        $data->request_blood_group=$request->request_blood_group;
        $data->patient_name=$request->patient_name;
        $data->patient_phone=$request->patient_phone;
        $data->patient_place=$request->patient_place;
        $data->number_blood_bag=$request->number_blood_bag;
        $data->disease=$request->disease;
        $data->relation=$request->relation;
        $data->opration_time=$request->operation_time;
        $data->save();
        return redirect('/bloodrequest');
    }
    
    public function donor_profile(Request $request){
        $login_donor_email = $request->session()->get('email');
        $login_donor_id = $request->session()->get('id');

        if(empty($login_donor_email) && empty($login_donor_id)){

            $request->session()->put('session_url','/donor-profile');
            return redirect('/donor-login');
         }

        $data['messages'] = Message::where([['sender_email', $login_donor_email], ['sender_type', 'donor']])->get(); 
        $data['last5message'] = Message::where([['sender_email', $login_donor_email], ['sender_type', 'donor'],['is_read',0]])->orderByDesc('created_at')->take(5)->get(); 
        $data['last5messageCount']=$data['last5message']->count();


        $data['activities'] = Activity::where([['created_id', $login_donor_id], ['created_type', 'donor']])->get(); 
        $data['last5activities']= Activity::where([['created_id', $login_donor_id], ['created_type', 'donor']])->orderByDesc('created_at')->take(5)->get(); 
        $data['last5activitiesCount']=$data['last5activities']->count();

        $data['division'] = Division::all(); 
        $data['donor'] = Donor::where('email',$login_donor_email)->first();
        //dd($data);
        return view('frontend.donor_profile')->with('data', $data);
    }



   public function singleMessageShow(Request $request,$msg_id){
        

        $login_donor_email = $request->session()->get('email');
        $login_donor_id = $request->session()->get('id');

        if(empty($login_donor_email) && empty($login_donor_id)){

            $request->session()->put('session_url','/donor-profile/message-show/'.$msg_id);
            return redirect('/donor-login');
         }

        $data['messages'] = Message::where([['sender_email', $login_donor_email], ['sender_type', 'donor']])->get(); 
        $data['singlemeaasge']=Message::where([['id',$msg_id ],['sender_email', $login_donor_email], ['sender_type', 'donor']])->first();


         
        $data['last5message'] = Message::where([['sender_email', $login_donor_email], ['sender_type', 'donor'],['is_read',0]])->orderByDesc('created_at')->take(5)->get(); 
        $data['last5messageCount']=$data['last5message']->count();

        
        $data['activities'] = Activity::where([['created_id', $login_donor_id], ['created_type', 'donor']])->get(); 
        $data['last5activities']= Activity::where([['created_id', $login_donor_id], ['created_type', 'donor']])->orderByDesc('created_at')->take(5)->get(); 
        $data['division'] = Division::all();
        $donor_email= $request->session()->get('email');
        $data['donor'] = Donor::where('email',$donor_email)->first();
        return view('frontend.singleMessageShow')->with('data', $data);
    }

   public function singleRequestShow(Request $request,$req_id){
        $value = $request->session()->get('email');
        if(empty($value)){
           return redirect('/donor-login');
         }
        $login_donor_id = $request->session()->get('id');
        $data['login_email'] = $request->session()->get('email');
        $data['messages'] = Message::where([['sender_id', $login_donor_id], ['sender_type', 'donor']])->get(); 

        $data['singlerequest']=BloodRequest::where([['id',$req_id ],['sender_email', $data['login_email']], ['sender_type', 'donor']])->first();


         
        $data['last5message'] = Message::where([['sender_id', $login_donor_id], ['sender_type', 'donor'],['is_read',0]])->orderByDesc('created_at')->take(5)->get(); 
        $data['last5messageCount']=$data['last5message']->count();

        
        $data['activities'] = Activity::where([['created_id', $login_donor_id], ['created_type', 'donor']])->get(); 
        $data['last5activities']= Activity::where([['created_id', $login_donor_id], ['created_type', 'donor']])->orderByDesc('created_at')->take(5)->get(); 
        $data['division'] = Division::all();
        $donor_email= $request->session()->get('email');
        $data['donor'] = Donor::where('email',$donor_email)->first();
        return view('frontend.singleRequestShow')->with('data', $data);
    }

    public function donor_login_access(Request $request){
        $donor_username=$request->email;
        $donor_password=$request->password; 
        $data['donor'] = Donor:: where([['email',$donor_username],['password',$donor_password]])->first();

        if(!empty($data['donor'])){
            $request->session()->put('id', $data['donor']->id);
            $request->session()->put('email', $data['donor']->email);
            $request->session()->push('donors',$data['donor']); 
            return redirect('/donor-profile');
        }
        else {
             return redirect('/donor-login?message=Your Email or Passord is not valid !');
        }

    }
    public function donor_login(Request $request) {
    $data = $request->session()->all();
    $value = $request->session()->get('email');
    if(!empty($value)){
           return redirect('/donor-profile');
       } 
        $data['division'] = Division::all();
        $data['donor'] = Donor::all();
        return view('frontend.donor_login');
    }

    public function logout(Request $request){
        $request->session()->forget('email');
        $request->session()->forget('donors');
        
        $request->session()->flush();

       return redirect('/donor-login');
    }

}
