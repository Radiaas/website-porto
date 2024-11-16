<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="initial-scale=1, width=device-width" />

  <link rel="stylesheet" href="./global.css" />
  <link rel="stylesheet" href="./index.css" />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,500&display=swap"
  />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;600;800;900&display=swap"
  />
  <link
    rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Oxygen:wght@300;700&display=swap"
  />
  <style>
      /* CSS untuk mempertahankan desain tombol "Buy Now" */
      .buy-now-wrapper {
        display: inline-block;
      }

      .buy-now {
        background-color: var(--color-seagreen); /* Warna latar belakang */
        border: none; /* Tanpa border */
        color: white; /* Warna teks */
        text-align: center; /* Teks rata tengah */
        text-decoration: none; /* Tanpa underline */
        display: inline-block; /* Display inline */
        font-size: 18px; /* Ukuran font */
        cursor: pointer; /* Pointer cursor */
        border-radius: 10px; /* Border radius */
        transition-duration: 0.1; /* Durasi transisi */
        font-weight: bold;
        font-family: var( --font-poppins);
      }

   
    </style>
</head>
<body>
  <div class="rectangle-parent">
    <div class="frame-child"></div>
    <div class="header">
      <div class="header-child"></div>
      <div class="portofolio">
        <span>Porto</span>
        <span class="folio">folio.</span>
      </div>
      <a href="../../hati/payment/index.php" class="home button">HOME</a>
      <a href="../../hati/portofolio(35)/about-us.php" class="about button">ABOUT</a>
      <a href="#" class="login button">LOGIN</a>
      <a href="../../hati/portofolio(13)/desktop-1.php" class="membership button">MEMBERSHIP</a>
    </div>
    <b class="koi-pond">Koi Pond</b>
    <div class="lorem-ipsum-dolor">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend
      nunc id accumsan posuere. Quisque sed ante a risus eleifend elementum a
      sit amet est. Donec eros est.
    </div>
    <div class="frame-item"></div>
    <div class="rp20000">Rp.400.000</div>
    
    <!-- Form untuk submit dengan method POST -->
    <form action="process_payment.php" method="post">
      <div class="buy-now-wrapper">
        <!-- Tombol Submit -->
        <button type="submit" class="buy-now">Buy Now</button>
      </div>
    </form>
    
    <a href="../portofolio(28)/index.php" class="chevron-right-fill0-wght400-gr-icon">
      <img
        alt=""
        src="./public/chevron-right-fill0-wght400-grad0-opsz24-11.svg"
      />
    </a>

    <a href="../portofolio(26)/index.php" class="chevron-right-fill0-wght400-gr-icon1">
      <img
        alt=""
        src="./public/chevron-right-fill0-wght400-grad0-opsz24-2.svg"
      />
    </a>

    <img class="img2-1-icon" alt="" src="./public/img2-1@2x.png" />
  </div>
</body>
</html>
