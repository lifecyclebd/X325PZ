<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Blog_Category;
use Illuminate\Http\Request;
use App\Libraries\Common;

class BlogController extends Controller {

    public function blog_category() {
        $data = Blog_Category::all();
        return view('blog.view_category')->with('data', $data);
    }

    public function create_category() {
        return view('blog.create_category');
    }

    public function save_category(Request $request) {
        $data = new Blog_Category();
        $data->category_name = $request->category_name;
        $data->save();
        return redirect('/blog/category');
    }

    public function view_blog() {
        $data = Blog::all();
        return view('blog.view_blog')->with('data', $data);
    }

    public function view() {
        $data['blog_list'] = Blog::all();
        return view('user.blogs.list')->with('data', $data);
    }

    public function create_blog() {
        $data['category_list']= Blog_Category::all();
        return view('blog.create_blog')->with('data', $data);
    }
    public function save_blog(Request $request) {
        $data = new Blog_Category();
        $data->category_name = $request->category_name;
        $data->save();
        return redirect('/blog/category');
    }
    public function edit_blog_category($id){
        $data['blog_category'] = Blog_Category::find($id);
        return view('blog.edit_category')->with('data', $data);
    }
    public function update_blog_category(Request $request){
        $id = $request->id;
        $category = Blog_Category::find($id); 
        $category->category_name = $request->category_name;
        $category->save();
        return redirect('/blog/category');
    }
    public function edit_blog($id){
        $data['category_list'] = Blog_Category::all();
        $data['blog'] = Blog::find($id);
        return view('blog.edit_blog')->with('data', $data);
    }
    public function update_blog(Request $request){
        $common =New  Common;
        $id = $request->id;
        $blog = Blog::find($id); 
        $blog->blog_category_id = $request->blog_category_id;
        $blog->title = $request->title;
        $blog->description = $request->description;
 
        $profile_photo = $common->uploadImage('photo', 'images/gallery');
        $blog->photo = $profile_photo;

        $blog->save();
        return redirect('/blog/content');
    }
    public function delete_blog($id){
        $blog = Blog::find($id);
        $blog->delete();        
        return redirect('/blog/content');
    }

}
