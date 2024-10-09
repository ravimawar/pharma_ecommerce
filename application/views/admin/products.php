
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <div class="page-title-box">
                        <h4></h4>
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="<?=base_url('dashboard')?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Products</li>
                        </ol>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="state-information d-none d-sm-block">
                        <div class="state-graph">
                        <a href="#" class="btn btn-primary waves-effect waves-light btn-lg" data-bs-toggle="modal" data-bs-target="#addProductModal">Add Products</a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
           
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">SSL Products</h4>
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="productable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline">
                                <thead>
                                    <tr>
                                        <th>Index</th> 
                                        <th>Product Name</th>
                                        <th>Product Image</th>
                                        <th>Product Quantity</th>
                                        <th>Product Price</th>
                                        <th>Product MRP</th>
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
<div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addProductForm" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="categories" class="form-label">Select Categories</label>
                    <select class="form-control select2" id="categoriesDropdown" name="category" style="width: 100%;" onchange="updateCategoryId()">
                    <option value="">Select Category</option>
                    <?php 
                    foreach ($categories as $category) { 
                        echo "<option value='" . htmlspecialchars($category['name']) . "' data-id='" . htmlspecialchars($category['id']) . "'>" . htmlspecialchars($category['name']) . "</option>";
                    }
                    ?>
                </select>
                    <input type="hidden" id="categoryId" name="categoryId" value="">
                    <div class="error-message" style="color: red; display: none;"></div>
                </div>

                <div class="mb-3">
                    <label for="productImage" class="form-label">Product Image</label>
                    <input type="file" class="form-control" id="productImage" name="productImage" accept="image/*" required>
                    <div class="error-message" style="color: red; display: none;"></div>
                </div>

                <div id="imagePreviewContainer" class="mt-3"></div>

                <div class="mb-3">
                    <label for="productName" class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="productName" name="productName" required>
                    <div class="error-message" style="color: red; display: none;"></div>
                </div>

                <div class="mb-3">
                    <label for="productDescription" class="form-label">Description</label>
                    <textarea class="form-control" id="productDescription" name="productDescription" rows="3" required></textarea>
                    <div class="error-message" style="color: red; display: none;"></div>
                </div>

                <div class="mb-3">
                    <label for="productPrice" class="form-label">Price</label>
                    <input type="number" class="form-control" id="productPrice" name="productPrice" required>
                    <div class="error-message" style="color: red; display: none;"></div>
                </div>

                <div class="mb-3">
                    <label for="productMRP" class="form-label">MRP</label>
                    <input type="number" class="form-control" id="productMRP" name="productMRP" required>
                    <div class="error-message" style="color: red; display: none;"></div>
                </div>

                <div class="mb-3">
                    <label for="productQuantity" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="productQuantity" name="productQuantity" required>
                    <div class="error-message" style="color: red; display: none;"></div>
                </div>
                
            </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="saveProductBtn">Save Product</button>
            </div>
        </div>
    </div>
</div>
<!-- edit products modal -->
<!-- Edit Product Modal -->
<div class="modal fade" id="editProductModal" tabindex="-1" aria-labelledby="editProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductModalLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editProductForm" enctype="multipart/form-data">
                    <!-- Select Categories -->
                    <div class="mb-3">
                        <label for="editCategoriesDropdown" class="form-label">Select Categories</label>
                        <select class="form-control select2" id="editCategoriesDropdown" name="editCategory" style="width: 100%;">
                            <option value="">Select Category</option>
                            <?php 
                            foreach ($categories as $category) { 
                                echo "<option value='" . htmlspecialchars($category['id']) . "'>" . htmlspecialchars($category['name']) . "</option>";
                            }
                            ?>
                        </select>
                        <input type="hidden" id="editCategoryId" name="editCategoryId" value="">
                        <div class="error-message" style="color: red; display: none;"></div>
                    </div>

                    <!-- Product Image -->
                    <div class="mb-3">
                        <label for="editProductImage" class="form-label">Product Image</label>
                        <input type="file" class="form-control" id="editProductImage" name="editProductImage" accept="image/*" required>
                        <div class="error-message" style="color: red; display: none;"></div>
                    </div>

                    <!-- Image Preview Container -->
                    <div id="editImagePreviewContainer" class="mt-3 d-flex"></div>

                    <!-- Product Name -->
                    <div class="mb-3">
                        <label for="editProductName" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="editProductName" name="editProductName" required>
                        <input type="hidden" class="form-control" id="editproductId" name="prd_id" required>

                        <div class="error-message" style="color: red; display: none;"></div>
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="editProductDescription" class="form-label">Description</label>
                        <textarea class="form-control" id="editProductDescription" name="editProductDescription" rows="3" required></textarea>
                        <div class="error-message" style="color: red; display: none;"></div>
                    </div>

                    <!-- Price -->
                    <div class="mb-3">
                        <label for="editProductPrice" class="form-label">Price</label>
                        <input type="number" class="form-control" id="editProductPrice" name="editProductPrice" required>
                        <div class="error-message" style="color: red; display: none;"></div>
                    </div>

                    <!-- MRP -->
                    <div class="mb-3">
                        <label for="editProductMRP" class="form-label">MRP</label>
                        <input type="number" class="form-control" id="editProductMRP" name="editProductMRP" required>
                        <div class="error-message" style="color: red; display: none;"></div>
                    </div>

                    <!-- Quantity -->
                    <div class="mb-3">
                        <label for="editProductQuantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="editProductQuantity" name="editProductQuantity" required>
                        <div class="error-message" style="color: red; display: none;"></div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="editSaveProductBtn">Update Product</button>
            </div>
        </div>
    </div>
</div>
<script>
let base_url = "<?= base_url(); ?>";
$(document).ready(function () {
    oTable = $('#productable').DataTable({
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
        'sAjaxSource': "<?=site_url('admin/product/getproducts/')?>",
        'fnServerData': function (sSource, aoData, fnCallback) {
            aoData.push({
                "name": "<?=$this->security->get_csrf_token_name()?>",
                "value": "<?=$this->security->get_csrf_hash()?>"
            });
            $.ajax({'dataType': 'json', 'type': 'POST', 'url': sSource, 'data': aoData, 'success': fnCallback});
        },
       "aoColumns": [
    { "data": null, "sortable": false,
        "mRender": function(data, type, full, meta) {
            return meta.row + meta.settings._iDisplayStart + 1; 
        }
    },
    { "data": 1 }, 
    { 
        "mRender": function(data, type, full) {
            return '<img src="<?= base_url('') ?>' + full[2] + '" alt="product Image" style="width: 50px; height: 50px;"/>';
        }
    },
    { "data": 3 }, 
    { "data": 4 },
    { "data": 5 }, 
    { "data": 6 }  
],

        'fnRowCallback': function (nRow, aData, iDisplayIndex) {
            nRow.id = aData[0];
            nRow.className = "attendes_list";
            return nRow;
        },
        "fnDrawCallback": function (nRow, aaData, iStart, iEnd, aiDisplay) {
            $('[data-toggle="popover"]').popover();
            $('[data-toggle="tooltip"]').tooltip();
        }
    });
});
   
$(document).ready(function() {
    $('#saveProductBtn').on('click', function(e) {
        e.preventDefault(); 

        $('.error-message').hide();

        let isValid = true; 

        if ($('#categoriesDropdown').val() === '') {
            $('#categoriesDropdown').next('.error-message').text('Please select a category.').show();
            isValid = false;
        }

        
        if ($('#productImage').get(0).files.length === 0) {
            $('#productImage').next('.error-message').text('Please upload a product image.').show();
            isValid = false;
        }

        if ($('#productName').val().trim() === '') {
            $('#productName').next('.error-message').text('Please enter a product name.').show();
            isValid = false;
        }

        
        if ($('#productDescription').val().trim() === '') {
            $('#productDescription').next('.error-message').text('Please enter a description.').show();
            isValid = false;
        }

        
        if ($('#productPrice').val() === '' || parseFloat($('#productPrice').val()) <= 0) {
            $('#productPrice').next('.error-message').text('Please enter a valid price.').show();
            isValid = false;
        }

        
        if ($('#productMRP').val() === '' || parseFloat($('#productMRP').val()) <= 0) {
            $('#productMRP').next('.error-message').text('Please enter a valid MRP.').show();
            isValid = false;
        }

        
        if ($('#productQuantity').val() === '' || parseInt($('#productQuantity').val()) <= 0) {
            $('#productQuantity').next('.error-message').text('Please enter a valid quantity.').show();
            isValid = false;
        }

        if (isValid) {
            var formData = new FormData($('#addProductForm')[0]);

            $.ajax({
                url: '<?= base_url('admin/product/add_product'); ?>',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    var jsonResponse = JSON.parse(response);

                    if(jsonResponse.success === true) {
                        $('#addProductModal').modal('hide');
                    Swal.fire({
                        icon: 'success',
                        title: 'Product Added Successfully',
                        text: response.message,
                    });
                    $('#addProductForm')[0].reset();
                    $('#imagePreviewContainer').html('');
                    location.reload();
                }else{
                    Swal.fire(
                        'Failed!',
                        'The Product could not be added.',
                        'error'
                    );
                }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error Adding Product',
                        text: 'Something went wrong: ' + error,
                    });
                }
            });
        }
    });
});

$(document).on('click', '.edit', function() {
    var userId = $(this).data('id');

    $.ajax({
        url: '<?=site_url('admin/product/getsingalproduct')?>',
        type: 'POST',
        data: { id: userId },
        dataType: 'json',
        success: function(response) {
            if (response.success) {
                var product = response.data;

                $('#editCategoryId').val(product.categories_id);
                $('#editproductId').val(product.id);

                

                $('#editCategoriesDropdown option').each(function() {
                    
                    if ($(this).text().trim() === product.category_name) {
                        $(this).prop('selected', true);
                    } else {
                        $(this).prop('selected', false);
                    }
                });

                $('#editCategoriesDropdown').trigger('change');

                $('#editProductName').val(product.name);
                $('#editProductDescription').val(product.description);
                $('#editProductPrice').val(product.price);
                $('#editProductMRP').val(product.mrp);
                $('#editProductQuantity').val(product.quntity);

                var imagePath = product.image; 
                var imagePreviewHtml = '';

                if (imagePath) { 
                    imagePreviewHtml = `
                        <div class="image-preview-item">
                            <img src="${imagePath}" alt="Product Image" style="width: 50px; height: 50px; margin-right: 10px;" />
                        </div>`;
                }
                $('#editImagePreviewContainer').html(imagePreviewHtml);

                $('#editProductModal').modal('show');
            } else {
                 alert('Failed to fetch product data.');
            }
            },
                    error: function() {
                        alert('An error occurred while fetching product data.');
                    }
    });
});
$('#editSaveProductBtn').click(function() {
			var form = $('#editProductForm')[0]; 
			var formData = new FormData(form); 

			$.ajax({
				url: '<?=site_url('admin/product/updateproduct')?>', 
				type: 'POST',
				data: formData,
				contentType: false, 
				processData: false, 
				success: function(response) {
					var jsonResponse = JSON.parse(response);
					if(jsonResponse.success === true) {
					$('#editProductModal').modal('hide');
					$('#attendes').DataTable().ajax.reload();
					Swal.fire(
					'Updated!',
					'The product has been updated.',
					 'success'
					);
					location.reload();

			  }  else {
			Swal.fire(
				'Failed!',
				'The product could not be updated.',
				'error'
			);
		}       },
				error: function() {
					alert('An error occurred while updating product data');
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
                    url: '<?=site_url('admin/product/delete_product')?>', 
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

function updateCategoryId() {
    var selectedOption = document.getElementById('categoriesDropdown').selectedOptions[0];
    
    var categoryId = selectedOption.getAttribute('data-id');
    
    document.getElementById('categoryId').value = categoryId;
}
$('#editProductImage').on('change', function(event) {
    var file = event.target.files[0]; 

    if (file) { 
        var reader = new FileReader(); 
        reader.onload = function(e) {
            var newPreviewHtml = `
                <div class="image-preview-item">
                    <img src="${e.target.result}" alt="Product Image" style="width: 50px; height: 50px; margin-right: 10px;" />
                </div>`;
            
            $('#editImagePreviewContainer').html(newPreviewHtml);
        };
        reader.readAsDataURL(file); 
    }
}); 

</script>