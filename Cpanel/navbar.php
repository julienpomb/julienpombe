<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bootstrap-4.6.0-dist/css/bootstrap.css">
  <script src="../js/script.js"></script>
  <title>Document</title>
  <link href="css/navbar-top-fixed.css" rel="stylesheet">
  <link href="starter-template.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.html">BAMARA Logistique</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="../apropos.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Tout savoir sur nous
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="services.html"> <i class="fa fa-building-o"></i><span>services</span></a>
              <a class="dropdown-item" href="modal.html"><i class="fa fa-users"></i><span>Gallery</span></a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="apropos.html"><span>Contacts</span></a>
          </li>
          <li class="nav-item dropdown">
      </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
    </form>
    <div class="top-menu">
      <ul class="nav pull-right top-menu">
          <li class="nav-item"><a class="logout nav-link" href="admin/deconnexion.php">Logout</a></li>
          <li class="nav-item"><a class="logout nav-link" href="cpanel/login.php">login</a></li>
      </ul>
    </div>
  </nav>
</body>

</html>