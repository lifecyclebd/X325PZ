<?php

namespace App\Http\Controllers;

use App\User;
use App\Doctor;
use App\Donor;
use App\Hospital;
use App\Message;
use App\More_about_blood;
use App\Find_solution;
use App\Activity;
use App\BloodRequest;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Libraries\Common;
use Auth;

class AdminController extends Controller {

    public function __construct() {
       $this->middleware('auth');
      
    }

    public function index() {
        $data = User::all();
        $data['count_user'] = User::get()->count();
        $data['count_donor'] = Donor::get()->count();
        
        $data['a_positive'] = Donor::where('blood_group','A+')->get()->count();
        $data['a_negative'] = Donor::where('blood_group','A-')->get()->count();
        $data['b_positive'] = Donor::where('blood_group','B+')->get()->count();
        $data['b_negative'] = Donor::where('blood_group','B-')->get()->count();
        $data['ab_negative'] = Donor::where('blood_group','AB-')->get()->count();
        $data['o_positive'] = Donor::where('blood_group','O+')->get()->count();
        $data['o_negative'] = Donor::where('blood_group','O-')->get()->count();
        
        
        $data['count_doctor'] = Doctor::get()->count();
        $data['count_hospital'] = Hospital::get()->count();
        $data['count_message'] = Message::get()->count();
        $data['count_activity'] = Activity::get()->count();
        $data['count_bloodrequest'] = BloodRequest::get()->count();
        $data['count_testimonial'] = Testimonial::get()->count();
        return view('admin.home_page')->with('data', $data);
    }
    public function view_admin() {
      
        $data = User::all();
        return view('admin.view')->with('data', $data);
    }

    public function create() {

        return view('admin.create');
    }

    public function store(Request $request) {
        $User = new User;
        //$formdata = $request->all();
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = bcrypt($request->password);
        $User->remember_token = $request->_token;
        $User->save();

        $request->session()->put('operationMessage', 'Admin Add Successfully.');
        return redirect('/admin/view');
    }

    public function show($id) {
        $data = User::find($id);
        return view('admin.show')->with('data', $data);
    }

    public function edit($id) {
        $data = User::find($id);
        return view('admin.edit')->with('data', $data);
    }

    public function update(Request $request) {
        $id = $request->id;
        $admin = User::find($id);
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->save();
        return redirect('/admin/' . $id);
    }

    public function destroy($id) {
        $admin = User::find($id);
        $admin->delete();        
        return redirect('/admin');

    }
    public function view_testimonial() {
        //dd(111111);
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        $data['testimonial']=Testimonial::all();
        return view('testimonial.view_testimonial')->with('data', $data);
    }
    public function create_testimonial() {
        //dd(111111);
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        //$data['testimonial']=Testimonial::all();
        return view('testimonial.create_testimonial');
    }
    
    public function store_testimonial(Request $request) {
        $Donor = new Testimonial();
        $common = new Common;

        $Donor->name = $request->name;
        $Donor->email = $request->email;
        $Donor->designation = $request->designation;
        $Donor->institution = $request->institution;
        $Donor->web_url = $request->web_url;
        $Donor->title = $request->title;
        $Donor->fb_url = $request->fb_url;
        $Donor->linkdin_url = $request->linkdin_url;
        $Donor->rank = $request->rank;
        $Donor->message = $request->message;

        $Donor->save();

        $last_insert_id = $Donor->id;

        $Donor_file = new Testimonial();
        $Donor_file = Testimonial::find($last_insert_id);
        if ($request->photo) {

            $fileName = $last_insert_id . '_' . $request->name;
            $profile_photo = $common->uploadImage('photo', 'images/testimonial', $fileName);
            $Donor_file->photo = $profile_photo;
            $Donor_file->save();
        }

        return redirect('/admin/testimonial');
    }
    public function view_more_blood(){
        $data['more_blood'] = More_about_blood::all();
        return view('more_blood.view')->with('data', $data);
    }
    public function edit_more_blood($id){
        $data['edit_more_blood'] = More_about_blood::find($id);
        return view('more_blood.edit')->with('data', $data);
    }
    public function update_more_blood(Request $request){
        $common=new Common();
        $id=$request->id;
        $data = More_about_blood::find($id); 
        $data->title=$request->title;
        $data->short_description=$request->short_description;
        $data->long_description=$request->long_description;
        $data->save();
        
        $profile_photo = $common->uploadImage('photo', 'images');
        $data->photo = $profile_photo;
        $data->save();
        return redirect('/admin/more-blood/view');
    }

    
    public function view_write_to_doctor(){
        $data['problems'] = Find_solution::all();
        return view('problems.view')->with('data', $data);
    }
    
    public function doctor_reply_store(Request $request){
        
        $data =new Message(); 
        $email=$request->email;
        $data->receiver_email=$email;
        $data->receiver_type='donor';
        $data->sender_type='doctor';
        $data->sender_id=1;
        $data->is_read=0;
        $data->created_by='Doctor';
        $data->message=$request->message;
        $data->save();
        
        
        return redirect('/admin/write/to/doctor');
    }
}
