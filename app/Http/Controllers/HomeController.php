<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Language;
use App\Models\Project;
use App\Models\Reference;
use App\Models\Setting;
use App\Models\Skill;
use App\Models\SocialMedia;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $profile = User::where('id',1)->first();
        $skills = Skill::all();
        $languages=Language::all();
        $references=Reference::all();

        $experiences=Experience::all();
        $educations=Education::all();
        $certificates=Certificate::all();
        $projects=Project::all();

        $settings = Setting::where('id',1)->first();
        $socialmedias = SocialMedia::all();
        return view('homepage.index',compact('profile','skills','languages','references','experiences','educations','certificates','projects','settings','socialmedias'));
    }
}
