<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Harga</title>
  <style>
    /* Optional styling for better readability */
    body {
      font-family: sans-serif;
      margin: 20px;
    }
    .container {
      display: flex;
      flex-wrap: wrap;
    }
    
    body {
	font-family: Gotham, "Helvetica Neue", Helvetica, Arial, "sans-serif";
}
    .item {
      margin: 10px;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 5px;
      text-align: center;
      width: 300px;
      box-shadow: 1px 1px 3px 3px black;
    }
    .item img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      margin-bottom: 10px;
    }
  
  div li {
	display: inline;
	list-style-type: none;
	margin-right: 20px;
	
	}
div li a1 {
	font-size: 30px;
	color: rgb(3, 0, 10);
	font-weight: 600;
}
div li a{
	font-size: 18px;
	font-weight: 400;
	text-decoration: none;
	color: rgb(3, 0, 10);
  
	margin-right: 20px;
	margin-top: 10px;
}

div li a3{
	font-size: 18px;
	font-weight: 400;
	text-decoration: none;
	color: rgb(3, 0, 10);
	margin-right: 20px;
	margin-top: 10px;
}

div li a4{
	font-size: 18px;
	font-weight: 600;
	text-decoration: none;
	color: rgb(3, 0, 10);
	margin-right: 20px;
	margin-top: 10px;
}

div li a5{
	font-size: 18px;
	font-weight: 400;
	text-decoration: none;
	color: rgb(3, 0, 10);
	margin-right: 20px;
	margin-top: 10px;
}

div li a:hover {
	font-weight: bold;
}

div li a3:hover {
	font-weight: bold;
}

div li a4:hover {
	font-weight: bold;
}

div li a5:hover {
	font-weight: bold;
}
div li {
	display: inline;
	list-style-type: none;
	margin-right: 20px;
}
div li a1 {
	font-size: 30px;
	color: rgb(3, 0, 10);
	font-weight: 600;
}
div li a:hover {
	font-weight: bold;
}

div li a3:hover {
	font-weight: bold;
}

div li a4:hover {
	font-weight: bold;
}

div li a5:hover {
	font-weight: bold;
}
nav li {
	display: inline;
	list-style-type: none;
	margin-right: 20px;
	
	}

nav {
	background-color: rgb(255, 255, 255);
	padding: 5px;
	position: relative;
	top: 0;
	border-radius: 10px;
}
nav li a1 {
	display: flex;
	font-size: 48px;
	color: rgb(3, 0, 10);
	font-weight: 650;
	position: absolute;
	width: 403px;
	height: 71.2px;
  top: 5px; /* Atur jarak dari bagian atas */
  left: 20px; /* Atur jarak dari bagian kiri */
}
nav li a{
	font-size: 18px;
	font-weight: 400;
	text-decoration: none;
	color: rgb(3, 0, 10);
	float: right;
	margin-right: 20px;
	margin-top: 10px;
}

nav li a3{
	font-size: 18px;
	font-weight: 400;
	text-decoration: none;
	color: rgb(3, 0, 10);
	float: right;
	margin-right: 20px;
	margin-top: 10px;
}

nav li a4{
	font-size: 18px;
	font-weight: 600;
	text-decoration: none;
	color: rgb(3, 0, 10);
	float: right;
	margin-right: 20px;
	margin-top: 10px;
}

nav li a5{
	font-size: 18px;
	font-weight: 400;
	text-decoration: none;
	color: rgb(3, 0, 10);
	float: right;
	margin-right: 20px;
	margin-top: 10px;
}

nav li a:hover {
	font-weight: bold;
}

nav li a3:hover {
	font-weight: bold;
}

nav li a4:hover {
	font-weight: bold;
}

nav li a5:hover {
	font-weight: bold;
}

.folio {
	color: #6B230D;
}
/* Gaya tambahan untuk setiap kelas tautan navigasi */

/* Gaya untuk tautan HOME */
.home-link {
  font-size: 18px;
  font-weight: 400;
  text-decoration: none;
  color: rgb(3, 0, 10);
  margin-right: 20px;
  margin-top: 10px;
  position: absolute;
  top: 15px;
  left: 1161px;
  display: inline-block;
  width: 48.4px;
  height: 11.6px;
}

/* Gaya untuk tautan ABOUT */
.about-link {
  font-size: 18px;
  font-weight: 400;
  text-decoration: none;
  color: rgb(3, 0, 10);
  margin-right: 20px;
  margin-top: 10px;
  position: absolute;
  top: 15px;
  left: 1246px;
  display: inline-block;
  width: 55px;
  height: 15.5px;
}

/* Gaya untuk tautan LOGIN */
.login-link {
  font-size: 18px;
  font-weight: 400;
  text-decoration: none;
  color: rgb(3, 0, 10);
  margin-right: 20px;
  margin-top: 10px;
  position: absolute;
  top: 15px;
  left: 1072px;
}

/* Gaya untuk tautan MEMBERSHIP */
.membership-link {
  font-size: 18px;
  font-weight: 400;
  text-decoration: none;
  color: rgb(3, 0, 10);
  margin-right: 20px;
  margin-top: 10px;
  position: absolute;
  top: 15px;
  left: 931px;
  display: inline-block;
  width: 101px;
  height: 15px;
}

/* Menambahkan kelas untuk tautan navigasi */
.home-link, .about-link, .login-link, .membership-link {
	font-size: 18px;
	font-weight: 400;
	text-decoration: none;
	color: rgb(3, 0, 10);
	margin-right: 20px;
	margin-top: 10px;
	
}
hr {
  margin: 0;
  border: none;
  border-top: 1px solid rgba(0, 0, 0, 0.25); /* Warna dan ketebalan garis dapat disesuaikan */
  position: absolute;
  width: 100%;
  top: 101px; /* Atur tinggi sesuai dengan posisi tautan navigasi */
  left: 0;
}
h1 {
	position: relative;
	top: 10px;
	left: auto;
}
  </style>
</head>
<header>
  				
  <nav>
		<ul>
			<li><a1><span>Porto</span><span class="folio">folio.</span>
			</a1></li>
			<li><a class="about-link dipilih" href="../portofolio(35)/about-us.php">ABOUT</a></li>
			<li><a class="home-link" href="../payment/index.php">HOME</a></li>
			<li><a class="login-link" href="#">LOGIN</a></li>
			<li><a class="membership-link" href="../portofolio(13)/desktop-1.php">MEMBERSHIP</a></li>
		</ul>
		</nav>
    <hr color="gray">
</header>
<body>
  <h1>Daftar Harga</h1>

  <div class="container">
    <div class="item">
      <img src="image/25fca9c59778d6d1a045177d7f99613b.jpg" alt="Product 1">
      <li><a href="../../jantung/portofolio(24)/index.php">PRODUCT 1</a></li>
      <p>Rp. 100.000</p>
    </div>

    <div class="item">
      <img src="image/81ddbe1b5bb39948a2c00bf4805460e8.jpg" alt="Product 2">
      <li><a href="../../jantung/portofolio(25)/index.php">PRODUCT 2</a></li>
      <p>Rp. 200.000</p>
    </div>

    <div class="item">
        <img src="image/17647a4a98d1175b27144d7fa889c032.jpg" alt="Product 3">
        <li><a href="../../jantung/portofolio(26)/index.php">PRODUCT 3</a></li>
        <p>Rp. 300.000</p>
      </div>

      
      <div class="item">
        <img src="image/img2.jpg" alt="Product 4">
        <li><a href="../../jantung/portofolio(27)/index.php">PRODUCT 4</a></li>
        <p>Rp. 400.000</p>
      </div>

      <div class="item">
        <img src="image/img3.jpg" alt="Product 5">
        <li><a href="../../jantung/portofolio(28)/index.php">PRODUCT 5</a></li>
        <p>Rp. 500.000</p>
      </div>
      
      <div class="item">
        <img src="image/img4.jpg" alt="Product 6">
        <li><a href="../../jantung/portofolio(29)/index.php">PRODUCT 6</a></li>
        <p>Rp. 600.000</p>
      </div>

      <div class="item">
        <img src="image/img5.jpg" alt="Product 7">
        <li><a href="../../jantung/portofolio(30)/frame-8.php">PRODUCT 7</a></li>
        <p>Rp. 700.000</p>
      </div>
      
      <div class="item">
        <img src="image/img6.jpg" alt="Product 8">
        <li><a href="../../jantung/portofolio(31)/frame-8.php">PRODUCT 8</a></li>
        <p>Rp. 800.000</p>
      </div>
      
      <div class="item">
        <img src="image/image-omelette.jpeg" alt="Product 9">
        <li><a href="../../jantung/portofolio(32)/frame-8.php">PRODUCT 9</a></li>
        <p>Rp. 900.000</p>
      </div>

    <div class="item">
      <img src="image/img1.jpg" alt="Product 10">
      <li><a href="../../jantung/portofolio(33)/index.php">PRODUCT 10</a></li>
      <p>Rp. 1.000.000</p>

      </div>
    </div>
  </div>
</body>
</html>