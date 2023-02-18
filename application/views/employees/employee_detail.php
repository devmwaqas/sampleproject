<!doctype html>
<html lang="en">
<head>
  <?php $this->load->view('common/header'); ?>
</head>
<body>
  <div class="container">
    <?php $this->load->view('common/navbar'); ?>
    <p class="fw-bold mt-5">Employee Detail</p>


    <div class="card" style="width: 18rem;">
      <div class="card-header">
        Detail of <?php echo ucwords($employee_detail['first_name']." ".$employee_detail['last_name']); ?>
      </div>
      <ul class="list-group list-group-flush">

        <li class="list-group-item">
          <b>First Name:</b> <?php echo ucwords($employee_detail['first_name']); ?>
        </li>

        <li class="list-group-item">
          <b>Last Name:</b> <?php echo ucwords($employee_detail['last_name']); ?>
        </li>

        <li class="list-group-item">

          <b>Gender:</b> <?php if($employee_detail['gender'] == "M") { echo '<span class="badge rounded-pill text-bg-primary">Male</span>'; } else { echo '<span class="badge rounded-pill text-bg-success">Female</span>';  } ?>
        </li>

        <li class="list-group-item">
          <b>Title:</b> <?php echo $employee_detail['job_title']; ?>
        </li>

        <li class="list-group-item">
          <b>Birth Date:</b> <?php echo date('m/d/Y', strtotime($employee_detail['birth_date'])); ?>
        </li>

        <li class="list-group-item">
          <b>Email:</b> <?php echo $employee_detail['email']; ?>
        </li>

        <li class="list-group-item">
          <b>Address:</b> <?php echo $employee_detail['address']; ?>
        </li>

        <li class="list-group-item">
          <b>City:</b> <?php echo $employee_detail['city']; ?>
        </li>

        <li class="list-group-item">
          <b>State:</b> <?php echo $employee_detail['state']; ?>
        </li>

        <li class="list-group-item">
          <b>Zip:</b> <?php echo $employee_detail['zip']; ?>
        </li>

        <li class="list-group-item">
          <b>Salary:</b> <?php echo $employee_detail['salary']; ?>
        </li>

        <li class="list-group-item">
          <b>Hire Date:</b> <?php echo date('m/d/Y', strtotime($employee_detail['hire_date'])); ?>
        </li>

        <li class="list-group-item">

          <b>Status:</b> <?php if($employee_detail['status'] == 1) { echo '<span class="badge rounded-pill text-bg-primary">Active</span>'; } elseif($employee_detail['status'] == 2) { echo '<span class="badge rounded-pill text-bg-success">Inactive</span>';  } elseif($employee_detail['status'] == 3) { echo '<span class="badge rounded-pill text-bg-danger">Terminated</span>';  } ?>

        </li>

        <li class="list-group-item">

          <a href="<?php echo base_url(); ?>employees/edit/<?php echo $employee_detail['emp_unique']; ?>" type="button" class="btn btn-success btn-sm"> Edit </a>
          <a href="<?php echo base_url(); ?>employees" type="button" class="btn btn-primary btn-sm"> View all employees</a>

        </li>

      </ul>
    </div>


    <?php $this->load->view('common/footer'); ?>
  </div>
</body>
</html>