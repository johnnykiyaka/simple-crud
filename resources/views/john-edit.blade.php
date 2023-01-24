@extends('layouts.master')


@section('title')
JOHN edit
@endsection


@section('content')

<div class="row">
    <div class="col">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit John </h4>

                <form  action="{{ url('john/'.$john->id) }}" method="POST">
       
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                  <div class="modal-body">
                    
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Title:</label>
                        <input type="text" name="title" class="form-control" value="{{ $john->title }}">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Sub-Title:</label>
                        <input type="text" name="subtitle" class="form-control" value="{{ $john->subtitle }}">
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="col-form-label">Description:</label>
                        <textarea name= "description"class="form-control" >{{ $john->description }}</textarea>
                      </div>
                 
                  </div>
                  <div class="modal-footer">
                    <a href = "{{ url('john') }}"class="btn btn-secondary" >Back</a href>
                    <button type="submit" class="btn btn-primary">UPDATE</button>
                  </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection