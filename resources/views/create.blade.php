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
                        Create Post
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1" href="">Back</a>
                    </div>
                </div>



            </div>

            <div class="card-body">
                <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image" id="">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" id="">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Category</label>
                        <select name="category_id" class="form-control" id="">
                            <option value="">Select</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary mt-2">Create</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
