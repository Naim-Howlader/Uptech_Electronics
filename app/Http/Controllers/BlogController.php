<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\NewsLetter;
use Illuminate\Support\Facades\File;
use App\Jobs\NewsletterJob;

class BlogController extends Controller
{
    public function add(){
        $categories = BlogCategory::get();
        $data = compact('categories');
        return view('admin.blogs.add-blog')->with($data);
    }
    public function insert(Request $request){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required',
        ]);

        $image = $request->file('image')->getClientOriginalName();
        $destination = 'uploads/images/';
        $request->image->move(public_path($destination),$image);

        $blog = new Blog();
        $blog->name = $request['name'];
        $blog->description = nl2br($request['description']);
        $blog->category_id = $request['category'];
        $blog->image = $destination.$image;
        if($request->status == 'on'){
            $blog->status = 'active';
        }
        $blog->save();
        //When a blog will publish a email will sent to the user using the code bellow
        $users = NewsLetter::get();
        foreach($users as $user){
            $data['email'] = $user->email;
            dispatch(new NewsletterJob($data));
        }

        session()->flash('success', 'Blog added successfully');
        return redirect()->route('admin.blogs');
    }
    public function edit($id){
        $blog = Blog::find($id);
        if(empty($blog)){
            return redirect()->route('admin.blogs');
        }
        $categories = BlogCategory::get();
        $url = route('blog.update', ['id' => $id]);
        $data  = compact('categories', 'url', 'blog');
        return view('admin.blogs.update-blog')->with($data);
    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);
        $blog = Blog::find($id);
        $blog->name = $request['name'];
        $blog->description = nl2br($request['description']);
        $blog->category_id = $request['category'];
        if($request->hasFile('image')){
            $destination = 'uploads/images/'.$blog->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $image = $request->file('image')->getClientOriginalName();
            $destination = 'uploads/images/';
            $request->image->move(public_path($destination), $image);
            $blog->image  = $destination.$image;
        }
        if($request->status == 'on'){
            $blog->status = 'active';
        }else{
            $blog->status = 'inactive';
        }
        $blog->update();
        session()->flash('success', 'Blog updated successfully');
        return redirect()->route('admin.blogs');
    }
    public function delete($id){
        $blog = Blog::find($id);
        if(empty($blog)){
            return redirect()->route('admin.blogs');
        }
        $blog->delete();
        session()->flash('success', 'Blog deleted successfully');
        return redirect()->route('admin.blogs');
    }
}
