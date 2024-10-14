<?php
if (isset($_GET['id'])) {
    require '../../includes/db-config.php';
    $id = intval($_GET['id']);
    $wilpExperienceResult = $conn->query("SELECT * FROM wilp_experience WHERE ID = $id");
    $wilpExperience = $wilpExperienceResult->fetch_assoc();
}
?>

<div class="modal-header">
    <h5 class="modal-title">Edit Wilp Experience</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="card-body">
    <div class="form-validation">
        <form class="needs-validation" role="form" id="form-edit-wilp-experience" action="/admin/app/wilp_experience/update" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $wilpExperience['ID'] ?>">

            <div class="mb-3 col-md-12">
                <label class="form-label">Position <span class="text-danger">*</span></label>
                <input type="number" class="form-control" value="<?= $wilpExperience['Position'] ?>" name="position" placeholder="Enter Position.." required>
            </div>

            <div class="mb-3 col-md-12">
                <label class="form-label">Description <span class="text-danger">*</span></label>
                <textarea class="form-control" id="editor" name="description" rows="10" required><?= $wilpExperience['Description'] ?></textarea>
            </div>

            

            <div class="modal-footer clearfix text-end">
                <div class="col-md-4 m-t-10 sm-m-t-10">
                    <button type="submit" class="btn btn-primary btn-cons btn-animated from-left">
                        <span>Save</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $(function() {
        $('#form-edit-wilp-experience').validate({
            rules: {
                // name: {
                //     required: true
                // },
                description: {
                    required: true
                },
                position: {
                    required: true
                }
            },
            highlight: function(element) {
                $(element).addClass('error');
                $(element).closest('.form-control').addClass('has-error');
            },
            unhighlight: function(element) {
                $(element).removeClass('error');
                $(element).closest('.form-control').removeClass('has-error');
            }
        });

        CKEDITOR.replace('editor');

        $("#form-edit-wilp-experience").on("submit", function(e) {
            if ($('#form-edit-wilp-experience').valid()) {
                var editorContent = CKEDITOR.instances.editor.getData();
                if (editorContent == '') {
                    $("#editor-error").text("This field is required.");
                    return false;
                }
                var formData = new FormData(this);
                formData.append('description', editorContent);

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
                            $('#experience-table').DataTable().ajax.reload(null, false);
                        } else {
                            toastr.error(data.message, 'Error');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Failed to save data.', 'Error');
                    }
                });
                e.preventDefault();
            }
        });
    });
</script>
