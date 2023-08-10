<script>

    console.log($types)
</script>


@extends("admin.admin_dashboard")
 
 @section("admin")
 <div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route("add.type") }}" class="btn btn-inverse-info">Add Property Type</a>
           
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Property Type All</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Si</th>
            <th>Type Name</th>
            <th>Type Icon</th>
            <th>Action</th>
            <th>Start date</th>
            <th>Salary</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $types as $key => $item )
                
           
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->type_name }}</td>
            <td>{{ $item->type_icon }}</td>
            <td>
                    <a href="{{ route("edit.type", $item->id)}}" class="btn btn-inverse-warning">Edit</a>
                    <a href="{{ route("delete.type", $item->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
            </td>
           
          </tr>
          @endforeach   
          
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>

 @endsection