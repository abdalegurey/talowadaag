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
                    <th scope="col">post_id</th>
                    <th scope="col">username</th>
                    <th scope="col">Image</th>
                    <th scope="col">comment</th>
                    <th scope="col">Created_at</th>
                    <th scope="col">delete</th>
                  
                  </tr>
                </thead>
                <tbody>
                    @foreach ($Comments as $comment )
                    <tr>
                    <th scope="row">{{ $comment ->id }}</th>
                    <th scope="row">{{ $comment ->post_id }}</th>
                    <th scope="row">{{ $comment ->user_name }}</th>
                    <td><img src="{{asset("assets/img/$comment->image")}}" width="70" height="70" alt=""></td>
                    <th scope="row">{{ $comment ->comment }}</th>
                    <th scope="row">{{ $comment ->created_at }}</th>
                    <td><a href="{{route("comment.delete", $comment->id)}}" class="btn btn-danger  text-center ">delete</a></td>
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