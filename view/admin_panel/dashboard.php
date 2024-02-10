<?php require "./Farshells/admin_panel/header.php" ?>
<div class="container-fluid position-relative d-flex p-0">
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
    <!-- Spinner End -->

    <?php require "./Farshells/admin_panel/navbar.php" ?>
    <?php require "./Farshells/admin_panel/sidebar.php" ?>








    <!-- Sale & Revenue Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-6 col-xl-3">
                <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-color: darkslategray;">
                    <i class="fa fa-chart-line fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Users</p>
                        <h6 class="mb-0"> <i class="fas fa-user"></i> 22000 </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-color: darkslategray;">
                    <i class="fa fa-chart-bar fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Avaible Books</p>
                        <h6 class="mb-0"> <i class="fab fa-readme"></i> <?= count($all) ?>  </h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-color: darkslategray;">
                    <i class="fa fa-chart-area fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Borrows Books</p>
                        <h6 class="mb-0"> <i class="fab fa-react"></i> 250</h6>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="rounded d-flex align-items-center justify-content-between p-4" style="background-color: darkslategray;">
                    <i class="fa fa-chart-pie fa-3x text-primary"></i>
                    <div class="ms-3">
                        <p class="mb-2">Total Revenue</p>
                        <h6 class="mb-0">$524</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Sale & Revenue End -->


    <!-- Sales Chart Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-xl-6">
                <div class=" text-center rounded p-4" style="background-color: darkslategray;">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Most Traffic</h6>
                        <a href=""> <button class="btn btn-info">Show All</button> </a>
                    </div>
                    <canvas id="worldwide-sales"></canvas>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="text-center rounded p-4" style="background-color: darkslategray;">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Salse & Revenue</h6>
                        <a href=""> <button class="btn btn-info">Show All</button> </a>
                    </div>
                    <canvas id="salse-revenue"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- Sales Chart End -->



    <!-- recent Boorows  -->

    <div class="container my-4">
        <div class="row" style="background-color: darkslategray;">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover table-borderless table-dark align-middle">
                        <thead class="">
                            <tr>
                                <th>Book Title</th>
                                <th>Author</th>
                                <th>Book ISBN</th>
                                <th>Borrows Name</th>
                                <th>Transaction date</th>
                                <th>Due date</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            <?php foreach ($popular as  $row) { ?>
                                <tr class="table-dark">
                                    <td > <?= $row['title'] ?> </td>
                                    <td> <?= $row['author_name'] ?> </td>
                                    <td> <?= $row['ISBN'] ?> </td>
                                    <td> <?= $row[''] ?> </td>
                                    <td>11/01/2024</td>
                                </tr>
                                <?php  }   ?>

                           
                        </tbody>
                        <tfoot>
                            <h6 class="my-4"> Recent Boorows</h6>
                        </tfoot>
                    </table>
                </div>

            </div>
        </div>
    </div>


    <!-- Start Popular Books Table  -->
    <div class="container my-3">
        <div class="row">
            <h5 class="text-light my-3"> <b>Popular Books</b> </h5>
            <div class="col-md-12 d-flex justify-content-between px-5">
           <?php  foreach ($popular as  $value) { ?>
       
            <div class="card mx-2" style="width:18rem;">
                <div class="card-img-top">
                    <img src="/upload/<?= $value['book_image']?>" height="100%" width="100%" alt="">
                </div>
                <!-- card hover section  -->
                <div class="card-hover">
                    <div class="icons">
                        <span>
                            <p class="text-light"> <i class="fas fa-eye"></i> 255 </p>
                        </span>
                        <span>
                            <p class="text-light"> <i class="fas fa-pen"></i> <?= $value['author_name'] ?> </p>
                        </span>
                    </div>
                    
                </div>
            </div>

            <?php   } ?>


            </div>
        </div>
    </div>



    <!-- footer section  -->

    <div class="container mt-5">
        <div class="row " style="background:darkslategray">
            <div class="col-md-12 d-flex justify-content-between">
    
            <div class="sitename">
         <p style="font-variant:small-caps;font-weight: 600;padding:10px;color:#e1e1e1;" > <span class="text-danger">PML Sharafi</span> , All Right Reserved</p>
            </div>

            <div class="sitename">
         <p style="font-variant:small-caps;font-weight: 600;padding:10px;color:#e1e1e1;" > Designed By Fahiz Saleem</p>
            </div>

            </div>
        </div>
    </div>


    <?php require "./Farshells/admin_panel/footer.php"  ?>