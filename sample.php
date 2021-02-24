<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-commerce</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" type="text/css" href="css.css"> 
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="#Login" class="active">Login</a>
  <a href="#Register">Register</a>
  <a href="#account">My account</a>
  <a href="#about">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()" class="fa fa-bars"> </a>
  
  </div>
<div class=" jumbotron text-center" style="margin-bottom:50px;">
  <h1 style="color: rgb(112,146,190);">Innovation Squad </h1>
  <p style="color: white;">Beyond Imagination </p> 
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="header-cat">
      <h2>Categories</h2>
    </div>
    <div class="body-header">
      <h5>Man wears</h5>
      <h5>Women wears</h5>
      <h5>Kids wears</h5>
      <h5>Smartphone & Tables</h5>
      <h5>Computer</h5>
      <h5>Fourniture</h5>
    </div>
    <div class="header-cat">
      <h2>Brand</h2>
    </div>
    <div class="body-header">
      <h5>Samsung</h5>
      <h5>Nike</h5>
      <h5>Adidas</h5>
      <h5>Apple</h5>
      <h5>Nokia</h5>
      <h5>Intel</h5>
    </div>
      
      <hr class="hidden-sm hidden-md hidden-lg">
    </div>
    <div class="col-sm-8">

       <h2>Products</h2>
       <hr>
       <div class="container">
         <div class="row">
          <div class="col-sm-4"> 
            <div class="fakeimg" style="text-align: center;">iPhone X</div>
          <div class="inside">
            <h3 style="text-align: center;">300$</h3>
            <button class="b-details">See details</button>
            <button>Add to cart </button>
          </div>
        </div>
          <div class="col-sm-4">  
            <div class="fakeimg"  style="text-align: center;">Samsung S12</div>
            <div class="inside">
              <h3 style="text-align: center;">300$</h3>
              <button class="b-details">See details</button>
              <button>Add to cart </button>
            </div>
          </div>
          <div class="col-sm-4"> 
           <div class="fakeimg" style="text-align: center;">iPhone 12</div>
            <div class="inside">
              <h3 style="text-align: center;">300$</h3>
              <button class="b-details">See details</button>
              <button>Add to cart </button>
            </div>
         </div>
          <div class="col-sm-4 d"> 
            <div class="fakeimg"  style="text-align: center;">iPhone X</div>
              <div class="inside">
                <h3 style="text-align: center;">300$</h3>
                <button class="b-details">See details</button>
                <button>Add to cart </button>
            </div>
          </div>
          <div class="col-sm-4 d">  
            <div class="fakeimg"  style="text-align: center;">Samsung S12</div>
             <div class="inside">
                <h3 style="text-align: center;">300$</h3>
                <button class="b-details">See details</button>
                <button>Add to cart </button>
            </div>
          </div>
          <div class="col-sm-4 d">  
            <div class="fakeimg"  style="text-align: center;">iPhone 12</div>
            <div class="inside">
                <h3 style="text-align: center;">300$</h3>
                <button class="b-details">See details</button>
                <button>Add to cart </button>
            </div>
          </div>
          
      </div>
       </div> 
       
      
      </div>

</div>
</div>
<div class="btn-pages">
    <button class="btn">1</button>
    <button class="btn active" >2</button>
    <button class="btn">3</button>
    <button class="btn">4</button>
</div>
<div>
  <?php include ("includes/footer.php");?>
</div>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>

</body>
</html>
