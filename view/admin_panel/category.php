<?php require './Farshells/admin_panel/header.php';   ?>
<?php require './Farshells/admin_panel/navbar.php';  ?>
<?php require './Farshells/admin_panel/sidebar.php';   ?>

<div class="container">
    <div class="row">
        <div class="col-md-12 my-5 d-flex justify-content-between">
            <h2 class="text-light ms-2" style="background-color: darkslategray;"> All Books Category </h2>
           <a href="/dashboard/add/category"> <button class="btn  btn-sm" style="background: darkslategray;border: none;color: white;"> Add Category </button></a>
        </div>

        <!-- start table -->
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered table-hover table-striped table-dark">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Total Post</th>
                            <th> Edit </th>
                            <th> Delete </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($category as  $cat) { ?>
                            <tr>
                                <td> <?= $cat['category_name'] ?> </td>
                                <td> <?= $cat['post'] ?> </td>
                                <td class="text-center"><button class="btn btn-primary "> <i class="fas fa-pen-to-square"></i> </button> </td>
                                <td class="text-center"> <a href="/dashboard/delete?id=<?= $cat['id'] ?>"> <button class="btn btn-danger "> <i class="fas fa-trash-can"></i> </button> </a>  </td>
                            </tr>
                        <?php   }  ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



<?php require './Farshells/admin_panel/footer.php'; ?>