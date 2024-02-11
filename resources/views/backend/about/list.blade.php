@extends('backend.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">About Page</h1>

          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">About</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- /Mine content -->
    <section class="content">
        <div class="container-fluid">

            @include('message')



            <div class="row">

                <div class="col-md-12">
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">About Page</h3>
                        </div>

                        <form class="form-horizontal" method="POST"
                        action="{{url('admin/about/post')}}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    First Name
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->first_name}}" name="first_name" class="form-control" placeholder="First Name">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    Last Name
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->last_name}}" name="last_name" class="form-control" placeholder="Last Name">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    Age
                                </label>
                                <div class="col-sm-10">
                                    <input type="number" value="{{ @$getrecord[0]->age}}" name="age" class="form-control" placeholder="Age">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    Nationality
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->nationality}}" name="nationality" class="form-control" placeholder="Nationality">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    Freelance
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->freelance}}" name="freelance" class="form-control" placeholder="Freelance">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    Address
                                </label>
                                <div class="col-sm-10">
                                    <input type="text"  value="{{ @$getrecord[0]->address}}" name="address" class="form-control" placeholder="Address">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    Phone
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->Phone}}" name="Phone" class="form-control" placeholder="Phone">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    Email
                                </label>
                                <div class="col-sm-10">
                                    <input type="email" value="{{ @$getrecord[0]->email}}" name="email" class="form-control" placeholder="Email">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    Linked In
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->linkedin}}" name="linkedin" class="form-control" placeholder="Linked In">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    Langages
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->langages}}" name="langages" class="form-control" placeholder="Langages">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    YEARS OF EXPERIENCE
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->years_of_experience}}" name="years_of_experience" class="form-control" placeholder="YEARS OF EXPERIENCE">


                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    COMPLETED PROJECTS
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->completed_projects}}" name="completed_projects" class="form-control" placeholder="COMPLETED PROJECTS">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    HAPPY CUSTOMERS
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->happy_customers}}" name="happy_customers" class="form-control" placeholder="HAPPY CUSTOMERS">

                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    AWARDS WON
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->awards_won}}" name="awards_won" class="form-control" placeholder="AWARDS WON">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    HTML
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->html}}" name="html" class="form-control" placeholder="HTML">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    CSS
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->css}}" name="css" class="form-control" placeholder="CSS">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    BOOTSTRAB
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->bootstrab}}"  name="bootstrab" class="form-control" placeholder="BOOTSTRAB">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    AJAX
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->ajax}}" name="ajax" class="form-control" placeholder="AJAX">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    JAVASCRIPT
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->javascript}}" name="javascript" class="form-control" placeholder="JAVASCRIPT">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    JQUERY
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->jquery}}" name="jquery" class="form-control" placeholder="JQUERY">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    PHP
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->php}}" name="php" class="form-control" placeholder="PHP">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    SQL
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->my_sql}}" name="my_sql" class="form-control" placeholder="SQL">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    PLSQL
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->plsql}}" name="plsql" class="form-control" placeholder="PLSQL">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    LARAVEL FRAMEWORK
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->laravel_framework}}" name="laravel_framework" class="form-control" placeholder="LARAVEL FRAMEWORK">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    WORDPRESS
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->wordpress}}" name="wordpress" class="form-control" placeholder="WORDPRESS">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    JAVA
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->java}}" name="java" class="form-control" placeholder="JAVA">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                   Year Of Experience
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->year_of_experience}}" name="year_of_experience" class="form-control" placeholder="Year Of Experience">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                   Title
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->title}}" name="title" class="form-control" placeholder="Title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                  Sub Title
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->sub_title}}" name="sub_title" class="form-control" placeholder="Sub Title">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                  Description
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" value="{{ @$getrecord[0]->description}}" name="description" class="form-control" placeholder="Description">
                                </div>
                            </div>

                            {{-- <input type="text" name="id" value="{{ @$getrecord[0]->id}}"> --}}

                        </div>

                        <div class="card-footer">
                            <button type="submit" name="add_to_update" id="add_to_update"
                            value="@if(count($getrecord) > 0) Edit @else Add @endif"
                            class="btn btn-info">@if(count($getrecord) > 0) Edit @else Add @endif</button>



                             <a href="" class="btn btn-default float-right">Cancel</a>

                        </div>

                        </form>
                    </div>
                </div>





            </div>

        </div>
     </section>


  </div>
  <!-- /.content-wrapper -->

@endsection
