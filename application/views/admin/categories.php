<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title-box">
                        <h4>Categories</h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?=base_url('admin/dashboard')?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Categories</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="state-information d-none d-sm-block">
                        <div class="state-graph">
                        <a href="#" class="btn btn-primary waves-effect waves-light btn-lg" data-bs-toggle="modal" data-bs-target="#addCategoryModal">Add Categories</a>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Categories</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="categories_tbl" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline">
                                    <thead>
                                        <tr>
                                        <th>Index</th> 
                                        <th>Categories name</th>
                                        <th>Categories image</th>
                                        <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- categorie add modal -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
                <button type="button" class="btn-close" data-bs-theme="dark"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <form id="categoryForm" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="categoryName" id="categoryName" placeholder="Enter category name" required>
                    </div>
                    
                    <div class="mb-3">
                        <label for="categoryFile" class="form-label">Choose File</label>
                        <input type="file" class="form-control" name="categoryimage" id="categoryFile" accept=".jpg, .jpeg, .png" required>
                        <small class="text-muted" style="font-weight:600;">Allowed types: .jpg, .jpeg, .png</small>

                    </div>
                    
                    <button type="button" class="btn btn-primary" id="submitCategory">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Edit Modal -->
<div class="modal fade" id="editCategoryModal" tabindex="-1" aria-labelledby="editCategoryModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCategoryModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-theme="dark" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editcategoryForm" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="categoryName" class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="name" id="editcategoryName" required>
                        <input type="hidden" class="form-control" name="id" id="categoryid">

                    </div>
                    
                    <div class="mb-3">
                        <label for="categoryFile" class="form-label">Choose File</label>
                        <input type="file" class="form-control" name="image" id="editcategoryFile" accept=".jpg, .jpeg, .png" required>
                        <small class="text-muted" style="font-weight:600;">Allowed types: .jpg, .jpeg, .png</small>

                        
                        <div id="editCategoryImagePreview" class="mt-3">
                            <img id="editCategoryImage" src="" alt="Category Image" style="width: 50px; height: 50px;" />
                        </div>
                    </div>
                    
                    <button type="button" class="btn btn-primary" id="updateCategory">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function () {
    oTable = $('#categories_tbl').dataTable({
        "aaSorting": [[1, "asc"]],
        "serverSide": true,
        "fixedHeader": true,
        "responsive": false,
        "autoWidth": false,
        "aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
        "iDisplayLength": 10,
        'bProcessing': true, 
        'bServerSide': true,
        "bDestroy": true,
        "bRetrieve": true,
        'sAjaxSource': "<?=site_url('admin/categories/getcategories/')?>",
        'fnServerData': function (sSource, aoData, fnCallback) {
            aoData.push({
                "name": "<?=$this->security->get_csrf_token_name()?>",
                "value": "<?=$this->security->get_csrf_hash()?>"
            },
            {
                "name": "sColumns",
                "value": "",
            });

            $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
        },
        "columnDefs": [{
            "defaultContent": "-",
            "targets": "_all",
        }],
       "aoColumns": [
    { 
        "mRender": function(data, type, full, meta) {
            return meta.row + meta.settings._iDisplayStart + 1; 
        },
        "bSortable": false 
    },
    { 
        "data": 1 
    },
    { 
        "mRender": function(data, type, full) {
            return '<img src="<?= site_url('') ?>' + full[2] + '" alt="Category Image" style="width: 50px; height: 50px;"/>';
        }
    },
    { 
        "data": 3 
    }
],
        'fnRowCallback': function (nRow, aData, iDisplayIndex) {
            var oSettings = oTable.fnSettings();
            nRow.id = aData[0];
            nRow.className = "attendes_list";
            return nRow;
        },
        "fnFooterCallback": function (nRow, aaData, iStart, iEnd, aiDisplay) {
        },
        "fnDrawCallback": function (nRow, aaData, iStart, iEnd, aiDisplay) {
            $('[data-toggle="popover"]').popover();
            $('[data-toggle="tooltip"]').tooltip();
        }
    });
});

 $('#submitCategory').click(function() {
        var form = $('#categoryForm')[0]; 
        var formData = new FormData(form); 
       $.ajax({
            url: '<?=base_url('admin/Categories/addCategories')?>', 
            type: 'POST',
            data: formData,
            contentType: false, 
            processData: false, 
            success: function(response) {
                var jsonResponse = JSON.parse(response);
                if(jsonResponse.success === true) {
                $('#addCategoryModal').modal('hide');
               Swal.fire(
                'Success!',
                'The Category has been Added.',
                 'success'
                );
                location.reload();

          }  else {
           Swal.fire(
            'Failed!',
            'The Category could not be added.',
            'error'
          );
          }       
        },
            error: function() {
                console.log('An error occurred while updating user data');
            }
        });
    });

    $(document).on('change', '#editcategoryFile', function(event) {
    var input = event.target;
        if (input.files && input.files[0]) {
        var reader = new FileReader();
         reader.onload = function(e) {
            $('#editCategoryImage').attr('src', e.target.result).css('display', 'block');
        }
         reader.readAsDataURL(input.files[0]);
    }
});

    $(document).on('click', '#edit', function() {
    var cat_id = $(this).data('id'); 

    $.ajax({
        url: '<?=base_url('admin/Categories/getsingalCategories')?>',
        type: 'POST',
        data: { id: cat_id },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                $('#editCategoryModal').modal('show');

                $('#editcategoryName').val(response.data.name);
                $('#categoryid').val(response.data.id);

                let imageUrl = "<?= base_url(); ?>" + response.data.image;
                if ($('#editCategoryImage').length === 0) {
                    $('#editcategoryFile').after(
                        `<div id="editCategoryImagePreview" class="mt-3">
                            <img id="editCategoryImage" src="${imageUrl}" alt="Category Image" style="width: 50px; height: 500px;" />
                        </div>`
                    );
                } else {
                    $('#editCategoryImage').attr('src', imageUrl);
                }
            } else {
                console.log('Failed to fetch category data.');
            }
        },
        error: function() {
            console.log('An error occurred while fetching category data.');
        }
    });
});

$('#updateCategory').click(function() {
        var form = $('#editcategoryForm')[0]; 
        var formData = new FormData(form); 

        $.ajax({
            url: '<?=site_url('admin/Categories/updateCategories')?>', 
            type: 'POST',
            data: formData,
            contentType: false, 
            processData: false, 
            success: function(response) {
                var jsonResponse = JSON.parse(response);
                if(jsonResponse.success === true) {
                $('#editCategoryModal').modal('hide');
                $('#categories_tbl').DataTable().ajax.reload();
                Swal.fire(
                'Updated!',
                'The category has been updated.',
                 'success'
                );
                location.reload();

          }  else {
        Swal.fire(
            'Failed!',
            'The category could not be updated.',
            'error'
        );
    }       },
            error: function() {
                console.log('An error occurred while updating category data');
            }
        });
    });
    $(document).on('click', '.delete-btn', function() {
        var userId = $(this).data('id');
        var row = $(this).closest('tr');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                
                $.ajax({
                    url: '<?=site_url('admin/Categories/delete_categorie')?>', 
                    type: 'POST',
                    data: { id: userId, csrf_test_name: '<?=$this->security->get_csrf_hash()?>' }, 
                    success: function(response) {
                        var jsonResponse = JSON.parse(response);
                        if (jsonResponse.success === true) {
                            Swal.fire(
                                'Deleted!',
                                'The profile has been deleted.',
                                'success'
                            );
                            location.reload();
                        } else {
                            Swal.fire(
                                'Error!',
                                'An error occurred while deleting the profile.',
                                'error'
                            );
                        }
                    }
                });
            }
        });
    });

</script>
