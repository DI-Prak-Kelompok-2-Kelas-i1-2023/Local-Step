<!DOCTYPE html>
<html lang="en">

<head>
  <title>Homepage</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="assets/patrobascld_blackwhite.svg">
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
</head>

<body>

  {{-- section1 --}}
  <div class="section1">

    {{-- product contents --}}
    <div id="prod-1" class="desc">
      <h1>Patrobas Cloud
        Slip On Black White</h1>
      <p>Terinspirasi dari awan yang konon empuk dan lembut, Patrobas Cloud Slip On dirancang dengan kenyamanan</p>
      <h3>RP299.900</h3>
    </div>
    <div id="prod-2" class="desc">
      <h1>Product 2</h1>
      <p>Sepatu mahal gajelas</p>
      <h3>RP999.999</h3>
    </div>
    <div id="prod-3" class="desc">
      <h1>Product 3</h1>
      <p>Sepatu goceng</p>
      <h3>RP5.000</h3>
    </div>
    <div id="prod-4" class="desc">
      <h1>Product 4</h1>
      <p>Sepatu harga istimewa</p>
      <h3>RP123.456</h3>
    </div>

    {{-- add chart button --}}
    <div class="btn">
      <button class="add-chart">Add to chart</button>
    </div>

    {{-- product image --}}
    <div class="product-img">
      <div class="circle">
        <img src="assets/patrobascld_blackwhite.svg">
      </div>
    </div>

    {{-- selector --}}
    <div class="iconSelector">
      <div class="productIcon">
        <button class="icon" onclick="openProduct(event, 'prod-1')" id="defaultOpen">
          <img src="assets/patrobascld_blackwhite.svg">
        </button>
      </div>
      <div class="productIcon">
        <button class="icon" onclick="openProduct(event, 'prod-2')">
          <img src="assets/prod2.svg">
        </button>
      </div>
      <div class="productIcon">
        <button class="icon" onclick="openProduct(event, 'prod-3')">
          <img src="assets/prod3.svg">
        </button>
      </div>
      <div class="productIcon">
        <button class="icon" onclick="openProduct(event, 'prod-4')">
          <img src="assets/prod4.svg">
        </button>
      </div>
    </div>
  </div>

  {{-- section2 --}}
  <div class="section2">
    <h3>Semua barang baru</h3>
    <div class="group">
      <div class="produk-pilihan">
        <div class="rectangle">
          <img src="assets/aerost_osaka.svg" />
        </div>
        <div class="frame">
          <div class="title">Aerostreet Osaka Krem Biru Hitam</div>
          <div class="prod-desc">
            <div class="price">Rp149.900</div>
            <img class="star" src="assets/star.svg" />
            <div class="rating">4.7</div>
          </div>
        </div>
      </div>
      <div class="produk-pilihan">
        <div class="rectangle">
          <img src="assets/aerost_hoops.svg" />
        </div>
        <div class="frame">
          <div class="title">Aerostreet Hoops Low Merah Hitam</div>
          <div class="prod-desc">
            <div class="price">Rp149.900</div>
            <img class="star" src="assets/star.svg" />
            <div class="rating">4.7</div>
          </div>
        </div>
      </div>
      <div class="produk-pilihan">
        <div class="rectangle">
          <img src="assets/bucch_faustus.svg" />
        </div>
        <div class="frame">
          <div class="title">Buccheri Faustus Sneakers</div>
          <div class="prod-desc">
            <div class="price">Rp769.900</div>
            <img class="star" src="assets/star.svg" />
            <div class="rating">4.7</div>
          </div>
        </div>
      </div>
      <div class="produk-pilihan">
        <div class="rectangle">
          <img src="assets/sepatu_sklh.svg" />
        </div>
        <div class="frame">
          <div class="title">Sepatu Sekolah Bata</div>
          <div class="prod-desc">
            <div class="price">Rp249.900</div>
            <img class="star" src="assets/star.svg" />
            <div class="rating">4.7</div>
          </div>
        </div>
      </div>
    </div>
    <a class="show" href="#">
      <div class="showtext">Semua barang baru</div>
      <img class="next" src="assets/next1.svg" />
    </a>
  </div>

  {{-- section3 --}}
  <div class="section3">
    <div class="sectitle">
      <h2>Jejak Lokal, Gaya Global</h2>
      <p>Tidak perlu mencari lagi, di sinilah Anda menemukan pasangan terbaik!</p>
    </div>
    <div class="secdesc">
      <span class="desc1">
        <h2>Local Step</h2>
        <p>Local Step merupakan e-commerce yang menjual footwear (alas kaki) dari brand lokal di Indonesia. Tujuan utama dari  website local step adalah dapat memberikan pengalaman berbelanja alas kaki dari brand lokal secara online yang memuaskan bagi penggunanya.</p>
      </span>
      <span class="desc2">
        <h2>Local Step</h2>
        <p>Local Step merupakan e-commerce yang menjual footwear (alas kaki) dari brand lokal di Indonesia. Tujuan utama dari  website local step adalah dapat memberikan pengalaman berbelanja alas kaki dari brand lokal secara online yang memuaskan bagi penggunanya.</p>
      </span>
    </div>
    <div class="promotion">
      <img src="assets/halloween.png"/>
    </div>
    <div class="quotes">
      <div>
        <img src="assets/quoteimg1.svg"/>
        <h4>Currated & unique collection</h4>
      </div>
      <div>
        <img src="assets/original.svg"/>
        <h4>100% Original lokal</h4>
      </div>
      <div>
        <img src="assets/quoteimg2.svg"/>
        <h4>Buy the latest & define the trends</h4>
      </div>
    </div>
  </div>  

  {{-- footer --}}
  <div class="footer">
    <div class="footLine"></div>
    <div class="footNav">
      <div class="menuBox" id="brand">
        <p>Brand</p>
        <ul>
          <li><a href="">Ventela</a></li>
          <li><a href="">Compass</a></li>
          <li><a href="">PVN</a></li>
          <li><a href="">AeroStreet</a></li>
          <li><a href="">Buccheri</a></li>
          <li><a href="">Patrobas</a></li>
          <li><a href="">Bata</a></li>
        </ul>
      </div>
      <div class="menuBox" id="payment">
        <p>Pembayaran</p>
        <ul class="grid">
          <a>
            <img src="assets/bri.svg">
          </a>
          <a>
            <img src="assets/bni.svg">
          </a>
          <a>
            <img src="assets/bca.svg">
          </a>
          <a>
            <img src="assets/cimb.svg">
          </a>
          <a>
            <img src="assets/seabank.svg">
          </a>
          <a>
            <img src="assets/bsi.svg">
          </a>
          <a>
            <img src="assets/mandiri.svg">
          </a>
          <a>
            <img src="assets/jatim.svg">
          </a>
          <a>
            <img src="assets/permata.svg">
          </a>
          <a>
            <img src="assets/indomaret.svg">
          </a>
          <a>
            <img src="assets/alfamart.svg">
          </a>
          <a>
            <img src="assets/alfamidi.svg">
          </a>
        </ul>
      </div>
      <div class="menuBox" id="deliver">
        <p>Jasa Pengiriman</p>
        <ul class="grid">
          <a>
            <img src="assets/jne.svg">
          </a>
          <a>
            <img src="assets/jntexp.svg">
          </a>
          <a>
            <img src="assets/ninjaexp.svg">
          </a>
          <a>
            <img src="assets/grabexp.svg">
          </a>
          <a>
            <img src="assets/jntcargo.svg">
          </a>
          <a>
            <img src="assets/anteraja.svg">
          </a>
          <a>
            <img src="assets/gosend.svg">
          </a>
          <a>
            <img src="assets/sicepat.svg">
          </a>
          <a>
            <img src="assets/idexp.svg">
          </a>
          <a>
            <img src="assets/bluebird.svg">
          </a>
          <a>
            <img src="assets/indah.svg">
          </a>
          <a>
            <img src="assets/sentral.svg">
          </a>
        </ul>
      </div>
      <div class="menuBox" id="customer">
        <p>Layanan Pelanggan</p>
        <ul>
          <li><a href="">Bantuan</a></li>
          <li><a href="">Metode Pembayaran</a></li>
          <li><a href="">Lacak Pesanan Pembeli</a></li>
          <li><a href="">Gratis Ongkir</a></li>
          <li><a href="">Garansi</a></li>
          <li><a href="">Flash Sale</a></li>
          <li><a href="">Hubungi Kami</a></li>
        </ul>
      </div>
    </div>
    <div class="bottom">
      <div class="diskon">
        <p>Jangan lewatkan penawaran diskon:</p>
        <a class="socmed" href="">
          <img src="assets/fi_twitter.svg">
        </a>
        <a class="socmed" href="">
          <img src="assets/fi_instagram.svg">
        </a>
        <a class="socmed" href="">
          <img src="assets/fi_facebook.svg">
        </a>
      </div>
      <div class="support">
        <p>Support line:</p>
        <p>+250 788 467 808</p>
      </div>
      <div class="copyright">Copyright&nbsp;&nbsp;2023 © Local Step</div>
    </div>
  </div>

  {{-- navbar --}}
  <div class="navbar">
    <div class="logo">
      <h2>Local Step</h2>
    </div>
    <div class="shopmenu">
      <a href="{{route('search')}}">
        <img src="assets/search_btn.svg">
      </a>
      <a href="{{route('wishlist')}}">
        <img src="assets/cart.svg">
      </a>
      <a href="">
        <img src="assets/wishlist.svg">
      </a>
    </div>
    <div class="menu">
      <a href="">
        Brand
      </a>
      <a href="">
        Kategori
      </a>
    </div>
    <div class="account">
      <p>
        Username1
      </p>
      <a class="img" href="{{route('profile_data')}}">
        <img src="assets/dummy.png">
      </a>
    </div>
  </div>

  <script src="{{asset('js/home.js')}}"></script>
  
</body>

</html>