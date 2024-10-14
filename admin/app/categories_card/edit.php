<?php
if (isset($_GET['id'])) {
  require '../../includes/db-config.php';
  require '../../includes/helper.php';
  $id = intval($_GET['id']);
  $getdataQuery = $conn->query("SELECT * FROM categories_card WHERE ID = $id");
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
    <form class="needs-validation" role="form" id="form-add-stream" action="/admin/app/categories_card/update" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $getdata['ID'] ?>">

      <div class="row">

        <div class="mb-3 col-md-6">
          <label class="form-label">Category<span class="text-danger">*</span></label>
          <?php $categoryArr = getCategoryFunc($conn); ?>
          <select name="Category_ID" id="Category_ID" class="form-control sumoselect" required>
            <option value="">Select Category</option>
            <?php foreach ($categoryArr as $category) { ?>
              <option value="<?= $category['ID'] ?>" <?php if ($getdata['Categories_ID'] == $category['ID']) {
                                                        echo "selected";
                                                      } else {
                                                      } ?>><?= $category['Name'] ?></option>
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
          <label class="form-label">Course Fees <span class="text-danger">*</span></label>
          <!-- <textarea class="form-control" name="eligibility" rows="5" required></textarea> -->
          <input type="text" class="form-control" name="fees" value="<?= $getdata['Fees'] ?>" placeholder="Enter fees..">

        </div>

        <div class="mb-3 col-md-6">
          <label class="form-label">Approved From<span class="text-danger">*</span></label>
          <input type="text" class="form-control" name="approved_from" value="<?= $getdata['Approved_From'] ?>" placeholder="Enter Approved Name..">
        </div>



        <div class="mb-3 col-md-12 ">
          <label class="form-label">Choose Address Type <span class="text-danger">*</span></label>
        </div>
        <div class="mb-3 col-md-4">
          <div class="form-check mb-2">
            <input class="form-check-input" type="radio" name="auth_center_type" id="india_section" value="0" <?php if ($getdata['Address_Type'] == 0) {
                                                                                                                echo "checked";
                                                                                                              } else {
                                                                                                                echo "";
                                                                                                              } ?> onchange="show_india()">
            <label class="form-check-label" for="upload_syllabus">India </label>
          </div>
        </div>
        <div class="mb-3 col-md-4">
          <div class="form-check mb-4">
            <input class="form-check-input" type="radio" name="auth_center_type" id="overseas_section" <?php if ($getdata['Address_Type'] == 1) {
                                                                                                          echo "checked";
                                                                                                        } else {
                                                                                                          echo "";
                                                                                                        } ?> value="1" onchange="show_overseas()">
            <label class="form-check-label" for="add_syllabus">Abroads</label>
          </div>
        </div>

        <div class="row indiaSection">
          <div class="mb-3 col-md-6">
            <label class="form-label">Pincode <span class="text-danger">*</span></label>
            <input type="tel" name="pincode" value="<?= $getdata['Pincode'] ?>" maxlength="6" class="form-control pincode" placeholder="ex: 123456" onkeypress="return isNumberKey(event)" onkeyup="getRegion(this.value);">
            <div class="pincode-error"></div>
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">City <span class="text-danger">*</span></label>
            <select class="form-control city" name="city" id="city">

            </select>
            <div class="city-error"></div>
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">District <span class="text-danger">*</span></label>
            <select class="form-control district" name="district" id="district">
            </select>
            <div class="district-error"></div>

          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label">State <span class="text-danger">*</span></label>
            <input type="text" name="state" value="<?= $getdata['State'] ?>" class="form-control state" placeholder="ex: California" id="state" readonly>
            <div class="state-error"></div>

          </div>
        </div>
        <div class="row overseasSection">
          <div class="mb-3 col-md-6">
            <label class="form-label">Country <span class="text-danger">*</span></label>
            <select class="form-control sumoselect country" name="country" id="country">
              <?php $country = getCountry($conn);
              foreach ($country as $key => $value) { ?>
                <option value="<?= $value['ID'] ?>" <?php if ($value['ID'] == $getdata['Country']) {
                                                      echo "selected";
                                                    } else {
                                                      echo "";
                                                    } ?>><?= $value['Name'] ?></option>
              <?php } ?>
            </select>
            <div class="country-error"></div>
          </div>

          <div class="mb-3 col-md-6">
            <label class="form-label">Address <span class="text-danger">*</span></label>
            <input type="text" class="form-control" name="address" value="<?= $getdata['Address'] ?>" placeholder="Enter address..">
          </div>
        </div>

        <div class="mb-3 col-md-12">
          <label class="form-label">Content <span class="text-danger">*</span></label>
          <textarea class="ckeditor" cols="80" id="editor" name="content" rows="10"><?= $getdata['Content'] ?></textarea>
        </div>

        <hr>
        <h2>SEO</h2>

        <div class="mb-3 col-md-6">
          <label class="form-label">Meta Title
          </label>
          <input type="text" class="form-control" name="meta_title" value="<?= $getdata['Meta_Title'] ?>" placeholder="Enter a Meta Title..">
        </div>
        <div class="mb-3 col-md-6">
          <label class="form-label">Meta Key
          </label>
          <input type="text" class="form-control" name="meta_key" value="<?= $getdata['Meta_Key'] ?>" placeholder="Enter a Meta Key..">
        </div>
        <div class="mb-3 col-md-12">
          <label class="form-label">Meta Description</label>
          <textarea cols="2" class="form-control" name="meta_description"  placeholder="Enter a Meta Description.."><?= $getdata['Meta_Description'] ?></textarea>
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
  $('.sumoselect').SumoSelect({
    search: true,
    searchText: 'Enter here.'
  });
</script>
<script>
  $(document).ready(function() {
    var auth_center_type = <?= $getdata['Address_Type'] ?>;

    if (auth_center_type == 1) {
      $('.overseasSection').show();
      $('.indiaSection').hide();
    } else if (auth_center_type == 0) {
      $('.indiaSection').show();
      $('.overseasSection').hide();
    } else {
      $('.indiaSection').hide();
      $('.overseasSection').hide();
    }

  });

  function show_india() {
    if ($('#india_section').is(":checked")) {
      $("#address").val("");
      $('.indiaSection').show();
      $('.overseasSection').hide();
    } else {
      $('.overseasSection').hide();
      $('.indiaSection').hide();
    }
  }

  function show_overseas() {
    if ($('#overseas_section').is(":checked")) {
      $("#address").val("");
      $('.overseasSection').show();
      $('.indiaSection').hide();
    } else {
      $('.indiaSection').hide();
      $('.overseasSection').hide();
    }
  }
</script>
<script>
  $(document).ready(function() {
    <?php if (!empty($getdata['Pincode'])) { ?>
      getRegion('<?= $getdata['Pincode'] ?>');
    <?php } ?>


  });

  function getRegion(pincode) {
    if (pincode.length == 6) {
      // get cities
      $.ajax({
        url: '/admin/app/regions/cities?pincode=' + pincode,
        type: 'GET',
        success: function(data) {
          $('#city').html(data);

          var city = '<?= $getdata['City'] ?>';
          <?php if (!empty($getdata['City'])) { ?>
            $('#city').val('<?= $getdata['City'] ?>');
          <?php } ?>

        }
      });
      // get districts
      $.ajax({
        url: '/admin/app/regions/districts?pincode=' + pincode,
        type: 'GET',
        success: function(data) {
          $('#district').html(data);
          <?php if (!empty($getdata['District'])) { ?>
            $('#district').val('<?= $getdata['District'] ?>');
          <?php } ?>
        }
      });
      // get state
      $.ajax({
        url: '/admin/app/regions/state?pincode=' + pincode,
        type: 'GET',
        success: function(data) {
          $('#state').val(data);
        }
      });
    }
  }


  $(document).ready(function() {
    $('#form-add-center-master').validate({
      rules: {
        syllabus_file: {
          required: status
        },
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

  });
  $("#form-add-stream").on("submit", function(e) {
    if ($('#form-add-stream').validate()) {
      $(':input[type="submit"]').prop('disabled', true);

      var auth_center_type = $("input[name='auth_center_type']:checked").val();
      if (auth_center_type == 0) {
        var pincode = $(".pincode").val();
        if (pincode == "") {
          $(".pincode-error").html('<span style="color:#b91e1e;font-size:12px; font-weight:500">This field is required.</span>');
          $(".pincode").next().show();
          $(".pincode").focus();
          setTimeout(function() {
            $(".pincode-error").html("");
          }, 3000);
          return false;
        } else {
          $(".pincode-error").html("");
        }

        var city = $(".city").val();
        if (city == "") {
          $(".city-error").html('<span style="color:#b91e1e;font-size:12px; font-weight:500">This field is required.</span>');
          $(".city").next().show();
          $(".city").focus();
          setTimeout(function() {
            $(".city-error").html("");
          }, 3000);
          return false;
        } else {
          $(".city-error").html("");
        }


        var district = $(".district").val();
        if (district == "") {
          $(".district-error").html('<span style="color:#b91e1e;font-size:12px; font-weight:500">This field is required.</span>');
          $(".district").next().show();
          $(".district").focus();
          setTimeout(function() {
            $(".district-error").html("");
          }, 3000);
          return false;
        } else {
          $(".district-error").html("");
        }

        var state = $(".state").val();
        if (state == "") {
          $(".state-error").html('<span style="color:#b91e1e;font-size:12px; font-weight:500">This field is required.</span>');
          $(".state").next().show();
          $(".state").focus();
          setTimeout(function() {
            $(".state-error").html("");
          }, 3000);
          return false;
        } else {
          $(".state-error").html("");
        }
      } else {
        var country = $(".country").val();
        if (country == "") {
          $(".country-error").html('<span style="color:#b91e1e;font-size:12px; font-weight:500">This field is required.</span>');
          $(".country").next().show();
          $(".country").focus();
          setTimeout(function() {
            $(".country-error").html("");
          }, 3000);
          return false;
        } else {
          $(".country-error").html("");
        }
      }

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
            $('#categories_card-table').DataTable().ajax.reload(null, false);
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
<script>
  function fileValidation(id) {
    var fi = document.getElementById(id);
    if (fi.files.length > 0) {
      for (var i = 0; i <= fi.files.length - 1; i++) {
        var fsize = fi.files.item(i).size;
        var file = Math.round((fsize / 1024));
        // The size of the file.
        if (file >= 500) {
          $('#' + id).val('');
          alert("File too Big, each file should be less than or equal to 500KB");
        }
      }
    }
  }
</script>

<script>
   $('.ckeditor').each(function() {
      CKEDITOR.replace($(this).attr('id'));
    });
</script>