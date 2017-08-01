<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;
use App\Gallery_detail;

use App\Libraries\Common;
use Session;
use PDF;
use File;
use Storage;
use League\Flysystem\Filesystem;
use Excel;
use Illuminate\Support\Facades\Input;
use DB;
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
           $query = DB::table('galleries AS g')
                    ->leftjoin('gallery_details AS gd', 'g.id', '=', 'gd.gallery_id')
                    ->orderBy('g.id', 'ASC');
            $data['gallery']=$query->get();
        return view('user.galleryPage',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function addGallery(){
        return view('gallery.create');
    }
    public function storeGallery(Request $request){
        
        $gallery = new Gallery();
        
        $gallery->page_name = $request->page_name;
        $gallery->gallery_name = $request->gallery_name;
        $gallery->caption = $request->caption;
        $gallery->sub_caption = $request->sub_caption;
        
        
        

        $gallery->updated_by = 2;
        $gallery->save();
        return redirect('/admin/viewGallery');
    }
    
    public function viewGallery(Request $request){
         $data['gallery']= Gallery::all(); 
        return view('gallery.view')->with('data', $data);
    }
    
    public function addPhoto(){       
         $data['gallery']= Gallery::all(); 
        return view('gallery.addPhoto')->with('data', $data);
    }
    
    public function storePhoto(Request $request){
        $common = new Common; 
        $gallery_details = new Gallery_detail();

        $gallery_details->caption = $request->caption;
        $gallery_details->sub_caption = $request->sub_caption;
        $gallery_details->gallery_id = $request->gallery_id; 
        $gallery_details->save();       

        $last_insert_id = $gallery_details->id;
        $gallery_details = new Gallery_detail;
        $gallery_details = Gallery_detail::find($last_insert_id);                   
            if ($request->pic_path) {
            $common=new Common;
            $fileName = 'gallery_'. $last_insert_id;
            $content_photo = $common->uploadImage('pic_path', 'images/gallery/', $fileName);
            $gallery_details->pic_path = $common->get_site_url().'public/images/gallery/'.$content_photo;
           
        }

         
        $gallery_details->updated_by = 2;
        $gallery_details->save();
        return redirect('/admin/viewPhoto');
    }

    public function viewPhoto(){
        $data['gallery_category']= Gallery::all();
        $data['gallery']= Gallery_detail::all(); 
        
        $data['galleries'] = DB::table('galleries')
            ->join('gallery_details', 'gallery_details.gallery_id', '=', 'galleries.id')
            ->get();
        
        return view('gallery.viewPhoto')->with('data', $data);
    }
    
    public function editPhoto($id){
        $data['photo'] = Gallery_detail::where('id',$id)->first();
        return view('gallery.editPhoto')->with('data', $data);
    }
    
    public function updatePhoto(Request $request){
        $common =New  Common;
        $id = $request->id;
        $galleries = Gallery_detail::find($id);
        
        $galleries->caption = $request->caption;
        $galleries->sub_caption = $request->sub_caption;
        $galleries->updated_by = 2;


        $last_insert_id = $galleries->id;
        $gallery_details = new Gallery_detail;
        $gallery_details = Gallery_detail::find($last_insert_id);                   
            if ($request->pic_path) {
            $common=new Common;
            $fileName = 'gallery_'. $last_insert_id;
            $content_photo = $common->uploadImage('pic_path', 'images/gallery/', $fileName);
            $gallery_details->pic_path = $common->get_site_url().'public/images/gallery/'.$content_photo;
           
        }
         $gallery_details->save();
        return redirect('/admin/viewPhoto');
    }
    public function deletePhoto($id){
        $galleries = Gallery_detail::find($id);
        $galleries->delete();
        return redirect('/admin/viewPhoto');
    }
    
}
