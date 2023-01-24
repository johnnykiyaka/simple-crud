@extends('layouts.master')


@section('title')

@endsection


@section('content')
    
<div class="row">
    <div class="col-md-3">
      <div class="card card-body bg-primary text-black mb-3" >
        <label >Total therapist</label>
        <h3>4</h3>
        <a href="{{ url('therapist') }}"class="text-black"></a>
        
      </div>
    </div>
    
            
  </div>
  <div class="row">
    <div class="col-md-3">
      <div class="card card-body bg-primary text-black mb-3" >
        <label >Total Users</label>
        <h3>4</h3>
        <a href="{{ url('admin/register') }}"class="text-black"></a>
        
      </div>
    </div>
    
            
  </div>
  
@endsection


@section('scripts')
    
@endsection

