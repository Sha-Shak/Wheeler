<?php
$conn = mysqli_connect("localhost", "root", "", "job_portal");
$query = mysqli_query($conn, "select * from admin_login  where admin_email='{$_SESSION['email']}' and admin_type='1'");
if (mysqli_num_rows($query) > 0) {

?>

  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">
                <span data-feather="home"></span>
                Dashboard <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create_company.php">
                <span data-feather="layers"></span>
                company
              </a>
            </li>


            <li class="nav-item">
              <a class="nav-link" href="Job_create.php">
                <span data-feather="bar-chart-2"></span>
                Jobs
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add_create_job.php">
                <span data-feather="bar-chart-2"></span>
                Job Create
              </a>
            </li>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="Customers.php">
                <span data-feather="users"></span>
                Clients
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="drivers.php">
                <span data-feather="users"></span>
                Drivers
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="appliedjob.php">
                <span data-feather="users"></span>
                Applied Jobs
              </a>
            </li>



          </ul>

        </div>
      </nav>



    <?php
  } else {
    ?>
      <div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="Job_create.php">
                    <span data-feather="bar-chart-2"></span>
                    Job Create
                  </a>
                </li>




            </div>
          </nav>


        <?php
      }
        ?>