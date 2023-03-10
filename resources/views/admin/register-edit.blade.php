@extends('layouts.master')


@section('title')
Register-Edit Users
@endsection


@section('content')
    

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Users Registered</h3>
                </div>
                <div class="card-body">
                   <div class="row">
                    <div class="col-md-6">
                        <form action="/role-register-update/{{ $users->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <div class="form-group">
                                <label >Name</label>
                                <input type="text" name="name" value="{{ $users->name }}" class="form-control" placeholder="name">
                              </div>
    
                              <div class="form-group">
                                <label >Email</label>
                                <input type="text" name="email" value="{{ $users->email }}" class="form-control" placeholder="email">
                              </div>
                              <button type="submit"class="btn btn-success">Update</button>
                              <a href="/role-register"class="btn btn-danger">Cancel</a>
                        </form>
                    </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection


@section('scripts')
    
@endsection
