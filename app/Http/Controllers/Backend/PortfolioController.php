<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PortfolioModel;
use Str;

class PortfolioController extends Controller
{
    public function portfolio_add(Request $request)
    {
        //echo "string"; die();
        return view('backend.portfolio.add');


    }

    public function portfolio_add_post(Request $request)
    {
       $insertRecord = new PortfolioModel;

       $insertRecord->title = trim($request->title);

        if(!empty($request->file('image')))
       {

        $file              =$request->file('image');
        $randomStr         =Str::random(30);
        $filename          =$randomStr . '.'  . $file->getClientOriginalExtension();
        $file->move('public/portfolio/' , $filename);

        $insertRecord->image = $filename;
       }
       $insertRecord->save();

        return redirect('admin/portfolio')->with('success' , "Portfolio Page
        Successfully save");

    }


    public function admin_portfolio_edit($id , Request $request)
    {
       //echo $id; die();
       $data['getrecorder'] = PortfolioModel::find($id);
       return view('backend.portfolio.edit' , $data);
    }


    public function admin_portfolio_edit_post($id ,Request $request)
    {
        //dd($request->all());

        $updateRecord = PortfolioModel::find($id);

        $updateRecord->title =trim($request->title);

        if(!empty($request->file('image')))
        {

            // To remove old image if we need to update the image
            if(!empty($updateRecord->image) && file_exists('public/portfolio/' . $updateRecord->image))

            {
                unlink('public/portfolio/' . $updateRecord->image);
            }


            $file = $request->file('image');
            $randomStr = Str::random(30);
            $filename =  $randomStr . '.' .$file->getClientOriginalExtension();
            $file->move('public/portfolio/' , $filename);

            $updateRecord->image = $filename;

        }



        $updateRecord->save();

        return redirect('admin/portfolio')->with('success' , "Portfolio Page
        Successfully update");



    }

    public function admin_portfolio_delete($id ,Request $request)
    {
        $deleteRecord = PortfolioModel::find($id);


        // To remove old image if we need to update the image
        if(!empty($deleteRecord->image) && file_exists('public/portfolio/' . $deleteRecord->image))

        {
            unlink('public/portfolio/' . $deleteRecord->image);
        }


        $deleteRecord->delete();

        return redirect()->back()->with('error' , "Record Successfully Deleted");

    }


    }


