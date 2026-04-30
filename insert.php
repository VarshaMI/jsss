<?php
include 'db.php';

    if($_SERVER["REQUEST_METHOD"]==="POST"){
         $pid=$_POST["pid"];
      $pname=$_POST["pname"];
      $pquantity=$_POST["pquantity"];
      $category=$_POST["category"];

      $sql=$conn->prepare("insert into product values(?,?,?,?)");
      $sql->bind_param('isis',$pid,$pname,$pquantity,$category);

      if($sql->execute()){
        header("Location:Home.php");
        echo "<script>alert('Product Inserted')</script>";
      }
  }
?>



<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
            >
                <div class="container">
                    <a class="navbar-brand" href="home.php"> Home </a>
                   
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                           
                            <li class="nav-item">
                                <a class="nav-link" href="insert.php">Insert</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="update.php">Update</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="delete.php">Delete</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="show.php">Show</a>
                            </li>
                                </div>
            
                        </ul>
                        <form class="d-flex my-2 my-lg-0">
                            
                            <a
                                class="btn btn-outline-success my-2 my-sm-0"
                                type="submit"
                                href="logout.php"
                            >
                                Logout
                            </a>
                        </form>
                    </div>
                </div>
            </nav>
        </header>
        <main>
       


        
      <div
        class="container mt-5 col-4 border shadow p-4 bg-light"
      >
        <h3>Insert Products</h3>
        <form action="" method="post">

            <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control"
              name="pid"
              id="formId1"
              placeholder=""
            />
            <label for="formId1">ID</label>
          </div>

          <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control"
              name="pname"
              id="formId1"
              placeholder=""
            />
            <label for="formId1">Name</label>
          </div>

          <div class="form-floating mb-3">
            <input
              type="number"
              class="form-control"
              name="pquantity"
              id="formId1"
              placeholder=""
            />
            <label for="formId1">Quantity</label>
          </div>
          <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control"
              name="category"
              id="formId1"
              placeholder=""
            />
            <label for="formId1">Category</label>
          </div>
            <button
              type="submit"
              class="btn btn-primary"
            >
              Submit
            </button>
        </form>
        </div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>