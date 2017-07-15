<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Donor;
use App\Gallery;
use App\Gallery_detail;
use DB;
use App\Division;
use App\District;
use App\Upazila;
use App\Message;
use App\Activity;
use App\BloodRequest;
use App\Libraries\Common;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() { 
        $data['gallery_category'] = Gallery::all();
        $data['gallery'] = Gallery_detail::all();

        $data['galleries'] = DB::table('galleries')
                ->join('gallery_details', 'gallery_details.gallery_id', '=', 'galleries.id')
                ->take(30)
                ->orderBy('gallery_details.id', 'desc')
                ->get();

        $data['slider'] = DB::table('galleries')
                ->join('gallery_details', 'gallery_details.gallery_id', '=', 'galleries.id') 
                ->where('galleries.page_name', 'slider')
                ->get();

        return view('frontend.home')->with('data', $data);
    }

    public function blood_news() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.blood_news');
    }

    public function blood_info() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.blood_info');
    }
    public function blood_request() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.blood_request');
    }
    public function blood_request_store(Request $request){
        $data =new BloodRequest;
        $msg=new Message;
        $actv=new Activity;
        $data->user_id=6;
        $data->request_blood_group=$request->request_blood_group;
        $data->patient_hospital=$request->patient_hospital;
        $data->patient_phone=$request->patient_phone;
        $data->patient_place=$request->patient_place;
        $data->number_blood_bag=$request->number_blood_bag;
        $data->disease=$request->disease;
        $data->relation=$request->relation;
        $data->opration_time=$request->opration_time;
        $data->save();
        //-----------------------------------------------------//
        $msg->sender_id=2;
        $msg->sender_type='donor';
        $msg->receiver_id=303;
        $msg->receiver_type='admin';
        $msg->message='Need '.$request->request_blood_group.'Blood '.$request->number_blood_bag.' for '.$request->patient_name;
        $msg->created_by='Sakib';
        $msg->updated_by='Rashed';
        $msg->save();
        //------------------------------------------------------//
        $actv->created_id=5;
        $actv->created_type='donor';
        $actv->receiver_id=303;
        $actv->receiver_type='admin';
        $actv->purpose='dont know';
        $actv->short_message='Need '.$request->request_blood_group.'Blood '.$request->number_blood_bag.' for '.$request->patient_name;;
        $actv->is_read=1;
        $actv->is_reply=0;
        $actv->parent_id=6;
        $actv->created_by='Asru';
        $actv->save();
        return redirect('/blood-request?send_request_suceessfully=yes');
    }

    public function activity_list() {
        $data['activity'] = Activity::all();
        return view('admin.activity')->with('data', $data);
    }
    public function news_page() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.news_page');
    }

    public function news_detail_page() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.news_detail_page');
    }

    public function write_to_doctor() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.write_to_doctor');
    }

    public function view_doctor() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.view_doctor');
    }

    public function view_hospital() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.view_hospital');
    }

    public function search_hospital() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        
        $data['hospital_list'] = \App\Hospital::all();
        return view('frontend.search_hospital')->with('data', $data);
    }

    public function view_ambulance() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.view_ambulance');
    }

    public function blog_page() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.view_blog');
    }

    public function recent_event() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.recent_event');
    }

    public function upcoming_event() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.upcoming_event');
    }

    public function volunteer() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.volunteer');
    }

    public function make_donation() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.make_donation');
    }

    public function about_us() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.about_us');
    }

    public function contact() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.contact');
    }

    public function OurPolicy() {
        $data['OurPolicy'] = Content:: where('content_type', 'our-policy')->get();
        return view('user.our-policy')->with('data', $data);
    }

    public function SearchDonor() {
        $data['donor'] = Donor:: where('division_id', 2)->get();
        return view('user.SearchDonor')->with('data', $data);
    }

    public function getStateList(Request $request) {
        $districts = DB::table("districts")
                ->where("division_id", $request->division_id)
                ->lists("name", "id");
        return response()->json($districts);
    }

    public function getCityList(Request $request) {
        $upazilas = DB::table("upazilas")
                ->where("district_id", $request->district_id)
                ->lists("name", "id");
        return response()->json($upazilas);
    }

    public function search() {
        return view('search.view');
    }

    public function SearchBloodDonor() {
        $data['division'] = Division::all();
        $data['donor'] = Donor::all();

        return view('frontend.SearchBloodDonor')->with('data', $data);
    }  

    public function SliderShow() {
        $data['slider'] = Division::all();
        $data['donor'] = Donor::all();

        return view('frontend.SearchBloodDonor')->with('data', $data);
    }

    public function ShowBloodDonor(Request $request) {
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
        } elseif ($post_division != 0 && $post_blood_group != '0') {
            $str = "SELECT * FROM donors  WHERE blood_group='$post_blood_group' AND ";
        }
        if ($post_division != 0 && $post_blood_group == '0') {
            $str = "SELECT * FROM donors  WHERE";
        }

        if ($request->division != 0) {
            if (isset($request->division)) {
                $str .= "  division=" . $request->division;
            }
            if (isset($request->district)) {
                $str .= " AND district=" . $request->district;
            }
            if (isset($request->upazila)) {
                $str .= " AND thana=" . $request->upazila;
            }
        }

        $data['result'] = DB::select($str);
        //  return view('search.ajax_search')->with('data', $data);

        return view('frontend.SearchBloodDonor')->with('data', $data);
    }

    public function show_hospital_list() {

    }

    public function ajax() {
        return view('search.im');
    }

}
