<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Slide;
use DateTime;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function ListSlide(){
        $slides = Slide::all();
        return view('admin.slide.list-slide',compact('slides'));
    }
    public function getAddSlide(){
        $post = Posts::all();
        return view('admin.slide.add-slide',compact('post'));
    }
    public function postAddSlide(Request $request){
        $this -> validate($request,[
            "slide_img" => "required"
        ]);
        $slides = new Slide;
        $slides -> slide_name = $request ->slide_name;
        $slides -> content_slide = $request ->content_slide;
        //$slides -> post_id = $request ->post_id;
        if($slides->save()){
            if ($request->hasFile('slide_img')) {
                $file = $request->slide_img;
               // $file_name=$file->getClientOriginalName();
               $file->move('upload/slides', $file->getClientOriginalName());
               $slides->slide_img="upload/slides/".$file->getClientOriginalName();
                $slides->save();
            }
        }
        return redirect(route('slide'));
    }
    public function getEditSlide($slide_id){
        $slides = Slide::findOrFail($slide_id);
        $post = Posts::all();
        return view('admin.slide.edit-slide',compact('post','slides'));
    }
    public function postEditSlide(Request $request,$slide_id){
        $post = Posts::all();
        $slides = Slide::find($slide_id);
        $slides -> slide_name = $request ->slide_name;
        $slides -> content_slide = $request ->content_slide;
        //$slides -> post_id = $request ->post_id;
        if($slides->save()){
            if ($request->hasFile('slide_img')) {
                $file = $request->slide_img;
               // $file_name=$file->getClientOriginalName();
               $file->move('upload/slides', $file->getClientOriginalName());
               $slides->slide_img="upload/slides/".$file->getClientOriginalName();
                $slides->save();
            }
        }
        return redirect(route('slide'));
    }
    public function DeleteSlide($slide_id){
        $slides = Slide::find($slide_id);
        $slides ->delete();
        return redirect(route('slide'));
    }
}
