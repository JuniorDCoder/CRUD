@extends('layouts.master')

@section('content')
    <div class="main-container mt-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        All Posts
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1" href="{{route('posts.create')}}">Create</a>
                        <a class="btn btn-warning mx-1" href="">Trashed</a>
                    </div>
                </div>



            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered border-dark">
                    <thead style="background: #f2f2f2">
                      <tr>
                        <th scope="col">#</th>
                        <td scope="col" style="width: 10%">Image</td>
                        <td scope="col" style="width: 20%">Title</td>
                        <td scope="col" style="width: 30%">Description</td>
                        <td scope="col" style="width: 10%">Category</td>
                        <td scope="col" style="width: 10%">Published Date</td>
                        <th scope="col" style="width: 20%">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                        @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <th>
                                <img src="{{asset($post->image)}}" alt="" width="80">
                            </th>
                            <th>{{$post->title}}</th>
                            <th>{{$post->description}}</th>
                            <th>{{$post->category->name}}</th>
                            <th>{{date('d-m-Y', strtotime($post->created_at))}}</th>

                            <td>
                                <a style="text-decoration: none" class="btn-sm btn-success" href="{{route('posts.show', $post->id)}}">Show</a>
                                <a style="text-decoration: none" class="btn-sm btn-primary" href="{{route('posts.edit', $post->id)}}">Edit</a>
                                {{-- <a style="text-decoration: none" class="btn-sm btn-danger" href="">Delete</a> --}}
                                <form action="{{route('posts.destroy', $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-sm btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
