<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Doctor;
use App\Doctor_designation;
use App\Hospital;
use App\Division;
use App\Doctor_speciality;
use App\doctor_degree;
use App\Find_solution;
use App\Libraries\Common;
use DB;

class DoctorController extends Controller {

    public function __construct() {
        //$this->middleware('auth');
    }

    public function view() {
        $data['doctor'] = Doctor::all();
        return view('doctor.view')->with('data', $data);
    }

public function ViewDoctor(Request $request){
        $specialist=$request->specialist;
        $div=$request->division;
        $dis=$request->district;
        $upz=$request->upazila;
        $data['doctor_list'] = Doctor:: where([['division', $div], ['district', $dis], ['upazila', $upz], ['speacilist', $specialist]])->get();
        return view('frontend.view_doctor')->with('data', $data);
}

public function create() {
        $data['designation'] = Doctor_designation::all();
        $data['hospital'] = Hospital::all();
        $data['specility'] = Doctor_speciality::all();
        return view('doctor.create')->with('data', $data);
    }

    public function store(Request $request) {
        $doctor = new Doctor;
        $common = new Common;

        $doctor->hospital = $request->hospital;
        $doctor->name = $request->name;
        $doctor->speacilist = $request->speacilist;
        $doctor->designation = $request->designation;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->gender = $request->gender;
        //$doctor->profile_photo = $request->profile_photo;
        $doctor->preasent_address = $request->preasent_address;
        $doctor->chamber_address = $request->chamber_address;
        $doctor->doctor_detail = $request->doctor_detail;



        $fileName = 'ffff';
        $profile_photo = $common->uploadImage('profile_photo', 'images/profile', $fileName);
        $doctor->profile_photo = $profile_photo;

        $doctor->save();
        return redirect('/admin/doctor/view');
    }

    public function search_view() {
        $data['hospital'] = Hospital::all();
        $data['specility'] = Doctor_speciality::all();
        $data['location'] = Doctor::all();
        return view('doctor.search')->with('data', $data);
    }

    public function search(Request $request) {
        //$doctor = new Doctor;

        $data['hospital'] = Hospital::all();
        $data['specility'] = Doctor_speciality::all();
        $data['location'] = Doctor::all();
        $hospital = $request->hospital;
        $specialist = $request->speacilist;
        $location = $request->preasent_address;
        /*
          if ($hospital == 0 && $specialist == 0 && $location='0') {
          $str = "SELECT * FROM doctors";
          } elseif ($hospital == 0 && $specialist == 0 && $location!='0') {
          $str = "SELECT * FROM donors  WHERE present_address='$location' ";
          }
          elseif ($hospital == 0 && $specialist != 0 && $location=='0') {
          $str = "SELECT * FROM donors  WHERE speacilist='$specialist' ";
          }
          elseif ($hospital == 0 && $specialist != 0 && $location!='0') {
          $str = "SELECT * FROM donors  WHERE speacilist='$specialist' AND  present_address='$location' ";
          }
          elseif ($hospital != 0 && $specialist == 0 && $location=='0') {
          $str = "SELECT * FROM donors  WHERE hospital='$hospital' ";
          }
          elseif ($hospital != 0 && $specialist == 0 && $location!='0') {
          $str = "SELECT * FROM donors  WHERE hospital='$hospital' AND present_address='$location' ";
          }
          elseif ($hospital != 0 && $specialist != 0 && $location=='0') {
          $str = "SELECT * FROM donors  WHERE hospital='$hospital' AND speacilist='$specialist' ";
          }
          elseif ($hospital != 0 && $specialist != 0 && $location!='0') {
          $str = "SELECT * FROM donors  WHERE hospital='$hospital' AND speacilist='$specialist' AND present_address='$location' ";
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

         */

        $sql = "SELECT * FROM doctors WHERE hospital='$hospital' AND speacilist='$specialist' AND present_address='$location' ";
        $data['result'] = DB::select($sql);
        return view('doctor.search')->with('data', $data);
    }

    public function hospital_view() {
        $data['hospital'] = Hospital::all();
        return view('hospital.view')->with('data', $data);
    }

    public function hospital_create() {
        return view('hospital.create');
    }

    public function hospital_store(Request $request) {
        $Hospital = new Hospital;
        // $data['hospital'] = Hospital::all(); 
        //dd($data['hospital']);
        $Hospital->hospital_name = $request->hospital_name;
        $Hospital->location = $request->location;
        $Hospital->phone = $request->phone;
        $Hospital->incharge_name = $request->incharge_name;
        $Hospital->details = $request->details;
        $Hospital->save();
        return redirect('/admin/hospital/view_hospital');
    }

    public function designation_view() {
        $data['designation'] = Doctor_designation::all();
        return view('designation.view')->with('data', $data);
    }

    public function designation_create() {
        return view('designation.create');
    }

    public function store_designation(Request $request) {
        $designation = new Doctor_designation;
        $designation->name = $request->name;
        $designation->save();
        return redirect('/admin/designation/view_designation');
    }

    public function degree_view() {
        $data['degree'] = doctor_degree::all();
        return view('degree.view')->with('data', $data);
    }

    public function degree_create() {
        return view('degree.create');
    }

    public function degree_store(Request $request) {
        $degree = new doctor_degree;
        $degree->abbr = $request->abbr;
        $degree->degree = $request->degree;
        $degree->save();
        return redirect('/admin/degree/view_degree');
    }
    
    public function FindDoctor() {
        $data['division'] = Division::all();
        $data['doctor'] = Doctor::all();
        $data['doctor_specialities'] = Doctor_speciality::all();
        return view('frontend.find_doctor')->with('data', $data);
    }

    public function doctor_edit($id) {
        $data['hospital'] = Hospital::all();
        $data['designation'] = Doctor_designation::all();
        $data['specility'] = Doctor_speciality::all();
        $data['degree'] = doctor_degree::all();
        $data['doctor'] = Doctor::find($id);
        return view('doctor.edit')->with('data', $data);
    }
    public function doctor_update(Request $request){
        $common =New  Common;
        $id = $request->id;
        $doctor = Doctor::find($id); 
        $doctor->hospital = $request->hospital;
        $doctor->name = $request->name;
        $doctor->speacilist = $request->speacilist;
        $doctor->designation = $request->designation;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->gender = $request->gender;
        $doctor->preasent_address = $request->preasent_address;
        $doctor->chamber_address = $request->chamber_address;
        $doctor->doctor_detail = $request->doctor_detail;
 
        $profile_photo = $common->uploadImage('profile_photo', 'images/profile');
        $doctor->profile_photo = $profile_photo;

        $doctor->save();
        return redirect('/admin/doctor/view/');
    }
    public function hospital_edit($id){
        $data['hospital'] = Hospital::find($id);
        return view('hospital.edit')->with('data', $data);
    }
    public function hospital_update(Request $request){
        $id = $request->id;
        $hospital = Hospital::find($id); 
        $hospital->hospital_name = $request->hospital_name;
        $hospital->location = $request->location;
        $hospital->phone = $request->phone;
        $hospital->incharge_name = $request->incharge_name;
        $hospital->details = $request->details;
        $hospital->save();
        return redirect('admin/hospital/view_hospital');
    }
    public function designation_edit($id){
        $data['designation'] = Doctor_designation::find($id);
        return view('designation.edit')->with('data', $data);
    }
    public function designation_update(Request $request){
        $id = $request->id;
        $designation = Doctor_designation::find($id); 
        $designation->name = $request->name;
        $designation->save();
        return redirect('admin/designation/view_designation');
    }
    public function degree_edit($id){
        $data['degree'] = doctor_degree::find($id);
        return view('degree.edit')->with('data', $data);
    }
    public function degree_update(Request $request){
        $id = $request->id;
        $degree = doctor_degree::find($id); 
        $degree->abbr = $request->abbr;
        $degree->degree = $request->degree;
        $degree->save();
        return redirect('admin/degree/view_degree');
    }
    public function degree_delete($id){
        $degree = doctor_degree::find($id);
        $degree->delete();        
        return redirect('admin/degree/view_degree');
    }
    public function designation_delete($id){
        $designation = Doctor_designation::find($id);
        $designation->delete();        
        return redirect('admin/designation/view_designation');
    }
    public function doctor_delete($id){
        $doctor = Doctor::find($id);
        $doctor->delete();        
        return redirect('admin/doctor/view');
    }
    public function hospital_delete($id){
        $hospital = Hospital::find($id);
        $hospital->delete();        
        return redirect('admin/hospital/view_hospital');
    }
    public function write_to_doctor(Request $request){
        $data =new Find_solution();
        $data->name=$request->name;
        $data->age=$request->age;
        $data->last_blood_pressure=$request->last_blood_pressure;
        $data->any_disease=$request->any_disease;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->problems=$request->problems;
        $data->save();
        return redirect('/write-to-doctor');
    }
    
    public function view_problem() {
        $data['problems'] = Find_solution::all();
        return view('problems.view')->with('data', $data);
    }
    public function problem_delete($id){
        $degree = Find_solution::find($id);
        $degree->delete();        
        return redirect('admin/doctor/problem-view');
    }
    public function problem_show($id) {
        $data = Find_solution::find($id);
        return view('problems.show')->with('data', $data);
    }

}
