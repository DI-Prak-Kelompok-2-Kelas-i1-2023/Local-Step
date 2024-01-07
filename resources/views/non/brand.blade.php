<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/patrobascld_blackwhite.svg">
    <link rel="stylesheet" href="{{asset('css/brand.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
    <title>Document</title>
</head>
<body>

  <div class="contents">
    <div class="contain">
      <div class="part2">
        <h1><span>Major<span></h1>
      </div>
      <div class="part2">
        <div class="box3">
          <h3>Brand Pulau Jawa</h2>
            <div class="listmajor">
              <ul class="major" id="injawa">
              </ul>
            </div>
        </div>
      </div>

      <div class="part2">
        <div class="box3">
          <h3>Brand Luar Pulau Jawa</h2>
            <div class="listmajor">
              <ul class="major" id="outjawa">
              </ul>
            </div>
        </div>
      </div>
    </div>
  </div>

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

  <div class="navbar">
    <div class="logo">
      <h2>Local Step</h2>
    </div>
    <div class="search">
      <a href="{{route('nonsearch')}}">
        <img src="assets/search_btn.svg">
      </a>
    </div>
    <div class="menu">
      <a href="{{route('nonbrand')}}">
        Brand
      </a>
      <a href="">
        Kategori
      </a>
    </div>
    <div class="button">
      <a class="login" href="{{route('index')}}">
        Masuk
      </a>
      <a class="register" href="{{route('register')}}">
        Daftar
      </a>
    </div>
  </div>

  <script>
    // Sample array (replace this with your actual data)
    var injawa = [
      'AeroStreet',
      'Brodo',
      'Bata',
      'Ventela',
      'Geoff Max',
      'AeroStreet',
      'Brodo',
      'Bata',
      'Ventela',
      'Geoff Max',
      'AeroStreet',
      'Brodo',
      'Bata',
      'Ventela',
      'Geoff Max'
    ];

    var outjawa = [
      'Converse',
      'HomyPed',
      'Adida',
      'Reebok',
      'Converse',
      'HomyPed',
      'Adida',
      'Reebok',
      'Converse',
      'HomyPed',
      'Adida',
      'Reebok',
      'Converse',
      'HomyPed',
    ];

    function createListItems(array, containerId) {
      var listContainer = document.getElementById(containerId);

      // Loop through the array and create clickable list items
      array.forEach(function (item) {
        var listItem = document.createElement('li');
        listItem.textContent = item;

        // Add a click event listener to the list item
        listItem.addEventListener('click', function () {
          // Handle list item click here, e.g., you can display an alert
          window.location.href = 'nonshop_home'
        });

        // Append the list item to the list container
        listContainer.appendChild(listItem);
      });
    }

    // Call the function for Inside Jawa
    createListItems(injawa, 'injawa');

    // Call the function for Outside Jawa
    createListItems(outjawa, 'outjawa');

  </script>

</body>
</html>