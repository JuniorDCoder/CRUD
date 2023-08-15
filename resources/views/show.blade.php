@extends('layouts.master')

@section('content')
    <div class="main-container mt-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                       Show Post
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1" href="">Back</a>

                    </div>
                </div>



            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <tbody>
                        <tr>
                            <td>Id</td>
                            <td>{{$post->id}}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td><img width="300px" src="{{asset($post->image)}}" alt=""></td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>{{$post->id}}</td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{$post->description}}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{$post->category->name}}</td>
                        </tr>
                        <tr>
                            <td>Published Date</td>
                            <td>{{date('d-m-Y',strtotime($post->created_at))}}</td>
                        </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
