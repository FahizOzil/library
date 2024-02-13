<?php include "./Farshells/admin_panel/header.php" ?>
<?php include "./Farshells/admin_panel/navbar.php" ?>
<?php include "./Farshells/admin_panel/sidebar.php" ?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="text-light my-5"> Latest books </h2>
            <div class="row px-5">
                <div class="col-md-12 d-flex justify-content-center py-4" style="background-color:darkslategray;">
                    <?php foreach ($latest as  $book) { ?>
                        <div class="card text-start mt-3 ms-5" style="max-width: 13rem;box-shadow:0 0 20px">
                            <img class="card-img-top" src="/upload/<?= $book['book_image'] ?>" height="300px" alt="Title" />
                        </div>

                    <?php   }  ?>

                </div>
            </div>


        </div>
    </div>
</div>




<div class="container">
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between mt-5 mb-3">

            <h2 class="text-light " > Avaible Books </h2>

            <div class="d-flex">
                <input type="search" class="form-control" name="search" placeholder="Search Books" id="searchInp">
                <button class="btn btn-outline-light" id="searchBtn">Search</button>
            </div>
        </div>
        <div class="col-md-12">

            <table class="table table-bordered table-scriped table-dark table-hover">
                <thead>
                    <tr>
                      
                        <th>Title</th>
                        <th>ISBN</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>publish date</th>
                        <th>Language</th>
                        <th>book Cover</th>
                        <th>book Copy</th>
                    </tr>
                <tbody>
                    <?php foreach ($all_book as $row) { ?>
                        <tr>
                            
                            
              
                                <td> <?= $row['title'] ?> </td>
                                <td> <?= $row['ISBN'] ?> </td>
                                <td> <?= $row['author_name'] ?> </td>
                                <td> <?= $row['category_name'] ?> </td>
                                <td> <?= $row['publish_date'] ?> </td>
                                <td> <?= $row['language'] ?> </td>
                                <td> <img src="/upload/<?= $row['book_image'] ?>" alt="" height="100px" width="100px"> </td>
                                <td> <?= $row['copy'] ?> </td>
                                
                            </tr>
                           
                    <?php   } ?>
                </tbody>
                </thead>
            </table>


        </div>
    </div>
</div>

<nav class="d-flex justify-content-center" aria-label="Page navigation">
    <ul class="pagination" style="background-color: darkslategray;">

    <?php   

  
 $total_page = ceil($total_records / $limit);

if ($page > 1) {
 echo  ' <li class="page-item">
 <a class="page-link" href="?page='.($page- 1).'" aria-label="Previous">
     <span aria-hidden="true">&laquo;</span>
 </a>
</li>';
}
  
 for ($i=1; $i <= $total_page ; $i++) { 
          echo ' <li class="page-item " aria-current="page">
          <a class="page-link" href="?page='.$i.'"> '.$i.'  </a>
      </li>';
 }

 if ($page < $total_page) {
    echo ' <li class="page-item">
    <a class="page-link" href="?page='.($page + 1).'" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
    </a>
</li>';
 }

?> 
       
       
    </ul>
</nav>




<?php require "./Farshells/admin_panel/footer.php" ?>