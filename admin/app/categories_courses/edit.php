<?php
if (isset($_GET['id'])) {
  require '../../includes/db-config.php';
  require '../../includes/helper.php';
  $id = intval($_GET['id']);
  $getdataQuery = $conn->query("SELECT * FROM categories_courses WHERE ID = $id");
  $getdata = $getdataQuery->fetch_assoc();
}
?>

<div class="modal-header">
  <h5 class="modal-title">Edit Program</h5>
  <button type="button" class="btn-close" data-bs-dismiss="modal">
  </button>
</div>
<div class="card-body">
  <div class="form-validation">
    <form class="needs-validation" role="form" id="form-add-stream" action="/admin/app/categories_courses/update" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $getdata['ID'] ?>">

      <div class="row">

        <div class="mb-3 col-md-12">
          <label class="form-label">University<span class="text-danger">*</span></label>
          <?php $cardArr = getCategory_cardFunc($conn); ?>
          <select name="categories_Card_ID" id="categories_Card_ID" class="form-control sumoselect" required>
            <option value="">Select Exam/University/Courses/Country</option>
            <?php foreach ($cardArr as $card) { ?>
              <option value="<?= $card['ID'] ?>" <?php if ($getdata['Categories_Card_ID'] == $card['ID']) {
                                                          echo "selected";
                                                        } else {
                                                        } ?>><?= $card['Name'] ?></option>
            <?php } ?>
          </select>
        </div>



        <div class="mb-3 col-md-6">
          <label class="form-label">Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="name" value="<?= $getdata['Name'] ?>" placeholder="Enter a Program Name.." required>
        </div>

        <div class="mb-3 col-md-6">
          <label class="form-label">Short Name <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="Short_Name" value="<?= $getdata['Short_Name'] ?>" placeholder="Enter a Short Name.." required>
        </div>

        
        <div class="mb-3 col-md-6">
          <label class="form-label">Photo <span class="text-danger">*</span></label>
          <input type="hidden" name="updated_file" value="<?= $getdata['Photo'] ?>">
          <input type="file" name="photo" id="photo" class="form-control" onchange="fileValidation('photo')" accept="image/png, image/jpg, image/jpeg, image/svg, image/avif">
          <?php if (!empty($id) && !empty($getdata['Photo'])) { ?>
            <img src="/admin<?php echo !empty($id) ? $getdata['Photo'] : ''; ?>" height="50" />
          <?php } ?>
        </div>

        <div class="mb-3 col-md-6">
          <label class="form-label">PDF <span class="text-danger">*</span></label>
          <input type="hidden" name="pdf_updated_file" value="<?= $getdata['Pdf'] ?>">
          <input type="file" name="pdf" id="pdf" class="form-control" >
          <?php if (!empty($id) && !empty($getdata['Pdf'])) { ?>
            <a href="/admin<?php echo !empty($id) ? $getdata['Pdf'] : ''; ?>" target="_blank">View PDF</a>
            <?php } ?>
        </div>

        <div class="mb-3 col-md-6">
          <label class="form-label">Fee <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="fee" value="<?= $getdata['Fees'] ?>" placeholder="Enter Fees..">
        </div>

        <div class="mb-3 col-md-6">
          <label class="form-label">Duration <span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="duration" value="<?= $getdata['Duration'] ?>" placeholder="Enter Duration.." >
        </div>
        
        <div class="mb-3 col-md-12">
          <label class="form-label">Short Description<span class="text-danger">*</span></label>
          <textarea cols="2" rows="10" class="form-control" name="description" placeholder="Enter a Short Description.." ><?= $getdata['Description'] ?></textarea>
        </div>

        <div class="mb-3 col-md-12">
          <label class="form-label">Content <span class="text-danger">*</span></label>
          <textarea class="ckeditor" cols="80" id="editor" name="content" rows="10"><?= $getdata['Content'] ?></textarea>
        </div>

        <hr>
        <h3>SEO</h3>
        <div class="mb-3 col-md-6">
          <label class="form-label">Meta Title
          </label>
          <input type="text" class="form-control" name="meta_title" value="<?= $getdata['Meta_Title'] ?>" placeholder="Enter a Meta Title.." >
        </div>
        <div class="mb-3 col-md-6">
          <label class="form-label">Meta Key
          </label>
          <input type="text" class="form-control" name="meta_key" value="<?= $getdata['Meta_Key'] ?>" placeholder="Enter a Meta Key.." >
        </div>
        <div class="mb-3 col-md-12">
          <label class="form-label">Meta Description</label>
          <textarea cols="2" class="form-control" name="meta_description"  placeholder="Enter a Meta Description.." ><?= $getdata['Meta_Description'] ?></textarea>
        </div>

        <div class="mb-3 col-md-12">
          <label class="form-label">Order By <span class="text-danger">*</span></label>
          <input type="number" min="0" class="form-control" name="position" value="<?= $getdata['Position'] ?>" placeholder="Enter a Position.." required>
        </div>
      </div>
      <div class=" modal-footer clearfix text-end">
        <div class="col-md-4 m-t-10 sm-m-t-10">
          <button aria-label="" type="submit" class="btn btn-primary btn-cons btn-animated from-left">
            <span>Save</span>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>





<script>
$(document).ready(function() {
    $('#form-add-stream').validate({
        rules: {
            name: {
                required: true
            },
            Short_Name: {
                required: true
            },
            position: {
                required: true,
                number: true,
                min: 0
            }
        },
        messages: {
            position: {
                required: "Please enter the position.",
                number: "Please enter a valid number for the position.",
                min: "Position must be at least 0."
            }
        },
        highlight: function(element) {
            $(element).addClass('error');
            $(element).closest('.form-control').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).removeClass('error');
            $(element).closest('.form-control').removeClass('has-error');
        },
        submitHandler: function(form) {
            var formData = new FormData(form);
            formData.append('content', CKEDITOR.instances['editor'].getData());

            $.ajax({
                url: form.action,
                type: 'POST',
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(data) {
                    if (data.status == 200) {
                        $('.modal').modal('hide');
                        toastr.success(data.message, 'Success');
                        $('#streams-table').DataTable().ajax.reload(null, false);
                    } else {
                        $(':input[type="submit"]').prop('disabled', false);
                        toastr.error(data.message, 'Error');
                    }
                },
                error: function(xhr, textStatus, errorThrown) {
                    toastr.error('Error submitting form: ' + errorThrown, 'Error');
                }
            });
            return false;
        }
    });
});
</script>
<script>
   $('.ckeditor').each(function() {
      CKEDITOR.replace($(this).attr('id'));
    });
</script>