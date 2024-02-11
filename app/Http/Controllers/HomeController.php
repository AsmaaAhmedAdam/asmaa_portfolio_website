<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeModel;
use App\Models\AboutModel;
use App\Models\PortfolioModel;
use App\Models\ContactModel;
use Mail;
use App\Mail\ConactMail;
use App\Events\UserMessage;

class HomeController extends Controller
{
    public function index()
    {
        $data['getrecord'] = HomeModel::all();
        $data['meta_title'] ='Home';
        $data['className'] = 'home';
       return view('index' , $data);
    }


    public function about()
    {
        $data['getrecord'] = AboutModel::all();
        $data['meta_title'] ='About Me';
        $data['className'] = 'about';
      return view('about' , $data);

    }

    public function portfolio()
    {
        $data['getrecord'] = PortfolioModel::get();
        $data['meta_title'] ='My Portfolio';
        $data['className'] = 'portfolio';
        return view ('portfolio' , $data);
    }


    public function contact()
    {
        // echo "test";
        // die();
        $data['meta_title'] ='Contact Me';
        $data['className'] = 'contact';
        return view ('contact' , $data);
    }

    public function contact_post(Request $require)
    {

        $name = request()->name;
        event(new UserMessage($name));
        // dd($require->all());
        $insertRecord = new ContactModel;
        $insertRecord->name =trim($require->name);
        $insertRecord->email =trim($require->email);
        $insertRecord->subject =trim($require->subject);
        $insertRecord->message =trim($require->message);
        $insertRecord->save();

        Mail::to('asmaahome.work@gmail.com')->send(new ConactMail($require));


        return redirect()->back()->with('success' , 'Your Massage submitted successfull');



    }

    public function blog()
    {
        $data['meta_title'] ='My Blog';
        $data['className'] = 'blog';
        return view ('blog' , $data);
    }

    public function blog_Post()
    {
        $data['meta_title'] ='blog-post';
        $data['className'] = 'blog-post';
        return view ('blog-post' , $data);
    }


}
