@extends("admin.admin_dashboard")
 
 @section("admin")
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
 <div   class="page-content">

    <div class="row profile-body">
      <!-- left wrapper start -->
      
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="card">
                <div class="card-body">
  
                                  <h6 class="card-title">Add Permission</h6>
  
                                  <form id="myForm"  method="POST" action="{{ route("store.permission") }}"  class="forms-sample" >
                                    @csrf
                                     
                                      <div class="mb-3 form-group">
                                          <label for="exampleInputEmail1" class="form-label">Permission Name</label>
                                          <input type="text" class="form-control"  name="name">
                                           
                                      </div>
                                      <div class="mb-3 form-group">
                                          <label for="exampleInputEmail1" class="form-label">Group name</label>
                                           <select name="group_name" class="form_select" id="exampleFormControlSelect1">
                                            <option selected="" disabled="" >Select Group</option>
                                            <option value="type">Property Type</option>
                                            <option value="ameneties">Ameneties</option>
                                            <option value="property">Property</option>
                                            <option value="history">Package History</option>
                                            <option value="message">Property Message</option>
                                            <option value="testimonials">Testimonials</option>
                                            <option value="agent">Manage Agent</option>
                                            <option value="category">Blog Category</option>
                                            <option value="post">Blog Post </option>
                                            <option value="comment">Blog Comment</option>
                                            <option value="smtp">SMTP Setting</option>
                                            <option value="site">Site Setting</option>
                                            <option value="role">Role and Permission</option>
                                           </select>
                                      </div>
                                     
                                    
                                      
                                     
                                     
                                    
                                      <button type="submit" class="btn btn-primary me-2">Save changes</button>
  
         
        </div>
      </div>
      <!-- middle wrapper end -->
      <!-- right wrapper start -->
     
      <!-- right wrapper end -->
    </div>

        </div>
        <script type="text/javascript">
            $(document).ready(function (){
                $('#myForm').validate({
                    rules: {
                        amenities_name: {
                            required : true,
                        }, 
                        
                    },
                    amenities_name :{
                        field_name: {
                            required : 'Please Enter ameneties name',
                        }, 
                         
        
                    },
                    errorElement : 'span', 
                    errorPlacement: function (error,element) {
                        error.addClass('invalid-feedback');
                        element.closest('.form-group').append(error);
                    },
                    highlight : function(element, errorClass, validClass){
                        $(element).addClass('is-invalid');
                    },
                    unhighlight : function(element, errorClass, validClass){
                        $(element).removeClass('is-invalid');
                    },
                });
            });
            
        </script>

 @endsection