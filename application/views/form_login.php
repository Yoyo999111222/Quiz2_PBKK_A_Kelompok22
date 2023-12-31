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

  .btn btn-user btn-block {
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

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-6 mx-auto">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-warning mb-4">Log In</h1>
                  </div>
                  <?php echo $this->session->flashdata('pesan') ?>
                  <form method="post" action="<?php echo base_url('auth/login') ?>" class="user">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" placeholder="Username" name="username">
                      <?php echo form_error('username', '<div class="text-danger small ml-2">', '</div>') ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" placeholder="Password" name="password">
                      <?php echo form_error('password', '<div class="text-danger small ml-2">', '</div>') ?>
                    </div>
                    <button type="submit" class="h2 btn btn-user btn-block" style="background-color: #FFD600; color: #000000; font-weight: 700">Log In</button>
                  </form>
                  <hr>
                  <div class="text-center text-warning">
                    <h6>Don't have an account yet? 
                      <a class="medium text-white" href="<?php echo base_url('registrasi/index') ?>">
                      Sign Up!
                      </a>
                    </h6>
                  </div>
                  <div class="text-center">
                    <a class="medium text-white" href="<?php echo base_url('') ?>">
                      Back to Home
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>