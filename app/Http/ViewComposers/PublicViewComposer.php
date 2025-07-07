<?php
namespace App\Http\ViewComposers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Input;

use Carbon\Carbon;
use App\Models\Picture;
use App\Models\Job;


Class PublicViewComposer {
	

    public function compose(View $view)
    {
        
    	//get current date
        $today = Carbon::today();
        
        //count jobs less than or equal to a weeks old          
        $new_jobs = Job::count();

        //count jobs less than or equal to a weeks old          
        $event_pictures = Picture::get();

        //put variables in views
        $view->with('today', $today)->with('new_jobs', $new_jobs)->with('event_pictures', $event_pictures);
        
    }
}