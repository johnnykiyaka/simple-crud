@extends('layouts.master')


@section('title')
Therapist
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD Therapist</h5>
        

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="/therapist" method="POST">
       
        {{ csrf_field() }}
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" name="name" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" name="email" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input type="text" name="password" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Specialization:</label>
            <input type="text" name="specialization" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Location:</label>
            <textarea name= "location"class="form-control" id="message-text"></textarea>
          </div>
     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </form>
    </div>
  </div>
</div>
    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">  THERAPIST
            <button type="button" class="btn btn-primary float-right"  data-toggle="modal" data-target="#exampleModal">THERAPIST</button>
          </h4>
          

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id=" datatble" class="table">
              <thead class=" text-primary">
                <th>
                  id
                </th>
                <th>
                  Name
                </th>
                <th>
                  Email
                </th>
                <th>
                  Password
                </th>
                <th>
                    Specialization
                  </th>
                  <th>
                    Location
                  </th>
                <th>
                  EDIT
                </th>
                <th>
                  DELETE
                </th>
                
              </thead>
              <tbody>
                @foreach ($therapist as $data)
                    
              
                <tr>
                  
                 
                  <td>
                    {{ $data->id }}
                  </td>
                  <td>
                    {{ $data->name}}
                  </td>
                  <td>
                    {{ $data->email }}
                  </td>
                  <td>
                    {{ $data->password }}
                  </td>
                  <td>
                    {{ $data->specialization }}
                  </td>
                  <td>
                    {{ $data->location }}
                  </td>
                  <td>
                  <a href="{{ url('therapist/'.$data->id) }}" class="btn btn-success">EDIT</a>
                  </td>
                     <td>
                  <form action="{{ url('therapist/'.$data->id) }}" method="POST">

                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit"class="btn btn-danger">DELETE</button>
                
                  </form>
                </td>

                    
                
                  @endforeach
                </tr>
                
                  
                </form>
                  
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
            
  </div>
  
@endsection


@section('scripts')
    <script>
      $(document).ready( function () {
    $('#datatble').DataTable();
} );
    </script>
@endsection

