@extends('layouts.master')


@section('title')
JOHN
@endsection


@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADD JOHN</h5>
        

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form  action="/john" method="POST">
       
        {{ csrf_field() }}
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Title:</label>
            <input type="text" name="title" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sub-Title:</label>
            <input type="text" name="subtitle" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea name= "description"class="form-control" id="message-text"></textarea>
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
          <h4 class="card-title">  JOHN
            <button type="button" class="btn btn-primary float-right"  data-toggle="modal" data-target="#exampleModal">JOHN</button>
          </h4>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif

        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id=" datatble" class="table">
              <thead class=" text-primary">
                <th>
                  id
                </th>
                <th>
                  Title
                </th>
                <th>
                  Subtitle
                </th>
                <th>
                  Description
                </th>
                <th>
                  EDIT
                </th>
                <th>
                  DELETE
                </th>
                
              </thead>
              <tbody>
                @foreach ($john as $data)
                    
              
                <tr>
                  
                 
                  <td>
                    {{ $data->id }}
                  </td>
                  <td>
                    {{ $data->title}}
                  </td>
                  <td>
                    {{ $data->subtitle }}
                  </td>
                  <td>
                    {{ $data->description }}
                  </td>
                  <td>
                  <a href="{{ url('john/'.$data->id) }}" class="btn btn-success">EDIT</a>
                  </td>
                     <td>
                  <form action="{{ url('john/'.$data->id) }}" method="POST">

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

