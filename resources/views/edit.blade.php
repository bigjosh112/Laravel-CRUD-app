@extends('layouts.master')

@section('content')

    <div class="main-container mt-5">
        <div class="card">
            <div class="card-header">
                Edit Post
                <div class="col-md-6 ">
                    <a class="btn btn-success btn" href="">Back</a>
                </div>
            </div>

            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="" class="form-label">Image</label>
                        <input type="file" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Title</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Catgeories</label>
                        <select name="" id="" class="form-control">
                            <option value="">News</option>
                            <option value="">Entertainment</option>
                            <option value="">Lifestyle</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Description</label>
                        <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
