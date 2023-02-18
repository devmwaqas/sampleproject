<?php $class = $this->router->fetch_class(); ?>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Sample Project</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">

      <?php if($this->session->userdata('admin_logged_in')) { ?>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?php if($class == "home" ) { ?> active <?php } ?>" aria-current="page" href="<?php echo base_url(); ?>home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?php if($class == "employees" ) { ?> active <?php } ?>" href="<?php echo base_url(); ?>employees">Employees</a>
          </li>
        </ul>


        <a href="<?php echo base_url(); ?>logout" class="btn btn-outline-danger">Logout (<?php echo $this->session->userdata('admin_username'); ?>)</a>

      <?php } else { ?>
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        </ul>
        <a href="<?php echo base_url(); ?>login" class="btn btn-outline-success">Login</a>
      <?php } ?>
    </div>
  </div>
</nav>