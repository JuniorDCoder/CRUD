@extends('layouts.master')

@section('content')
    <div class="main-container mt-4">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        Trashed Posts
                    </div>
                    <div class="col-md-6 d-flex justify-content-end">
                        <a class="btn btn-success mx-1" href="">Back</a>
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
                      <tr>
                        <th scope="row">1</th>
                        <th>
                            <img src="https://picsum.photos/200" alt="" width="80">
                        </th>
                        <th>Lorem Ipsum</th>
                        <th>Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum</th>
                        <th>News</th>
                        <th>2-5-23</th>

                        <td>
                            <a style="text-decoration: none" class="btn-sm btn-primary" href="">Edit</a>
                            <a style="text-decoration: none" class="btn-sm btn-danger" href="">Delete</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection
