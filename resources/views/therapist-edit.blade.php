@extends('layouts.master')


@section('title')
Therapist edit
@endsection


@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Therapist </h4>

                <form  action="{{ url('therapist/'.$therapist->id) }}" method="POST">
       
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                  <div class="modal-body">
                    
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Name:</label>
                        <input type="text" name="name" class="form-control" value="{{ $therapist->name }}">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">email:</label>
                        <input type="text" name="email" class="form-control" value="{{ $therapist->email }}">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Password:</label>
                        <input type="text" name="password" class="form-control" value="{{ $therapist->password }}">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Specialization:</label>
                        <input type="text" name="specialization" class="form-control" value="{{ $therapist->specialization }}">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Location:</label>
                        <textarea name= "location"class="form-control" >{{ $therapist->location }}</textarea>
                      </div>
                 
                  </div>
                  <div class="modal-footer">
                    <a href = "{{ url('therapist') }}"class="btn btn-secondary" >Back</a href>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                  </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection