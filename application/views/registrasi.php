<body class="">

<style>
  body {
    background: linear-gradient(135deg, #5200FF, #FFD600);
    animation: gradientAnimation 10s infinite alternate;
  }

  @keyframes gradientAnimation {
    0% {
      background-position: 0% 50%;
    }
    100% {
      background-position: 100% 50%;
    }
  }

  .btn btn-user btn-block .small {
    color: yellow;
  }

  .card {
    position: relative;
    overflow: hidden;
  }

  .card::before {
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: linear-gradient(135deg, #000 30%, #0074cc);
    z-index: 1;
    }

    .card-body {
        position: relative;
        z-index: 2;
        background: linear-gradient(135deg, #000 30%, #0074cc);
    }
    
</style>

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
              <h1 class="h4 text-yellow mb-4">Sign Up</h1>
              </div>
              <form class="user" method="post" action="<?php echo base_url('registrasi/index') ?>">
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Name" name="nama">
                  <?php echo form_error('nama', '<div class="text-danger small ml-2">', '</div>') ?>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" placeholder="Username" name="username">
                  <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" placeholder="Password" name="password_1">
                    <?php echo form_error('password_1', '<div class="text-danger small ml-2">', '</div>') ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" placeholder="Confirm Password" name="password_2">
                  </div>
                </div>
                <button type="submit" class="btn btn-user btn-block" style="background-color: #FFD600; color: #000000; font-weight: 700">Sign Up</button>
              </form>
              <hr>
              <div class="text-center">
                <h6>Already have an account?
                <a class="medium text-white" href="<?php echo base_url('auth/login') ?>">
                  Log In!
                </a>
                </h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>