<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?? "Default title"?></title>

  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="<?= $css ?>">
  <link rel="stylesheet" href="/SchoolManagementSystem/public/assets/css/app.css">
  <script src="<?= $js ?>"></script>

</head>
<body>
  

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <a class="navbar-brand" href="/SchoolManagementSystem/public/">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent" >
    <ul class="navbar-nav mr-auto">

      <li class="nav-item ">
        <a class="nav-link" href="/SchoolManagementSystem/public/">Home </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/SchoolManagementSystem/public/about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/SchoolManagementSystem/public/contact">Contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/SchoolManagementSystem/public/database">Data base Connection</a>
      </li>
  </div>
</nav>