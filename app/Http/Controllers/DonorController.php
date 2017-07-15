<?php

namespace App\Http\Controllers;

use App\Donor;
use Illuminate\Http\Request;
use App\Division;
use App\District;
use App\Upazila;
use App\BloodRequest;
use App\Libraries\Common;
use DB;
use Hash;
class DonorController extends Controller {

    public function index() {
        $data['division'] = Division::all();
        $data['donor'] = Donor::all();
        return view('donor.view')->with('data', $data);
    }
 public function donor_login() {
        $data['division'] = Division::all();
        $data['donor'] = Donor::all();
        return view('frontend.donor_login');
    }
    public function donor_login_access(Request $request){
        $donor_username=$request->donor_username;
        $donor_password=$request->donor_password;
        $donor_password = Hash::make($donor_password);
    //    dd($donor_password);
        $data['donor'] = Donor:: where([['email',$donor_username],['password',$donor_password]])->first();


       dd($data['donor']);

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
        $Donor->fcm_email = $request->email;
        $Donor->fcm_uid = 1;
        $Donor->fcm_token = 'kynbupDsNrtWwUx3iAWrpzdfnSiqAtKJ6m4QjWID';
        $Donor->verification = 892345;
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
        $Donor->called_date = $request->called_date;
        $Donor->called_today = $request->called_today;
        $Donor->religion = $request->religion;
        $Donor->is_physically_disble = $request->is_physically_disble;
        $Donor->nationality = $request->nationality;
        $Donor->nid = $request->nid;
        $Donor->age = $request->age;
        $Donor->pro_visible = $request->pro_visible;
        $Donor->latitude = $request->latitude;
        $Donor->longitude = $request->longitude;
        $Donor->lastLat = $request->lastLat;
        $Donor->lastLng = $request->lastLng;
        $Donor->longitude = $request->longitude;
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
    
    
    

}
