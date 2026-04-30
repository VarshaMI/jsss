<?php
session_start();
include "db.php";
$result=$conn->query("select * from product");
?>


<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
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
      
                
        <div class="container mt-5 d-flex justify-content-center">
    <div class="table-responsive col-md-6">
    
    <table class="table table-bordered table-hover shadow text-center">
      
      <thead class="table-info">
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>Quantity</th>
          <th>Category</th>
        </tr>
      </thead>

      <tbody>
        <?php while($row = $result->fetch_assoc()){ ?>
        <tr>
          <td><?php echo $row["pid"]; ?></td>
          <td><?php echo $row["pname"]; ?></td>
          <td><?php echo $row["pquantity"]; ?></td>
          <td><?php echo $row["category"]; ?></td>
        </tr>
        <?php } ?>
      </tbody>

    </table>

  </div>
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

