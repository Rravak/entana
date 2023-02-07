<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="go.css">
    <title>Details</title>
</head>
<body>

    <!-- recherche ------------------------------------------------- -->

    <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            </button>
            <a class="navbar-brand" href="home.php">Dodo</a>
          </div>
      
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            </ul>
            <form action="searchTraite.php" class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <button class="btn btn-default" type="submit">search</button>
                </div>
            </form>
            <form  action="deconnexion.php" class="navbar-form navbar-right" role="search">
                    <button class="btn btn-default" type="submit">Deconnexion</button>
            </form>
            
          </div>
        </div>
      </nav>
      <!-- Fin recherche-------------------------------------------------------- -->
      <div class="class">
        <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
        <img src="download (12).jpg" alt="web">
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
        <img src="download (12).jpg" alt="web">
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
        <img src="download (12).jpg" alt="web">
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
          <img src="download (12).jpg" alt="web">
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-xs-6 col-md-3">
        <a href="#" class="thumbnail">
        <img src="download (12).jpg" alt="web">
        </a>
      </div>
      </div>
</div>

<!-- --------------------> 
<div class="jumbotron">
  <h2>Hello</h2>
  <p>Lorem, ipsum dolor sit amet consecteturerunt tenetur unde consequatur magni dignissimos.</p>
  <form  action="traitementreservation.php" class="navbar-form navbar-left" role="search">
            <div class="form-group">
            <input type="date" class="form-control" placeholder="Search">
            <input type="date" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">command</button>
  </form>
</div>


</body>