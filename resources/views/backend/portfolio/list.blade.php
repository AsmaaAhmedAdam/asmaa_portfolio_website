@extends('backend.layouts.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Portfolio Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Portfolio </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <section class="content">
        <div class="container-fluid">

            @include('message')

            <a href="{{url('admin/portfolio/add')}}" class="btn btn-primary">Add Portfolio</a>

            <div class="row">
                <section class="col-lg-12">
                    <div class="card">
                    <div class="card-header">
                        <table class="table table-bordered table-hover">
                            {{-- thead for header table --}}
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>

                            </thead>

                              {{-- tbody for body insid  table --}}
                              <tbody>
                                @foreach ( $getrecorder as $value )
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->title}}</td>
                                    <td>
                                        @if (!empty($value->image))
                                          <img src="{{ url('public/portfolio/' .$value->image) }}" style="height:80px; width:80px;">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('admin/portfolio/edit/' .$value->id)}}" class="btn btn-primary">Edit</a>
                                        <a  onclick="return confirm('Are you sure you want to delete ?')" href="{{url('admin/portfolio/delete/' .$value->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                              </tbody>

                        </table>
                    </div>
                    </div>
                </section>


            </div>
        </div>
    </section>



  </div>
  <!-- /.content-wrapper -->

@endsection
