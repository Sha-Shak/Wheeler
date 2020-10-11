<?php
include('includes/header.php');
include('includes/sidebar.php');
?>


<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h4>Dashboard</h2>

    </div>
    <div class="container">
        <h1> Hello!
            <?php
            echo $_SESSION['email'];
            ?>
        </h1>
        <h3 text-align="center"> Welcome to Wheeler Dashboard</h3>



    </div>


</main>

</body>

</html>