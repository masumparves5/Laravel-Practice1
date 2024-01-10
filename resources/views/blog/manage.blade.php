@extends('master')
@section('title')
    Manage Blog
@endsection


@section('body')
    <section class="py-5 bg-info-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">Manage Blog Page</div>
                        <div class="card-body">
                            <table class="table table-hover table-bordered table-striped">
                                <tr>
                                    <th>Sl</th>
                                    <th>title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($blogs as $blog)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$blog->name}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>{{$blog->image}}</td>
                                    <td>
                                        <a href="" class="btn btn-outline-success">Edit</a>
                                        <a href="" class="btn btn-outline-danger">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
