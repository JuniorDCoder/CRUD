@extends('layouts.master')

@section('content')
    <div class="main-container mt-4">
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
                <form action="" method="post" enctype="multipart/form-data">
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
                        <select name="category" class="form-control" id="">
                            <option value="tech">Tech</option>
                            <option value="science">Science</option>
                            <option value="arts">Arts</option>
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
