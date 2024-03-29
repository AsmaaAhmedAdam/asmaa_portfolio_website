@extends('backend.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Portfolio Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Edit Portfolio</a></li>
              <li class="breadcrumb-item active">Edit Portfolio</li>
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
                            <h3 class="card-title">Portfolio Page</h3>
                        </div>

                        <form class="form-horizontal" method="POST"
                        action="{{url('admin/portfolio/edit/' .$getrecorder->id)}}"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    Portfolio Title <span style="color: red;">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="text" name="title" class="form-control"
                                     placeholder="Portfolio Title" required  value="{{$getrecorder->title}}">

                                </div>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-2 col-form-lable">
                                    Portfolio Image <span style="color: red;">*</span>
                                </label>
                                <div class="col-sm-10">
                                    <input type="file" name="image" class="form-control" >


                                    @if (!empty($getrecorder->image))
                                    <img src="{{ url('public/portfolio/' .$getrecorder->image) }}" style="height:80px; width:80px;">
                                  @endif


                                </div>
                            </div>






                        </div>

                        <div class="card-footer">


                            <button type="submit" class="btn btn-primary"> Edit </button>



                                <a href="{{url('admin/portfolio/')}}" class="btn btn-default float-right">Cancel</a>

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

