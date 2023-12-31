@extends('layouts.master')

@section('content')

    <div class="main-container mt-5">
        <div class="card">
            <div class="card-header">
                 Trashed Posts
                <div class="col-md-6 ">
                    <a class="btn btn-success btn" href="{{route('posts.create')}}">Create</a>
                    <a class="btn btn-warning btn" href="{{route('posts.trashed')}}">Trashed</a>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col" style="width: 20%">Image</th>
                        <th scope="col" style="width: 10%">Title</th>
                        <th scope="col" style="width: 30%">Description</th>
                        <th scope="col" style="width: 10%">Category</th>
                        <th scope="col" style="width: 10%">Publish Date</th>
                        <th scope="col" style="width: 20%">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post )
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td><img src="{{asset($post->image)}}" alt="" width="80"></td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>{{$post->category->name}}</td>
                            <td>{{date('d-m-Y', strtotime($post->created_at))}}</td>
                            <td>
                                <div class="d-flex">
                                    <a class="btn btn-success btn" href="{{route('posts.restore', $post->id)}}">Restore</a>
                                    <form action="{{route('posts.force_delete', $post->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn">Delete</button>
                                </form>
                                </div>

                            </td>
                          </tr>

                        @endforeach


                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection
