<?php

namespace App\Http\Controllers;

use App\User; 
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
        return redirect('/admin');
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
}
