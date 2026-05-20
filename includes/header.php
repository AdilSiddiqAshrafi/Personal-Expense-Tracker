<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">

  <div class="container-fluid">

    <!-- Brand -->
    <a class="navbar-brand fw-bold" href="#">
     <img src="./img/2.png" class="img-track" alt=""> Fintrack
    </a>

    <!-- Mobile Toggle -->

    <button class="btn btn-primary d-md-none d-block" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
        <img src="img/ham.svg">
    </button>

    <!-- Right Side -->
    <div class="d-flex align-items-center gap-3">


  </form>
  </div>
      <!-- User Dropdown -->
      <div class="dropdown">
        <button class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown">
           User
        </button>

        <ul class="dropdown-menu dropdown-menu-end">
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li><a class="dropdown-item" href="">Settings</a></li>
          <li><hr class="dropdown-divider"></li>

            <?php
          if(isset($_SESSION['user']['username']))
          {?>
          <li><a class="dropdown-item text-danger" href="/PERSONAL%20EXPENSE%20TRACKER/Server/requests.php?logout=true">Logout (<?php echo ucfirst($_SESSION['user']['username'])?>)</a></li>
          <?php } ?>

          <?php
          if(!isset($_SESSION['user']['username']))
          {?>
          <li><a class="dropdown-item text-danger" href="?login=true">Login</a></li>
          <li><a class="dropdown-item text-danger" href="?signup=true">Signup</a></li>
          <?php } ?>
        </ul>
      </div>

    </div>

  </div>
</nav>
