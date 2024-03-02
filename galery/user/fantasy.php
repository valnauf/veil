<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="fantasy.php">Fantasy</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="view_nice.php">Views</a>
      </li>
    </ul>
    <form class="d-flex">
    <a class="navbar-brand" href="logout.php">Logout</a>
      </form>
  </div>
</nav>
<div class="container-fluid mt-3">
  <h1>Two Unequal Responsive Columns</h1>
  <p>Resize the browser window to see the effect.</p>
  <p>The columns will automatically stack on top of each other when the screen is less than 576px wide.</p>
  <hr>
  <div class="row">
    <div class="col-sm-3 p-6 text-dark">
    <img src="Fantasy-World-With-Dragons.jpg" class="rounded" height="200" width="300">
    <h5 class="card-title">Jane Doe</h5>
    <a href="#user" class="btn btn-white"><img class="rounded-circle" height="30" width="30" src="https://api.duniagames.co.id/api/content/upload/file/14273970761629438505.jpg">     naufal</a>
    </div>
    <div class="col-sm-3 p-6 text-dark">
    <img src="Flying-Fantasy-World.jpg" class="rounded" height="200" width="300">
    <h5 class="card-title">Jane Doe</h5>
    <a href="#user" class="btn btn-white"><img class="rounded-circle" height="30" width="30" src="https://api.duniagames.co.id/api/content/upload/file/14273970761629438505.jpg">     naufal</a>
    </div>
    <div class="col-sm-3 p-6 text-dark">
    <img src="Flying-Fantasy-World.jpg" class="rounded" height="200" width="300">
    <h5 class="card-title">Jane Doe</h5>
    <a href="#user" class="btn btn-white"><img class="rounded-circle" height="30" width="30" src="https://api.duniagames.co.id/api/content/upload/file/14273970761629438505.jpg">     naufal</a>
    </div>
    <div class="col-sm-3 p-6 text-dark">
    <img src="Flying-Fantasy-World.jpg" class="rounded" height="200" width="300">
    <h4 class="card-title">Jane Doe</h4>
    <a href="#user" class="btn btn-white"><img class="rounded-circle" height="30" width="30" src="https://api.duniagames.co.id/api/content/upload/file/14273970761629438505.jpg">     naufal</a>
    </div>
    </div>
  </div>
  </hr>
</div>

</body>
</html>