<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Contact Us</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
     $name = $_POST['name'];
     $email = $_POST['email'];
     $desc = $_POST['desc'];
     

// connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";


$conn = mysqli_connect($servername, $username,$password,$database);

if(!$conn){
  die("sorry connetion not found" . mysqli_connect_error());
  
}else{
   // echo "successfully connection to database";

// insert data
$sql = "INSERT INTO contactuus (name, email, concern) 
VALUES ('$name', '$email', '$desc')";

// Execute the query
if (mysqli_query($conn, $sql)) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>Submitted Successfully</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
} else {
   // echo "Error inserting into database: " . mysqli_error($conn);
   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Submission Failed !! Sorry we are facing some problem</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

}
// Close the connection
mysqli_close($conn);

}

// submit to database


?>



<div class="container mt-5">
    <h2>Contact Us fr Concern</h2>
<form action="./6-form.php" method="post">
<div class="my-3 ">
    <label for="name" class="form-label">Name</label>
    <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
    
  </div>
  <div class="my-3 ">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="desc" class="form-label">Description</label>
    <textarea class="form-control" id="desc" cols="30" rows="10" name="desc"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
