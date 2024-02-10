<?php include "./Farshells/admin_panel/header.php" ?>
<?php include "./Farshells/admin_panel/navbar.php" ?>
<?php include "./Farshells/admin_panel/sidebar.php" ?>


<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action=" <?php $_SERVER['PHP_SELF']?> " method="post" enctype="multipart/form-data">
      <div class="row d-flex justify-content-center">
        <h4 class="text-center mt-3" style="background-color: darkslategray;line-height:50px;"> Add New Book In Library</h4>
        <div class="col-md-4">
          <div class="mb-3">
            <label for="" class="form-label">Book Title</label>
            <input type="text" name="book_title" class="form-control" placeholder="Enter Your Name">
            <span> <p class="text-danger opacity-0.8"> <?= $message['title'] ?? '' ?> </p> </span>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">ISBN</label>
            <input type="number" name="isbn" placeholder="******" class="form-control">
            <span> <p class="text-danger opacity-0.8"> <?= $message['isbn'] ?? '' ?> </p> </span>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Category</label>
            <select class="form-select" name="cat" id="">
              <option disabled selected >Select Category</option>
              <?php foreach ($cat as  $value) { ?>
                <option value="<?= $value['id'] ?>"> <?= $value['category_name'] ?> </option>
              <?php     }  ?>
            </select>
            <span> <p class="text-danger opacity-0.8"> <?= $message['cat'] ?? '' ?> </p> </span>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Author</label>
            <select class="form-select" name="author" id="">
              <option selected disabled >Author Name</option>
              <?php  foreach ($author as $aut) { ?>
                <option value="<?= $aut['id'] ?>"> <?= $aut['author_name'] ?> </option>
             <?php } ?>
             <span> <p class="text-danger opacity-0.8"> <?= $message['author'] ?? '' ?> </p> </span>
            </select>
          </div>
        </div>
     
      <div class="col-md-4">
        <div class="mb-3">
          <label for="" class="form-label">Avaible Copy</label>
          <input type="text" name="copy" class="form-control">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Language</label>
          <select class="form-select" name="lang" id="">
            <option disabled selected>Select Book Language</option>
            <option value="English">English</option>
            <option value="Urdu">Urdu</option>
            <option value="Balochi">Balochi</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label" for="">book Image</label>
          <input class="form-control" type="file" name="book_img" id="">
        </div>

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