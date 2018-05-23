<?php
namespace App\Http\ViewComposers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Repositories\UserRepository;


use App\JobApplication;
use App\ContactUs;
use Carbon\Carbon;
use App\Speaker;
use App\Sponsor;
use App\Picture;
use App\User;
use App\Job;


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