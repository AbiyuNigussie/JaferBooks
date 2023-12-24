<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="../../public/css/adminBooks.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
</head>

<body>
  <main>
    <div class="left">
      <div class="uleft">
        <div class="uuleft">
          <i class="fa-solid fa-user"></i> <a> Mr. Someone </a>
        </div>
        <div class="luleft">
          <a href="#"> <i class="fa-solid fa-layer-group"></i> Dashboard </a>
          <a href="./adminBooks.html">
            <i class="fa-solid fa-book"></i> Books
          </a>
          <a href="#"> <i class="fa-solid fa-cart-shopping"></i>Order </a>
          <a href="/src/views/users.html">
            <i class="fa-solid fa-users"></i> Users
          </a>
        </div>
      </div>
      <div class="lleft">
        <i class="fa-solid fa-right-from-bracket"></i>
        <a href="./adminLogin.html"> Logout </a>
      </div>
    </div>
    <div class="right">
      <div class="uright">
        <p><i class="fa-solid fa-list"></i> Books</p>
      </div>
      <div class="lright">
        <div class="midu">
          <div class="umid">
            <p class="p1">All Books</p>
            <a href="./bookForm.html">
              <i class="fa-solid fa-square-plus"></i>
            </a>
          </div>
          <div class="lmid">
            <div class="ulmid">
              <p>#</p>
              <p>Cover</p>
              <p>Title</p>
              <p>Author</p>
              <p>Price</p>
              <p>St.Qty</p>
              <p class="fa">Action</p>
            </div>
            <div class="llmid">
              <div class="boo">
                <p>#1</p>
                <img src="source/th.jpg" />
                <p>Eyorika</p>
                <p>Michael So</p>
                <p>ETB 211.000</p>
                <p>10</p>
                <div class="xr">
                  <i class="fa-solid fa-square-pen" id="i2"></i>
                  <i class="fa-solid fa-square-xmark" id="x"></i>
                </div>
              </div>
              <div class="boo">
                <p>#2</p>
                <img src="source/on.jpg" />
                <p>Atibiya</p>
                <p>Abebe teka</p>
                <p>ETB 142.000</p>
                <p>15</p>
                <div class="xr">
                  <i class="fa-solid fa-square-pen" id="i2"></i>
                  <i class="fa-solid fa-square-xmark" id="x"></i>
                </div>
              </div>
              <div class="boo">
                <p>#3</p>
                <img src="source/tri.jpg" />
                <p>Mirkoga</p>
                <p>Natnael As</p>
                <p>ETB 780.000</p>
                <p>21</p>
                <div class="xr">
                  <i class="fa-solid fa-square-pen" id="i2"></i>
                  <i class="fa-solid fa-square-xmark" id="x"></i>
                </div>
              </div>
              <div class="boo">
                <p>#4</p>
                <img src="source/fo.jpg" />
                <p>Sebanni</p>
                <p>Mesrak Re</p>
                <p>ETB 243.000</p>
                <p>04</p>
                <div class="xr">
                  <i class="fa-solid fa-square-pen" id="i2"></i>
                  <i class="fa-solid fa-square-xmark" id="x"></i>
                </div>
              </div>
              <div class="boo">
                <p>#5</p>
                <img src="source/fi.jpg" />
                <p>Petross</p>
                <p>Abiyu Nigu</p>
                <p>ETB 563.000</p>
                <p>20</p>
                <div class="xr">
                  <i class="fa-solid fa-square-pen" id="i2"></i>
                  <i class="fa-solid fa-square-xmark" id="x"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>