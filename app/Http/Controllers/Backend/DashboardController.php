<?php

namespace App\Http\Controllers\Backend;

use Str;
use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\PortfolioModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
       return view('backend.dashboard.list');

    }

    public function admin_home(Request $request)
    {
        $data['getrecord'] = HomeModel::all();
        return view('backend.home.list' , $data);

    }

    public function admin_home_post(Request $request)
    {

       // dd($request->all());
       if($request->add_to_update == "Add")
       {
        $insertRecord = request()->validate(['profile' => 'required']);

        $insertRecord = new HomeModel;

       }

       else
       {
        $insertRecord = HomeModel::find($request->id);
       }


       $insertRecord->your_name = trim($request->your_name);
       $insertRecord->work_experience = trim($request->work_experience);
       $insertRecord->description = trim($request->description);

       if(!empty($request->file('profile')))
       {

          if(!empty($insertRecord->profile) && file_exists('public/img/' . $insertRecord->profile))
          {
            unlink('public/img/'. $insertRecord->profile);
          }


        $file              =$request->file('profile');
        $randomStr         =Str::random(30);
        $filename          =$randomStr . '.'  . $file->getClientOriginalExtension();
        $file->move('public/img/' , $filename);

        $insertRecord->profile = $filename;
       }
       $insertRecord->save();

        return redirect()->back()->with('success' , "Home Page
        Successfully save");

    }

    public function admin_about(Request $request)
    {
        $data['getrecord'] = AboutModel::all();
        return view('backend.about.list' , $data );

    }

    public function admin_about_post(Request $request)
    {
        //dd($request->all());

        if($request->add_to_update == "Add")
       {
        $insertRecord = request()->validate(['first_name' => 'required']);

        $insertRecord = new AboutModel;

       }

       else
       {
        $insertRecord = AboutModel::find($request->id);
       }



        $insertRecord->first_name = trim($request->first_name);
        $insertRecord->last_name = trim($request->last_name);
        $insertRecord->age = trim($request->age);
        $insertRecord->nationality = trim($request->nationality);
        $insertRecord->freelance = trim($request->freelance);
        $insertRecord->address = trim($request->address);
        $insertRecord->Phone = trim($request->Phone);
        $insertRecord->email = trim($request->email);
        $insertRecord->linkedin = trim($request->linkedin);
        $insertRecord->langages = trim($request->langages);
        $insertRecord->years_of_experience = trim($request->years_of_experience);
        $insertRecord->completed_projects = trim($request->completed_projects);
        $insertRecord->happy_customers = trim($request->happy_customers);
        $insertRecord->awards_won = trim($request->awards_won);
        $insertRecord->html = trim($request->html);
        $insertRecord->css = trim($request->css);
        $insertRecord->bootstrab = trim($request->bootstrab);
        $insertRecord->ajax = trim($request->ajax);
        $insertRecord->javascript = trim($request->javascript);
        $insertRecord->jquery = trim($request->jquery);
        $insertRecord->php = trim($request->php);
        $insertRecord->my_sql = trim($request->my_sql);
        $insertRecord->plsql = trim($request->plsql);
        $insertRecord->laravel_framework = trim($request->laravel_framework);
        $insertRecord->wordpress = trim($request->wordpress);
        $insertRecord->java = trim($request->java);
        $insertRecord->year_of_experience = trim($request->year_of_experience);
        $insertRecord->title = trim($request->title);
        $insertRecord->sub_title = trim($request->sub_title);
        $insertRecord->description = trim($request->description);




        return redirect()->back()->with('success' , "About Page
        Successfully save");


    }


    public function admin_portfolio(Request $request)
    {
        $data['getrecorder'] = PortfolioModel::get();
        return view('backend.portfolio.list' , $data );
    }

    public function admin_contact(Request $request)
    {
        return view('backend.contact.list');
    }

    public function admin_blog(Request $request)
    {
        return view('backend.blog.list');
    }


}
