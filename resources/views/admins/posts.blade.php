@extends('layouts.admin')

@section('content')

<div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Admins</h5>
             <a  href="create-admins.html" class="btn btn-primary mb-4 text-center float-right">Create Admins</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Posts</th>
                    <th scope="col">Image</th>
                    <th scope="col">username</th>
                    <th scope="col">Created At</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post )
                    <tr>
                    <th scope="row">{{ $limit_text($post->post, 250) }}</th>
                    <td><img src="{{asset("assets/img/$post->image")}}" width="70" height="70" alt=""></td>
                    <td>{{ $post->image }}</td>
                    <td>{{ $post->username }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td><a href="{{route("posts.delete", $post->id)}}" class="btn btn-danger  text-center ">delete</a></td>
                    </tr>
                  </tr>
                        
                    @endforeach
                 
                 
                </tbody>
              </table> 
            </div>
          </div>
        </div>
      </div>



@endsection