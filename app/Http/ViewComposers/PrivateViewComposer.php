<?php
namespace App\Http\ViewComposers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Repositories\UserRepository;


use App\Models\JobApplication;
use App\Models\ContactUs;
use Carbon\Carbon;
use App\Models\Speaker;
use App\Models\Sponsor;
use App\Models\Picture;
use App\Models\User;
use App\Models\Job;


Class PrivateViewComposer {
	

    public function compose(View $view)
    {
        
    	//get current date
        $today = Carbon::today();
     
        //get sponsors
        $sponsors = Sponsor::get();

        //get speakers
        $speakers = Speaker::get();

        //$jobs = Job::get();

       //$job_applications = JobApplication::get();

        $contactus = ContactUs::get();

        $users = User::get();

        $pictures = Picture::get();

        //put variables in views
        $view->with('today', $today)
             ->with('sponsors', $sponsors)
             ->with('speakers', $speakers)
             ->with('contactus', $contactus)
             ->with('users', $users)
             ->with('pictures', $pictures);

    }
}