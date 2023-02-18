<!doctype html>
<html lang="en">
<head>
  <?php $this->load->view('common/header'); ?>
</head>
<body>
  <div class="container">
    <?php $this->load->view('common/navbar'); ?>
    <p class="fw-bold mt-5">Edit Employee Details</p>
    <form id="update_employee" method="post">

      <div class="col-md-5">
        <div class="alert alert-success" id="success_alert" role="alert" style="display: none;">

        </div>
        <div class="alert alert-danger" id="danger_alert" role="alert" style="display: none;">

        </div>
      </div>

      <input type="hidden" name="id" value="<?php echo $employee_detail['emp_unique']; ?>">
      <div class="card" style="width: 30rem;">
        <div class="card-header">
          Detail of <?php echo ucwords($employee_detail['first_name']." ".$employee_detail['last_name']); ?>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <label for="first_name" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" placeholder="First name" value="<?php echo ucwords($employee_detail['first_name']); ?>" required="" />
          </li>
          <li class="list-group-item">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" placeholder="Last name" value="<?php echo ucwords($employee_detail['last_name']); ?>" required="" />
          </li>
          <li class="list-group-item">
            <b>Gender:</b>
            <label for="gender" class="form-label">Gender</label>
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="gender" <?php if($employee_detail['gender'] == "M") { ?> checked="" <?php } ?> type="radio" name="inlineRadioOptions" id="inlineRadio1" value="M">
              <label class="form-check-label" for="inlineRadio1">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" name="gender" <?php if($employee_detail['gender'] == "F") { ?> checked="" <?php } ?> type="radio" name="inlineRadioOptions" id="inlineRadio2" value="F">
              <label class="form-check-label" for="inlineRadio2">Female</label>
            </div>

          </li>
          <li class="list-group-item">

            <label for="job_title" class="form-label">Title</label>
            <select class="form-select" name="job_title" aria-label="Default select example">
              <option selected>Select</option>
              <?php foreach ($list_of_titles as $emp_title) { ?>
                <option value="<?php echo $emp_title['id']; ?>" <?php if($employee_detail['title_id'] == $emp_title['id']) { ?> selected="" <?php } ?>>
                  <?php echo $emp_title['title']; ?>
                </option>
              <?php } ?>
            </select>

          </li>

          <li class="list-group-item">

            <label for="birth_date" class="form-label">Birth Date</label>
            <input type="date" name="birth_date" class="form-control" placeholder="Birth Date" value="<?php echo $employee_detail['birth_date']; ?>" required="" />

          </li>

          <li class="list-group-item">

            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" disabled="" readonly="" placeholder="Email" value="<?php echo $employee_detail['email']; ?>" />

          </li>

          <li class="list-group-item">

            <label for="address" class="form-label">Address</label>
            <input type="address" name="address" class="form-control" placeholder="Address" value="<?php echo $employee_detail['address']; ?>" required="" />

          </li>

          <li class="list-group-item">

            <label for="city" class="form-label">City</label>
            <input type="city" name="city" class="form-control" placeholder="City" value="<?php echo $employee_detail['city']; ?>" required="" />
          </li>

          <li class="list-group-item">

            <label for="state" class="form-label">State</label>
            <input type="state" name="state" class="form-control" placeholder="State" value="<?php echo $employee_detail['state']; ?>" required="" />
          </li>

          <li class="list-group-item">

            <label for="zip" class="form-label">Zip Code</label>
            <input type="zip" name="zip" class="form-control numberonly" placeholder="Zip" value="<?php echo $employee_detail['zip']; ?>" required="" />
          </li>

          <li class="list-group-item">

            <label for="salary" class="form-label">Salary</label>
            <input type="salary" name="salary" class="form-control numberonly" placeholder="Salary" value="<?php echo $employee_detail['salary']; ?>" required="" />
          </li>

          <li class="list-group-item">

            <label for="hire_date" class="form-label">Hire Date</label>
            <input type="date" name="hire_date" class="form-control" placeholder="Hire Date" value="<?php echo $employee_detail['hire_date']; ?>" required="" />
          </li>

          <li class="list-group-item">

            <label for="term_date" class="form-label">Termination Date</label>
            <input type="date" name="term_date" class="form-control" placeholder="Termination Date" value="<?php echo $employee_detail['term_date']; ?>" required="" />
          </li>


          <li class="list-group-item">
            <button type="button" id="update_employee_btn" class="btn btn-info btn-sm" > Update </button>
            <a href="<?php echo base_url(); ?>employees" type="button" class="btn btn-primary btn-sm"> Cancel</a>
          </li>

        </ul>
      </div>
    </form>
    <?php $this->load->view('common/footer'); ?>

    <script>

      $('.numberonly').keypress(function (e) {
        var charCode = (e.which) ? e.which : event.keyCode
        if (String.fromCharCode(charCode).match(/[^0-9]/g))
          return false;
      });

      $('#update_employee_btn').click(function(){

        $('#update_employee_btn').attr('disabled', 'disabled').text('Please wait...');

        var value =  $("#update_employee").serialize();

        $.ajax({
          url:'<?php echo base_url(); ?>employees/update_employee',
          type:'post',
          data:value,
          dataType:'json',
          success:function(status){

            $('#update_employee_btn').removeAttr('disabled').text('Update');
            if(status.msg=='success') {

              $("#success_alert").html(status.response).show();

              $('html, body').animate({
                scrollTop: $("#success_alert").offset().top
              }, 2000);

              setTimeout(function() { $("#success_alert").hide(); }, 3000);

            } else if(status.msg == 'error'){

              $("#danger_alert").html(status.response).show();

              $('html, body').animate({
                scrollTop: $("#danger_alert").offset().top
              }, 1000);

              setTimeout(function() { $("#danger_alert").hide(); }, 6000);

            }

          }

        });

      });

    </script>
  </div>
</body>
</html>