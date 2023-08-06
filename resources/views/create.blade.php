@extends('layouts.master')

@section('content')

    <div class="main-container mt-5">
        @if ($errors->any())
                @foreach ($errors->all() as $error )
                    <div class= "alert alert-danger">{{$error}}</div>
                @endforeach

            @endif
        <div class="card">
            <div class="card-header">
                Create Post
                <div class="col-md-6 ">
                    <a class="btn btn-success btn" href="">Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Catgeories</label>
                        <select name="category_id" id="" class="form-control">
                            <option value="">Select</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <textarea id="" cols="30" rows="10" class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
