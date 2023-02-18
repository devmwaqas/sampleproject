<!doctype html>
<html lang="en">
<head>
  <?php $this->load->view('common/header'); ?>
</head>
<body>
  <div class="container">
    <?php $this->load->view('common/navbar'); ?>
    <div class="row">
      <div class="d-flex justify-content-center mt-5" style="width: 100%;">
        <div style="max-width: 500px;">
          <h3 class="admin_login_st">Administrator Login</h3>
          <?php if($this->session->flashdata('login_error')) { ?>
            <div class="alert alert-danger">
              <?php echo $this->session->flashdata('login_error'); ?>
            </div>
          <?php } ?>
          <form id="login_form" method="post" action="<?php echo base_url(); ?>login/login_verify" class="row g-3">
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Email</label>
              <input type="email" name="email" value="<?php echo $this->session->flashdata('email');?>" class="form-control" id="inputEmail4" required="">
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="inputPassword4" required="">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>

        </div>
      </div>
    </div>

    <?php $this->load->view('common/footer'); ?>

  </div>
</body>
</html>