<!doctype html>
<html lang="en">
<head>
  <?php $this->load->view('common/header'); ?>
</head>
<body>
  <div class="container">
    <?php $this->load->view('common/navbar'); ?>
    <p class="fw-bold mt-5">List of Employees</p>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Employee</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php if(empty($employees)) { ?>
          <tr>
            <th scope="row" colspan="3">No record found.</th>
          </tr>
        <?php } else { ?>
          <?php $i=1; foreach ($employees as $employee) { ?>
            <tr>
              <th scope="row"> <?php echo $i; $i++; ?> </th>
              <td><?php echo $employee['first_name']." ".$employee['last_name']." - ".$employee['job_title']; ?></td>
              <td>
                <a href="<?php echo base_url(); ?>employees/detail/<?php echo $employee['emp_unique']; ?>" type="button" class="btn btn-primary btn-sm"> View </a>
                <a href="<?php echo base_url(); ?>employees/edit/<?php echo $employee['emp_unique']; ?>" type="button" class="btn btn-success btn-sm"> Edit </a>
              </td>
            </tr>
          <?php } ?>
        <?php } ?>
      </tbody>
    </table>

    <a href="<?php echo base_url(); ?>employees" type="button" class="btn btn-primary btn-sm"> View all employees</a>

    <?php $this->load->view('common/footer'); ?>
  </div>
</body>
</html>