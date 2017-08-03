<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;
use App\Donor;
use App\Gallery;
use App\Gallery_detail;
use DB;
use App\Division;
use App\More_about_blood;
use App\District;
use App\Upazila;
use App\Message;
use App\Activity;
use App\Hospital;
use App\Doctor;
use App\Doctor_speciality;
use App\BloodRequest;
use App\Blog;
use App\System_setting;
use App\Libraries\Common;
use App\Testimonial;

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
        $common = new Common;
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


        $data['blood_fighter'] = DB::table('galleries')
                ->join('gallery_details', 'gallery_details.gallery_id', '=', 'galleries.id') 
                ->take(8)
                ->orderBy('gallery_details.id', 'desc')
                ->get();


        $data['a_positive'] = Donor::where([['blood_group','A+'],['already_donated',0]])->get()->count();
        $data['a_negative'] = Donor::where([['blood_group','A-'],['already_donated',0]])->get()->count();
        $data['b_positive'] = Donor::where([['blood_group','B+'],['already_donated',0]])->get()->count();
        $data['b_negative'] = Donor::where([['blood_group','B-'],['already_donated',0]])->get()->count();
        $data['ab_positive'] = Donor::where([['blood_group','AB+'],['already_donated',0]])->get()->count();
        $data['ab_negative'] = Donor::where([['blood_group','AB-'],['already_donated',0]])->get()->count();
        $data['o_positive'] = Donor::where([['blood_group','O+'],['already_donated',0]])->get()->count();
        $data['o_negative'] = Donor::where([['blood_group','O-'],['already_donated',0]])->get()->count();

        //-----------
        $data['t_a_positive'] = Donor::where('blood_group','A+')->get()->count();
        $data['t_a_negative'] = Donor::where('blood_group','A-')->get()->count();
        $data['t_b_positive'] = Donor::where('blood_group','B+')->get()->count();
        $data['t_b_negative'] = Donor::where('blood_group','B-')->get()->count();
        $data['t_ab_positive'] = Donor::where('blood_group','AB+')->get()->count();
        $data['t_ab_negative'] = Donor::where('blood_group','AB-')->get()->count();
        $data['t_o_positive'] = Donor::where('blood_group','O+')->get()->count();
        $data['t_o_negative'] = Donor::where('blood_group','O-')->get()->count();



        $data['recent_donor'] = Donor:: where('already_donated', 1)->orderByDesc('last_donation')->get();
        $data['upcoming_event'] = Content:: where('content_type', 'upcoming_events')->get();
        $data['all_blood_info']=Content::where('content_type','more_blood')->orderByDesc('created_at')->take(4)->get();
        $data['testimonial']=Content::where('content_type','what_people_say')->orderByDesc('created_at')->take(5)->get();
   //     $data['testimonial'] = Testimonial::all();
        return view('frontend.home')->with('data', $data);
    }
    public function seeMoreBloodInfo(){
        $data['all_blood_info']=Content::where('content_type','more_blood')->orderByDesc('created_at')->get();
        return view('frontend.seeMoreBloodInfo')->with('data', $data);
    }



//----------send message from contact form ------
    public function send_message(Request $request){

        $msg = new Message; 
        $msg->sender_email = $request->email;
        $msg->sender_type = 'user';

        $msg->receiver_type =  'admin';
        $msg->receiver_email =  'admin@lifecycle.org'; 

        $msg->message ='Name: '. $request->name.
        '<br>Email: '. $request->email.
        '<br>Phone: '. $request->phone.
        'Date Time: '.date('d-M-Y H:m').
        '<br>Message:' . $request->message;
        if(!empty($request->session()->get('id'))){$id=$request->session()->get('id');}
        else{ $id=1000; }

        $msg->created_by = $id; 
        $msg->save();
        return redirect('/contact?message='.$request->name.', Your message send successfully !');
    }



    public function SearchAny(Request $request) {
        $searchdata = $request->searchany;

        $data['donor'] = More_about_blood:: where('slug', 'donor_24')->first();
    }

    public function logout() {
        unset($_SESSION['donor_login']);
        //  session_destroy();
        return redirect('/donor-login');
    }

    public function blood_news() {
        //$data['blood_news'] = Blog::all();
        $data['blood_news'] = Blog:: where('blog_category', 2)->orderByDesc('id')->get();
        return view('frontend.blood_news')->with('data', $data);
    }

    public function read_more($id) {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        $data['all_news']=Content::where('content_type','more_blood')->take(6)->get();
        $data['read_more_detail'] = Content::find($id);
        return view('frontend.read_more')->with('data', $data);
    }

    public function blood_info() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.blood_info');
    }

    public function blood_request() {
        $request=request();
         $value = $request->session()->get('email');

        if(empty($value)){

            $request->session()->put('redirect_url','/blood-request');
           return redirect('/donor-login');
         }
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        return view('frontend.blood_request');
    }

    public function blood_request_store(Request $request) {
        $data = new BloodRequest;
        $msg = new Message;
        $actv = new Activity;
        //-------------------For BloodRequest Table--------------------------
        $data->request_blood_group = $request->request_blood_group;
        $data->patient_hospital = $request->patient_hospital;
        $data->patient_phone = $request->patient_phone;
        $data->patient_place = $request->patient_place;
        $data->number_blood_bag = $request->number_blood_bag;
        $data->disease = $request->disease;
        $data->relation = $request->relation;
        $data->opration_time = $request->opration_time;
        $data->sender_email =  $request->session()->get('email');
        $data->sender_type =  'donor';
        $data->receiver_type =  'admin';
        $data->receiver_email =  'admin@lifecycle.org';
        $data->created_by = $request->session()->get('id');
        $data->save();
        //------------------------For Message---------------------------//
        //$msg->sender_email =  $request->session()->get('email');
        //$msg->sender_type =  'donor';
        //$msg->receiver_type =  'admin';
        //$msg->receiver_email =  'admin@lifecycle.org';
        //$msg->sender_type = 'donor';
        //$msg->receiver_id = 303;
        //$msg->receiver_type = 'admin';
        //$msg->message = 'Need ' . $request->request_blood_group . 'Blood ' . $request->number_blood_bag . ' in ' . $request->patient_hospital . 'at' . $request->opration_time;
        //$msg->created_by = $request->session()->get('id');
        //$msg->updated_by = 'Rashed';
        //$msg->save();
        //---------------------------For Activity Table---------------------------//
        $actv->created_id = $request->session()->get('id');;
        $actv->created_email = $request->session()->get('email');;
        $actv->created_type = 'donor';
        $actv->receiver_email = 'admin@lifecycle.org';
        $actv->receiver_type = 'admin';
        $actv->purpose = 'umknown';
        $actv->short_message = 'Need ' . $request->request_blood_group . 'Blood ' . $request->number_blood_bag . ' in ' . $request->patient_hospital . 'at' . $request->opration_time;
        $actv->is_read = 0;
        $actv->is_reply = 0;
        $actv->parent_id = 0;
        $actv->created_by = $request->session()->get('email');
        $actv->save();
        return redirect('/blood-request?send_request_suceessfully=yes');
    }

    public function activity_list() {
        $data['activity'] = Activity::all();
        return view('admin.activity')->with('data', $data);
    }

    public function news_page() {
        $data['last_news'] = Content:: where('content_type', 'news')->take(1)->orderByDesc('created_at')->first();
        $data['news'] = Content:: where('content_type', 'news')->take(10)->skip(5)->orderByDesc('created_at')->get();
        $data['recent_news'] = Content:: where('content_type', 'news')->take(4)->skip(1)->orderByDesc('created_at')->get();
        return view('frontend.news_page')->with('data', $data);
    }

    public function news_detail_page($id) {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'))
        $data['news'] = Content:: where('content_type', 'news')->take(6)->get();
        $data['news_detail'] = Content::find($id);
        //dd($data['news_detail']);
        return view('frontend.news_detail_page')->with('data', $data);
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
        $data['division'] = Division::all();
        return view('frontend.view_hospital')->with('data', $data);
    }

    public function search_hospital(Request $request) {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        $div = $request->division;
        $dis = $request->district;
        $upz = $request->upazila;
        $data['division'] = Division::all();
        if(!empty($div) && !empty($dis) && !empty($upz) ){
        $data['hospital_list'] = Hospital:: where([['division', $div], ['district', $dis], ['upazila', $upz]])->get();
      }
        if(!empty($div) && !empty($dis)) {
        $data['hospital_list'] = Hospital:: where([['division', $div], ['district', $dis]])->get();
      }

        if(!empty($div) ) {
        $data['hospital_list'] = Hospital:: where('division', $div)->get();
      }


    else{
            $data['hospital_list'] = Hospital::all();
    }
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
        $data['blood_news'] = Content:: where('content_type', 'blog')->orderByDesc('created_at')->get();
        return view('frontend.view_blog')->with('data', $data);
    }

    public function blog_detail($id) {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        $data['blog_detail'] = Blog::find($id);
        return view('frontend.view_blog_detail')->with('data', $data);
    }

    public function events() {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        //$data['division'] = Division::all();
        $data['upcoming_event'] = Content:: where('content_type', 'upcoming_events')->take(10)->orderByDesc('created_at')->get();
        $data['recent_event'] = Content:: where('content_type', 'recent_events')->take(4)->skip(1)->orderByDesc('created_at')->get();
        $data['last_recent_event'] = Content:: where('content_type', 'recent_events')->take(1)->orderByDesc('created_at')->first();
        return view('frontend.events')->with('data', $data);
    }

    public function recent_event($id) {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        $data['recent'] = Content:: where('content_type', 'recent_events')->take(10)->get();
        $data['recent_detail'] = Content::find($id);
        return view('frontend.recent_event')->with('data', $data);
    }

    public function upcoming_event($id) {
        //$divisions = DB::table("divisions")->lists("name", "id");
        //return view('search.im', compact('divisions'));
        $data['upcoming'] = Content:: where('content_type', 'upcoming_events')->take(10)->get();
        $data['upcoming_detail'] = Content::find($id);
        //  dd($data['upcoming_detail']);
        return view('frontend.upcoming_event')->with('data', $data);
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
        $data['about_us'] = Content:: where('content_type', 'about_us')->first();
        return view('frontend.about_us')->with('data', $data);
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
