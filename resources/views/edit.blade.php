@extends('layouts.master')

@section('content')
    <div class="main-container mt-4">
        @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                @endforeach
        @endif
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        Edit Post
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1" href="">Back</a>
                    </div>
                </div>



            </div>
            <div class="card-body">
                <form action="{{route('posts.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <div>
                            <img style="width: 200px" src="{{asset($post->image)}}" alt="">
                        </div>
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="{{$post->title}}">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Category</label>
                        <select name="category_id" class="form-control" id="">
                            <option value="">Select</option>
                            @foreach ($categories as $category)
                                <option {{$category->id == $post->category_id ? 'selected' : ''}} value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$post->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-2">Update</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
