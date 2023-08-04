@extends('layouts.master')

@section('content')

    <div class="main-container mt-5">
        <div class="card">
            <div class="card-header">
                All Posts

                <a class="btn bg-success" href="">Create</a>
                <a class="btn bg-warning" href="">Trashed</a>
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
                      <tr>
                        <th scope="row">1</th>
                        <td><img src="https://picsum.photos/200" alt="" width="80"></td>
                        <td>Lorem ipsum dolor sit</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Corporis nobis magni voluptatibus suscipit soluta ad est ipsum.
                           Reprehenderit explicabo sint libero magnam. Consectetur cumque vitae ab quos odit, non maxime?</td>
                        <td>Nwes</td>
                        <td>04-08-23</td>
                        <td>
                            <a class="btn bg-primary" href="">Edit</a>
                            <a class="btn bg-danger" href="">Delete</a>
                        </td>
                      </tr>

                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection
