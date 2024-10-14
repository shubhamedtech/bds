<?php
if (isset($_GET['id'])) {
  require '../../includes/db-config.php';
  require '../../includes/helper.php';
  $id = intval($_GET['id']);
  $courses = $conn->query("SELECT * FROM courses WHERE ID = $id");
  $courses = $courses->fetch_assoc();
}
?>

<div class="modal-header">
  <h3 class="modal-title">Edit Program (<a href="/course-details?course=<?= $courses['Slug'] ?>" style="color: #222B40;"><?= $courses['Name'] ?></a>)</h3>
  <button type="button" class="btn-close" data-bs-dismiss="modal">
  </button>
</div>
<div class="card-body">
  <div class="form-validation">
    <form class="needs-validation" role="form" id="form-add-program" action="/admin/app/programs/update.php" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $courses['ID'] ?>">
      <div class="row">

        <div class="mb-3 col-md-4">
          <label class="form-label">Sector<span class="text-danger">*</span></label>
          <?php $streamArr = getStreamFunc($conn); ?>
          <select name="Stream_ID" id="Stream_ID" class="form-control sumoselect" required>
            <option value="">Select Sector</option>
            <?php foreach ($streamArr as $stream) {  ?>
              <option value="<?= $stream['ID'] ?>" <?php if ($courses['Stream_ID'] == $stream['ID']) {
                                                      echo "selected";
                                                    } else {
                                                    } ?>><?= $stream['Name'] ?></option>
            <?php } ?>
          </select>
        </div>
        
        <div class="mb-3 col-md-4">
          <label class="form-label">Program <span class="text-danger">*</span></label>
          <input type="text" class="form-control" value="<?= $courses['Name'] ?>" name="name" placeholder="Enter a Program Name.." required>
        </div>
        <div class="mb-3 col-md-4">
          <label class="form-label">Short Name</label>
          <input type="text" class="form-control" value="<?= $courses['Short_Name'] ?>" name="Short_Name" placeholder="Enter a Short Name..">
        </div>

        <div class="mb-3 col-md-4">
          <label class="form-label">Program Type<span class="text-danger">*</span></label>
          <select name="Type_ID" id="Type_ID" class="form-control sumoselect" required>
            <option value="">Select Program Type</option>
            <?php foreach ($programArr as $key => $value) {  ?>
              <option value="<?= $key ?>" <?php if ($key == $courses['Mode']) {
                                            echo "selected";
                                          } else {
                                            echo "";
                                          } ?>><?= $value ?></option>
            <?php } ?>
          </select>
        </div>
        <!-- New input fields for Duration in Years and Semesters -->
        <div class="mb-3 col-md-4">
          <label class="form-label">Duration (Years) <span class="text-danger">*</span></label>
          <input type="text" class="form-control" value="<?= $courses['Duration_Years'] ?>" name="programme_duration_years" placeholder="Enter Duration in Years..">
        </div>
        <div class="mb-3 col-md-4">
          <label class="form-label">Duration (Semesters) <span class="text-danger">*</span></label>
          <input type="text" class="form-control" value="<?= $courses['Duration_Semesters'] ?>" name="programme_duration_semesters" placeholder="Enter Duration in Semesters..">
        </div>

        <div class="mb-3 col-md-12 syllabus_file">
          <label class="form-label">Photo <span class="text-danger">*</span></label>
          <input type="hidden" name="updated_file" value="<?= $courses['Photo'] ?>">
          <input type="file" name="photo" id="photo" class="form-control" onchange="fileValidation('photo')" accept="image/png, image/jpg, image/jpeg, image/svg">
          <?php if (!empty($id) && !empty($courses['Photo'])) { ?>
            <img src="/admin<?php echo !empty($id) ? $courses['Photo'] : ''; ?>" height="70" />
          <?php } ?>
        </div>
        <h4>Program Details</h4>
        <div class="mb-3 col-md-12">
          <label class="form-label">Title</label>
          <input type="text" class="form-control" value="<?= $courses['Title'] ?>" name="title" placeholder="Enter a Title..">
        </div>
        <div class="mb-3 col-md-12">
          <label class="form-label">Description</label>
          <textarea cols="2" class="form-control" name="description" placeholder="Enter a Description.."><?= $courses['Description'] ?></textarea>
        </div>
        <div class="mb-3 col-md-12">
          <label class="form-label">Content <span class="text-danger">*</span></label>
          <textarea class="ckeditor" cols="80" id="editor_content" name="content" rows="10"><?= $courses['Content'] ?></textarea>
        </div>
        <div class="mb-3 col-md-12">
          <label class="form-label">Programme Highlights <span class="text-danger">*</span></label>
          <textarea class="ckeditor" cols="80" id="editor_highlight" name="highlight" rows="10"><?= $courses['Highlight'] ?></textarea>
        </div>
        <div class="mb-3 col-md-12">
          <label class="form-label">Eligibility Criteria <span class="text-danger">*</span></label>
          <textarea class="ckeditor" cols="80" id="editor_eligibility" name="eligibility" rows="10"><?= $courses['Eligibility'] ?></textarea>
        </div>

        <div class="mb-3 col-md-12">
          <label class="form-label">Learning Methodology <span class="text-danger">*</span></label>
          <textarea class="ckeditor" cols="80" id="editor_methodology" name="methodology" rows="10"><?= $courses['Methodology'] ?></textarea>
        </div>
        <div class="mb-3 col-md-12">
          <label class="form-label">Online Labs <span class="text-danger">*</span></label>
          <textarea class="ckeditor" cols="80" id="editor_labs" name="labs" rows="10"><?= $courses['Labs'] ?></textarea>
        </div>

        <div class="mb-3 col-md-12">
          <label class="form-label">Programme duration <span class="text-danger">*</span></label>
          <textarea class="ckeditor" cols="80" id="editor_duration" name="duration" rows="10"><?= $courses['Duration'] ?></textarea>
        </div>
        <div class="mb-3 col-md-12">
          <label class="form-label">Fee Structure <span class="text-danger">*</span></label>
          <textarea class="ckeditor" cols="80" id="editor_fee" name="fee" rows="10"><?= $courses['Fee'] ?></textarea>
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
    // Initialize validation
    $('#form-add-program').validate({
      errorPlacement: function(error, element) {
        if (element.is("select")) {
          error.insertAfter(element.parent());
        } else {
          error.insertAfter(element);
        }
      }
    });

    // Initialize SumoSelect
    $('.sumoselect').SumoSelect({
      search: true,
      searchText: 'Enter here.'
    });

    // Initialize CKEditor for all textareas with the class 'ckeditor'
    $('.ckeditor').each(function() {
      CKEDITOR.replace($(this).attr('id'));
    });

    $("#form-add-program").on("submit", function(e) {
      if ($('#form-add-program').valid()) {
        $(':input[type="submit"]').prop('disabled', true);
        var content = CKEDITOR.instances.editor_content.getData();
        var highlight = CKEDITOR.instances.editor_highlight.getData();
        var eligibility = CKEDITOR.instances.editor_eligibility.getData();
        var methodology = CKEDITOR.instances.editor_methodology.getData();
        var labs = CKEDITOR.instances.editor_labs.getData();
        var duration = CKEDITOR.instances.editor_duration.getData();
        var fee = CKEDITOR.instances.editor_fee.getData();

        var formData = new FormData(this);
        formData.append('content', content);
        formData.append('highlight', highlight);
        formData.append('eligibility', eligibility);
        formData.append('methodology', methodology);
        formData.append('labs', labs);
        formData.append('duration', duration);
        formData.append('fee', fee);

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

              $('#courses-table').DataTable().ajax.reload(null, false);
            } else {
              $(':input[type="submit"]').prop('disabled', false);
              toastr.error(data.message, 'Error');
            }
          }
        });
        e.preventDefault();
      }
    });
  });
</script>