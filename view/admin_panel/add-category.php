<?php include "./Farshells/admin_panel/header.php" ?>
<?php include "./Farshells/admin_panel/navbar.php" ?>
<?php include "./Farshells/admin_panel/sidebar.php" ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post">
      <div class="row d-flex justify-content-center">
        <h4 class="text-center mt-3" style="background-color: darkslategray;line-height:50px;"> Add New Book Category</h4>
        <div class="col-md-4">
          <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <input type="text" name="category_name" class="form-control" placeholder="Enter New Category">
            <span> <p class="text-danger opacity-0.8"> <?= $message['cat'] ?? '' ?>  </p> </span>
          </div>
          
       

      <div class="add-button d-flex justify-content-center my-3">
        <button class="btn btn-outline-primary px-5"> Add New Book </button>
      </div>

    </div>
    </form>

  </div>
 </div>  <!--  end main container -->
</div>


<?php include "./Farshells/admin_panel/footer.php" ?>