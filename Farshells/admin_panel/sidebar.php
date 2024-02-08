   <!-- Sidebar Start -->
  <div class="sidebar pe-4 pb-3" style="background-color:darkslategray;">
            <nav class="navbar navbar-dark">
                <a href="/dashboard" class="navbar-brand mx-4 mb-3">
                    <h5 class="text-primary"><i class="fas fa-book-open me-2"></i><b>PML SHARAFI</b></h5>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="/upload/<?= $_SESSION['profile'] ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"> <?= $_SESSION['username'] ?> </h6>
                        <span> <?= ($_SESSION['role'] == 1) ? 'admin' : 'Normal User' ?> </span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Vendor</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">All Admins</a>
                            <a href="typography.html" class="dropdown-item">Add New Admin</a>
                            <a href="element.html" class="dropdown-item">Update Admin</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link"><i class="fas fa-users"></i>Website Users</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-tag me-2"></i>Categories</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="404.html" class="dropdown-item">All Category</a>
                            <a href="signup.html" class="dropdown-item">Add Categotry</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fab fa-readme me-2"></i>Library</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="/dashboard/library" class="dropdown-item">Show Library</a>
                            <a href="/dashboard/addbook" class="dropdown-item">Add New Books</a>
                            <a href="" class="dropdown-item">Top Books</a>
                        </div>
                    </div>
                    <a href="" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Borrow Books</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->