<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Employee</title>
</head>

<body>

    <div class="container mt-5 border">

        <div class="heading mt-5">
            <h1 class="text-center">Laravel AJAX CRUD - Employee Data</h1>
        </div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Add Employee
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Employee</h1>
                        <div class="alert"></div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="addEmployeeForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                            
                            <div class="mb-3">
                                <label for="text-input" class="form-label">Name</label>
                                <input type="text" class="form-control" id="text-input" name="name" required
                                    placeholder="Enter Name...">
                            </div>
                            <div class="mb-3">
                                <label for="phone-input" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="phone-input" name="phone" required
                                    placeholder="Enter Phone Number..." aria-describedby="email_Help">
                            </div>
                            <div class="mb-3">
                                <label for="image-input" class="form-label">Image</label>
                                <input type="file" name="image" id="image-input" class="form-control" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="closeCreateModel" class="btn btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" id="insertsave" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container mt-5">

            <div class="table-responsive border">
                <table class="table border">
                    <thead>
                        <tr>
                            <td>Sr.no</td>
                            <td>Name</td>
                            <td>Phone</td>
                            <td>Image</td>
                            <td>Update</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

   <!--Update Modal -->
   <div class="modal fade" id="EditExampleModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Employee</h1>
                        <div class="alert"></div>
                        <button type="button" id="CloseUpdateModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form id="UpdateEmployeeForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body">
                        <div class="mb-3">
                                <input type="hidden" class="form-control" id="editid" name="id" required disabled >
                                <label for="edit_name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="editname" name="name" required placeholder="Enter Name...">
                            </div>
                            <div class="mb-3">
                                <label for="editphone" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="editphone" name="phone" required placeholder="Enter Phone Number..." aria-describedby="email_Help">
                            </div>
                            <div class="mb-3">
                                <label for="input_image" class="form-label">Image</label>
                                <input type="file" name="image" id="input_image" class="form-control" required>
                                <label for="current_image" class="form-label">Current Image</label>
                                <div id="current_image">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="closeUpdateModal" class="btn btn-secondary"
                                data-bs-dismiss="modal">Close</button>
                            <button type="button" id="updateemployee" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
    <script>
        $(document).ready(function( ){ 

            fetchEmployeeRecords();

            function fetchEmployeeRecords(){
                $.ajax({
                    type:'GET',
                    url:'/fetchemployee',
                    datatype:"json",
                    success:function(response) {
                        $('tbody').html('');
                        $.each(response.employee,function(key,item){
                            $('tbody').append('<tr>\
                            <td>'+item.id+'</td>\
                            <td>'+item.name+'</td>\
                            <td>'+item.phone+'</td>\
                            <td><img src="./employees/'+item.image+' "alt="'+item.image+'" height="200" width="200"></td>\
                            <td><button class="btn_edit btn btn-primary" value='+item.id+'>Update</button></td>\
                            <td><button class="btn_delete btn btn-danger" value='+item.id+'>Delete</button></td>\
                        </tr>')
                        })
                    },
                    error:function(response) {
                        console.log(response);
                    }
                })
            } 

            $(document).on('click','.btn_edit',function(e){
                e.preventDefault();

                let empid = $(this).val();
                $('#EditExampleModel').modal('show');
                $.ajax({
                    type:'GET',
                    url:'/edit_emp/'+empid,
                    success:function(response){
                        if(response.status == 404){
                            alert(response.message);
                            $('#EditExampleModel').modal('hide');
                        }else{
                            $('#editid').val(response.employee.id);
                            $('#editname').val(response.employee.name);
                            $('#editphone').val(response.employee.phone);
                            $('#current_image').html('<img src="employees/'+response.employee.image+'" alt="'+response.employee.image+'" height="100" width="100">')
                        }
                    }
                })
            })

            $(document).on('click','#updateemployee',function(e){
                e.preventDefault();

                let formdata = new FormData($('#UpdateEmployeeForm')[0]);
                let empid = $('#editid').val(); 
                $.ajax({
                    type:'POST',
                    url:'/update_employee/'+empid,
                    data:formdata,
                    contentType:false,
                    processData:false,
                    success:function(response){
                        if(response.status == 200){
                            console.log(response.status);
                            console.log(response.message);
                            $('#closeUpdateModal').click();
                        fetchEmployeeRecords();                  
                          }else{
                            console.log(response.status);
                            console.log(response.message);
                            fetchEmployeeRecords();
                        }
                    }
                })
            })
            
            

            $('#insertsave').on('click',function(e){
                 e.preventDefault();
 
                 let formdata = new FormData($('#addEmployeeForm')[0]);
                $.ajax({
                    type:'POST',
                    url:'/employee',
                    data:formdata,
                    contentType:false, 
                    processData:false,
                    success:function(response){
                        $('#closeCreateModel').click();
                        $('#addEmployeeForm')[0].reset();
                        fetchEmployeeRecords();
                    },
                    error:function(data){
                        console.log(data);
                    }
                });
            });

            
        })
    </script>
</body>

</html>