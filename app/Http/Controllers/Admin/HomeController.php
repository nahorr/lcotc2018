<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Models\ContactUs;
use App\Models\Sponsor;
use App\Models\Speaker;
use App\Models\Picture;
use App\Models\User;
use App\Models\Job;
use File;

class HomeController extends Controller
{
    public function index()
    {
    	return view('admin.home');
    }

    public function sponsors()
    {
    	
    	return view('admin.sponsors');
    }

    public function speakers()
    {
    	
    	return view('admin.speakers');
    }

    public function addSpeaker()
    {

        return view('admin.speakers.addspeaker');
    }

    public function postAddSpeaker(Request $request)
    {
        $this->validate(request(), [
            'fullname' => 'required',
            'email' => 'email',
            'content_1' => 'max: 150',
            'content_2' => 'max: 150',
            'content_3' => 'max: 150',
            'paper' => 'max: 150',
            'picture' => 'required|mimes:jpg,jpeg,bmp,png|max:10000',
        ]);

        if($request->hasFile('picture')){
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            $destinationPath = public_path().'/eventspeakers/images/' ;
            $picture->move($destinationPath,$filename);
            
        } else {
            $filename = $request->picture;
        }
        
        Speaker::insert([
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'content_1'=>$request->content_1,
            'content_2'=>$request->content_2,
            'content_3'=>$request->content_3,
            'paper'=>$request->paper,
            'picture'=>$filename,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        
        flash('Tip Added Successfully')->success();

        return redirect()->route('speakers');
    }

    public function editSpeaker($speaker_id)
    {
        $speaker = Speaker::find($speaker_id);

        return view('admin.speakers.editspeaker', compact('speaker'));
    }

    public function postEditSpeaker(Request $request, $speaker_id)
    {
        $speaker = Speaker::find($speaker_id);

        $this->validate(request(), [
            'fullname' => 'required',
            'email' => 'email',
            'content_1' => 'max: 150',
            'content_2' => 'max: 150',
            'content_3' => 'max: 150',
            'paper' => 'max: 150',
            'picture' => 'required|mimes:jpg,jpeg,bmp,png|max:10000',
            
        ]);
        
        
        if($request->hasFile('picture')){
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
                // Delete current image before uploading new image
                if($speaker->picture !== null) {
                     $file = public_path('eventspeakers/images/' . $speaker->picture);
                    if (File::exists($file)) {
                        unlink($file);
                    }
                }
            $destinationPath = public_path().'/event_speakers/images/' ;
            $picture->move($destinationPath,$filename);
            
        } else {
            $filename = $request->picture;
        }
        $speaker_edit = Speaker::where('id', '=', $speaker->id)->first();
        
        $speaker_edit->fullname= $request->fullname;
        $speaker_edit->email= $request->email;
        $speaker_edit->content_1= $request->content_1;
        $speaker_edit->content_2= $request->content_2;
        $speaker_edit->content_3= $request->content_3;
        $speaker_edit->paper= $request->paper;
        $speaker_edit->picture= $filename;
        
        $speaker_edit->save();
        
        flash('Speaker Updated Successfully')->success();

        return redirect()->route('speakers');
    }

    public function deleteSpeaker($speaker_id)
    {
        Speaker::destroy($speaker_id);
        flash('Record has been deleted')->error();
        return back();
    }

    public function contactformsubmissions()
    {
    	
    	return view('admin.contactformsubmissions');
    }

    //is_admin show list of pictures page
   public function pictures()
    {
        
        return view('admin.pictures');
    }

    public function addPicture()
    {

        return view('admin.pictures.addpicture');
    } 
   
   public function postAddPicture(Request $request)
    {
        $this->validate(request(), [

            'picture' => 'required|mimes:jpg,jpeg,bmp,png|max:10000',
        ]);

        if($request->hasFile('picture')){
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
            $destinationPath = public_path().'/eventpictures/images/' ;
            $picture->move($destinationPath,$filename);
            
        } else {
            $filename = $request->picture;
        }
        
        Picture::insert([
            'picture'=>$filename,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        
        flash('Picture Added Successfully')->success();

        return redirect()->route('pictures');
    }

    public function editPicture($picture_id)
    {
        $picture = Picture::find($picture_id);

        return view('admin.pictures.editpicture', compact('picture'));
    }

    public function postEditPicture(Request $request, $picture_id)
    {
        $edit_picture = Picture::find($picture_id);

        $this->validate(request(), [
            
            'picture' => 'required|mimes:jpg,jpeg,bmp,png|max:10000',
            
        ]);
        
        
        if($request->hasFile('picture')){
            $picture = $request->file('picture');
            $filename = time() . '.' . $picture->getClientOriginalExtension();
                // Delete current image before uploading new image
                if($edit_picture->picture !== null) {
                     $file = public_path('eventpictures/images/' . $edit_picture->picture);
                    if (File::exists($file)) {
                        unlink($file);
                    }
                }
            $destinationPath = public_path().'/eventpictures/images/' ;
            $picture->move($destinationPath,$filename);
            
        } else {
            $filename = $request->picture;
        }
        $picture_edit = Picture::where('id', '=', $edit_picture->id)->first();
        
        $picture_edit->picture= $filename;
        
        $picture_edit->save();
        
        flash('Picture Edited Successfully')->success();

        return redirect()->route('pictures');
    }

    public function deletePicture($picture_id)
    {
        Picture::destroy($picture_id);
        flash('Record has been deleted')->error();
        return back();
    }
}
