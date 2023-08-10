<script>

    console.log($types)
</script>


@extends("admin.admin_dashboard")
 
 @section("admin")
 <div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <a href="{{ route("add.amenetie") }}" class="btn btn-inverse-info">Add Ameneties</a>
           
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title"> All Ameneties</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Si</th>
            <th>Ameneties Name</th>
           
            <th>Action</th>
           
          </tr>
        </thead>
        <tbody>
            @foreach ( $types as $key => $item )
                
           
          <tr>
            <td>{{ $key+1 }}</td>
            <td>{{ $item->amenities_name }}</td>
            <td>{{ $item->type_icon }}</td>
            <td>
                    <a href="{{ route("edit.amenetie", $item->id)}}" class="btn btn-inverse-warning">Edit</a>
                    <a href="{{ route("delete.amenetie", $item->id)}}" class="btn btn-inverse-danger" id="delete">Delete</a>
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