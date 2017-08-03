<?php

namespace App\Http\Controllers;

use App\Content;
use App\Blog_Category;
use Illuminate\Http\Request;
use App\BloodRequest;
use App\Libraries\Common;
use DB;
class ContentController extends Controller {

    public function __construct() {
            $this->middleware('auth');
    }

    public function index() {
        $data['content'] = Content::orderBy('id', 'desc')->get();
        return view('content.view')->with('data', $data);
    }    

    public function contentSearch(Request $request) {

        if ($request->isMethod('post')) {
        $data['content'] = Content::where('content_type',$request->category)->orderBy('id', 'desc')->get();
        }
        else {
        $data['content'] = Content::orderBy('id', 'desc')->get();
        }
        return view('content.search-content')->with('data', $data);
    }


    public function create() {

        $data['all_blog_categories']=Blog_Category::all();

        return view('content.create')->with('data', $data);
    }

    public function store(Request $request) {
        $Content = new Content; 

        $Content->name=$request->name;
        $Content->designation=$request->designation;
        $Content->institution=$request->institution;
        $Content->email=$request->email;
        $Content->phone=$request->phone;
        $Content->location=$request->location;
        $Content->blood_group=$request->blood_group;
        $Content->content_title=$request->content_title;
        $Content->content_description=$request->content_description;
        $Content->content_type=$request->content_type;
        $Content->event_start_date=$request->event_start_date;
        $Content->event_end_date=$request->event_end_date;
        $Content->blog_category=$request->blog_category;
        $Content->access_mode=$request->access_mode;
      //  $Content->published_date=$request->published_date;
        $Content->post_order=$request->post_order;

        $Content->fb_url=$request->fb_url;
        $Content->web_url=$request->web_url;
        $Content->linked_url=$request->linked_url;
        $Content->twitter_url=$request->twitter_url; 

        //$Content->created_at=1;
        $Content->created_by=1;
        //$Content->updated_at=1;  
        $Content->save();
        
        
        $last_insert_id = $Content->id;
        $Content_file = new Content;
        $Content_file = Content::find($last_insert_id);

        if ($request->pic_path) {
            $common=new Common;
            $fileName =$request->content_type.'_'. $last_insert_id;
            $content_photo = $common->uploadImage('pic_path', 'images/content/'.$request->content_type, $fileName);
            $Content_file->pic_path = $common->get_site_url().'public/images/content/'.$request->content_type.'/'.$content_photo;
            $Content_file->save();
        }
 
        return redirect('/admin/content');
    }

    public function show($id) {
        $data['content'] = Content::find($id);
        return view('content.show')->with('data', $data);
    }

    public function edit($id) {
        $data = Content::find($id);
        return view('content.edit')->with('data', $data);
    }

    public function update(Request $request) {
        $id = $request->id;
        $data = Content::find($id);
        $data->title = $request->title;
        $data->description = $request->description;
        $data->content_type = $request->content_type;
        $data->author_id = 3;


        $data->save();
        $Content_file = new Content;
        $Content_file = Content::find($id);

        if ($request->pic_path) {
            $common=new Common;
            $fileName =$request->content_type.'_'. $id;
            $content_photo = $common->uploadImage('pic_path', 'images/content/'.$request->content_type, $fileName);
            $Content_file->pic_path = $common->get_site_url().'public/images/content/'.$request->content_type.'/'.$content_photo;
            $Content_file->save();
        }
        return redirect('/admin/content');
    }

    public function delete($id) {
        $admin = Content::find($id);
        $admin->delete();
        return redirect('/admin/content');
    }

}
