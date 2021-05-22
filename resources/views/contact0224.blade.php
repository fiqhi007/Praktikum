<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
</style>
<body>


<div class="navbar">
  <a class="active" href="{{url('home0224')}}"></i> Home</a> 
  <a href="{{url('artikel0224')}}"></i> Artikel</a> 
  <a href="{{url('contact0224')}}"></i> Contact Us</a> 
  
</div>
<h2>About me</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="http://localhost:8000/img/foto.jpg" style="width:10%">
      <div class="container">
        <p>Kontak : 081252587679</p>
        <p>Email : mfiqhi40@gmail.com</p>
        <p>Facebook : Muhammad Fiqhi</p>
      </div>
    </div>
  </div>
</body>
</html> 
