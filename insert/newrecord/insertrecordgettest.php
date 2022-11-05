<!--php script start-->
<!--php script end-->

<!DOCTYPE html>
<html lang="en">

<style>
    nav#top a.navbar-brand {
  color: white; }

nav#top #navbarNavDropdown ul.navbar-nav li.nav-item {
  align-items: center; }
  nav#top #navbarNavDropdown ul.navbar-nav li.nav-item a.nav-link {
    color: white; }

center {
  border: 1px solid #000;
  background-color: #ff00ff;
  font-size: 30px; }
    

</style>
    <!--compulsorypartstart-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../static/css/bootstrap-5.2.1-dist/css/bootstrap.min.css"></link>
    <script src="../../static/css/bootstrap-5.2.1-dist/js/bootstrap.min.js"></script>
    <script src="../../static/js/jquery-3.6.1.min.js"></script>
    <script src="../../static/js/navbartoggle.js"></script>
    <script src="../../static/css/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../static/js/ajaxxhr.js"></script>
    <title>Public Market - Insert Record Page</title>
</head>

<!--compulsorypartend-->
<body>
    <!--navbarstart-->
    <nav class="navbar navbar-expand-lg bg-primary" id="top"><a class="navbar-brand"> Our Public Market</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon" style="#00FF00"></span></button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
        <li class="nav-item active"><a class="nav-link" href="../../index.html"> Index</a></li>
          <li class="nav-item"><a class="nav-link" href="../../search.html"> Search </a></li>
          <li class="nav-item"><a class="nav-link" href=""> Your Record History</a></li>
          <li class="nav-item"><a href="../../webmap.html" class="nav-link">Web Map</a></li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Insert
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="insertrecord.html">
                New Record</a></li>
                <li><a href="#" class="dropdown-item">
                  New Tenancy</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <!--navbarend-->


    <!--Formstart-->
    <div class="mt-4 p-5 bg-info text-black rounded">
      <h1>Insert New Record</h1></div>
    <form action="insertrecordgettestresult.php" method="get" enctype="multipart/form-data">
      <div class="form-group mb-3">
        <label for="district" class="form-label"><h1>District</h1></label>
        <select name="district" id="" class="form-select custom-select" required>
            <option selected="selected">Choose the following option where the market district is</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
          </select>
          
          <label for="region" class="form-label"><h1>Region</h1></label>
            <select name="region" id="" class="form-select custom-select" required>
              <option selected="selected">Choose the following option where the market location is</option>
              <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            </select>
            
          <label for="marketname" class="form-label bg-info"><h1>Market Name</h1></label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group">
              <input name="marketname" id="marketname" required class="form-control form-control-lg" aria-label="large">
  
            </div>
          </div>
            <br>
            <label for="address" class="form-label bg-info"><h1>Address</h1></label><br>
            <div class="input-group mb-3 form-group">
              <div class="input-group">
                <input name="address" id="address" required class="form-control form-control-lg" aria-label="large" maxlength="120" placeholder="For Example: xxxxxxxxx Public Market">
          
              </div>
            </div>
              <br>
          <label for="tel1" class="form-label bg-info"><h1>Telephone 1</h1></label><br>
          <div class="input-group mb-3 form-group">
            <div class="input-group-prepend"><span class="input-group-text">+852</span>
            </div>
            <input type="tel" name="tel1" pattern="[0-9]{4}-[0-9]{4}" required="required" class="form-control" placeholder="For Example: 0000-0000"><br>
          </div>
          
          <label for="tel2" class="form-label"><h1>Telephone 2</h1></label>
            <br>
            <div class="input-group mb-3 form-group">
              <div class="input-group-prepend"><span class="input-group-text">+852</span>
              </div>
              <input type="tel" name="tel2" id="" pattern="[0-9]{4}-[0-9]{4}" required="required" class="form-control" placeholder="For Example: 0000-0000">
            </div>

            <label for="Map" class="form-label">
              <h1>Map Location</h1>
            </label><br>
      </div>
      <input type="reset" value="Reset" name="Reset" class="btn btn-danger">
      <input type="submit" value="Submit" name="Submit" class="btn btn-success">
    </form>
    <!--Formend-->
    <!--footerstart-->
    <footer class="bg-info">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="row">
              <h1>Web Description</h1>
            </div>
            <div class="row">
              <h6>
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime, ad, sequi illum debitis, pariatur ducimus officiis assumenda aut delectus facilis incidunt dolorum. Pariatur quis, id error rerum cupiditate vitae officia.
                </h6>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row"><h1>Web Map</h1></div>
            <div class="row">
              <h3><a href="../../index.html">Index</a></h3>
            </div>
            <div class="row">
              <h3><a href="../../search.php">Search</a></h3>
            </div>
            <div class="row">
              <h3><a href="insert.html">Insert New Record</a></h3>
            </div>
            <div class="row">
              <h3>Refernece</h3>
            </div>
          </div>
          <div class="col-lg-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam sit accusantium, amet esse numquam, quis ea quisquam labore necessitatibus soluta autem tenetur, consectetur qui nostrum omnis praesentium vel itaque ratione!</div>
        </div>
      </div>
      </div></footer>
    <!--footerend-->

    <!--cookiesetting-->
    <!---->
</body>
</html>