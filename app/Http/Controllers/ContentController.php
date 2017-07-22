<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use App\BloodRequest;
use App\Libraries\Common;
use DB;
class ContentController extends Controller {

    public function __construct() {
        //    $this->middleware('auth');
    }

    public function index() {
        $data['content'] = Content::all();
        return view('content.view')->with('data', $data);
    }

    public function create() {

        return view('content.create');
    }

    public function store(Request $request) {
        $Content = new Content;
        //$formdata = $request->all();
        $Content->title = $request->title;
        $Content->description = $request->description;
        $Content->content_photo = $request->content_photo;
        $Content->content_type = $request->content_type;
        $Content->content_page = $request->content_page;
        $Content->author_id = 3;
        $Content->save();
        
        
        $last_insert_id = $Content->id;
        $Content_file = new Content;
        $Content_file = Content::find($last_insert_id);

        if ($request->content_photo) {
            $common=new Common;
            $fileName =$request->content_type.'_'. $last_insert_id;
            $content_photo = $common->uploadImage('content_photo', 'images/content/'.$request->content_type, $fileName);
            $Content_file->content_photo = $content_photo;
            $Content_file->save();
        }
 
        return redirect('/content');
    }

    public function show($id) {
        $data = Content::find($id);
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
        $data->content_page = $request->content_page;
        $data->author_id = 3;
        $data->save();
        return redirect('/content/' . $id);
    }

    public function destroy($id) {
        $admin = Content::find($id);
        $admin->delete();
        return redirect('/content');
    }

}
