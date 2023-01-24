@extends('layouts.master')


@section('title')

@endsection


@section('content')



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New User </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>


      <form action="/save-user" method="POST">
        {{ csrf_field() }}

      <div class="modal-body">   
         
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-password" class="col-form-label">password:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>


    
<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> Role registered

            <button type="button" class="btn btn-primary float-right"  data-toggle="modal" data-target="#exampleModal">AddUser</button>


          </h4>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  ID
                </th>
                <th>
                  Name
                </th>
                <th >
                  email
                </th>
                <th>
                  EDIT
                </th>
                <th >
                DELETE
                </th>
              </thead>
              <tbody>
               

                @foreach ( $users as $row )
                  
              
                <tr>
                  <td>
                    {{ $row->id }}
                  </td>
                  <td>
                    {{ $row->name }}
                  </td>
                  <td>
                    {{ $row->email }}
                  </td>
                  <td>

                  <a href="/role-edit{{ $row->id  }}" class="btn btn-success">EDIT</a>
                  </td>

                  <td>

                    <form action="/role-delete/{{ $row->id  }}" method="post">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}

                    
                    <button type ="submit" class="btn btn-danger">DELETE</button>
                  </form>
                    </td>
                    @endforeach
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
    
@endsection

