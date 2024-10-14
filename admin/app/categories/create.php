<?php require '../../includes/db-config.php';
require '../../includes/helper.php'; ?>

<?php
$categoryTypes = [
  "EXAM" => "Exam",
  "Courses" => "Courses",
  "Universities" => "Universities",
  "Countries" => "Countries"
];
?>

<div class="modal-header">
  <h3 class="modal-title">Add Category</h3>
  <button type="button" class="btn-close" data-bs-dismiss="modal">
  </button>
</div>
<div class="card-body">
  <div class="form-validation">
    <form class="needs-validation" role="form" id="form-add-categories" action="/admin/app/categories/store" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="mb-3 col-md-6">
          <label class="form-label">Name
            <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="name" placeholder="Enter a Category Name.." required>
        </div>

        <div class="mb-3 col-md-6">
          <label class="form-label">Category Type <span class="text-danger">*</span></label>
          <select name="category_type" id="category_type" class="form-control sumoselect" required>
            <option value="">Select Category</option>
            <?php foreach ($categoryTypes as $key => $value) { ?>
              <option value="<?= $key ?>"><?= $value ?></option>
            <?php } ?>
          </select>
        </div>

        <!-- <div class="mb-3 col-md-6">
          <label class="form-label">Meta Title
          </label>
          <input type="text" class="form-control" name="meta_title" placeholder="Enter a Meta Title..">
        </div>
        <div class="mb-3 col-md-6">
          <label class="form-label">Meta Key
          </label>
          <input type="text" class="form-control" name="meta_key" placeholder="Enter a Meta Key..">
        </div>
        <div class="mb-3 col-md-6">
          <label class="form-label">Meta Description</label>
          <textarea cols="2" class="form-control" name="meta_description" placeholder="Enter a Meta Description.."></textarea>
        </div> -->

        <div class="mb-3 col-md-12">
          <label class="form-label">Order By <span class="text-danger">*</span></label>
          <input type="number" min="0" class="form-control" name="position" placeholder="Enter a Position.." required>
        </div>

      </div>
      <div class=" modal-footer clearfix text-end">
        <div class="col-md-4 m-t-10 sm-m-t-10">
          <button aria-label="" type="submit" class="btn btn-primary btn-cons btn-animated from-left">
            <span>Save</span>
          </button>
        </div>
      </div>
  </div>
  </form>
</div>
</div>



<script>
  $(function() {
    $('#form-add-categories').validate({
      errorPlacement: function(error, element) {
        if (element.is("select")) {
          error.insertAfter(element.parent());
        } else {
          error.insertAfter(element);
        }
      }
    });
  });

  $("#form-add-categories").on("submit", function(e) {
    if ($('#form-add-categories').valid()) {
      // $(':input[type="submit"]').prop('disabled', true);

      var formData = new FormData(this);

      $.ajax({
        url: this.action,
        type: 'post',
        data: formData,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(data) {
          if (data.status == 200) {
            $('.modal').modal('hide');
            toastr.success(data.message, 'Success');
            $('#categories-table').DataTable().ajax.reload(null, false);
          } else {
            $(':input[type="submit"]').prop('disabled', false);
            toastr.error(data.message, 'Error');
          }
        }
      });
      e.preventDefault();
    }
  });
</script>

