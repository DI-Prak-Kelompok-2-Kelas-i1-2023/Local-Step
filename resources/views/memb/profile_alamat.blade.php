<!DOCTYPE html>
<html lang="en">

<head>
  <title>Homepage</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="assets/patrobascld_blackwhite.svg">
  <link rel="stylesheet" href="{{asset('css/alamat.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
</head>

<body>

  {{-- section1 --}}
  <div class="boxx">
        <div class="navigasi">
            <img class="profpic" src="assets/dummy.png"/>
            <h3>Username11</h3>
            <p>Edit Profile</p>
            <div class="nav-menu">
                <div class="accord">
                    <div class="accordion">
                        <div class="accordion-content">
                            <header>
                                <span class="title">Akun Saya</span>
                            </header>
                            <p class="description">
                                <a class="acc" href="{{route('profile_data')}}">Profil</a>
                                <a class="acc" id="active" href="">Alamat</a>
                            </p>
                        </div>

                        <span class="title">Pesanan Saya</span>


                    </div>
                </div>

            </div>
        </div>
        <div class="alamatbox">
            <div class="opsi1">
                <div class="option">
                    <h3>Alamat Saya</h3>
                    <p>Kelola informasi alamat - alamat Anda</p>
                </div>
                <div class="option">
                    <div class="tambah">+ Tambah Alamat</div>
                </div>
            </div>
            <div class="line"></div>
            <div class="opsi">
              <div class="option">
                <div class="identity">
                  <h4>Name111 |</h4>
                  <h4>(+62)8123456789</h4>
                </div>
                <p class="alamat">
                  Jl. Mulyorejo Selatan II, No. 2, Surabaya
                  MULYOREJO, SURABAYA, JAWA TIMUR, ID, 60112
                </p>
                <div class="utama">Utama</div>
              </div>
              <div class="option">
                <div class="change">
                  <a href="" class="ubah">Ubah</a>
                  <a href="" class="hapus-hidden">Hapus</a>
                </div>
                <a class="atur-hidden" onclick="">Atur sebagai utama</a>
              </div>
            </div>
            <div class="line"></div>

            <div class="opsi">
              <div class="option">
                <div class="identity">
                  <h4>Name111 |</h4>
                  <h4>(+62)8123456789</h4>
                </div>
                <p class="alamat">
                  Jl. Mulyorejo Selatan II, No. 2, Surabaya
                  MULYOREJO, SURABAYA, JAWA TIMUR, ID, 60112
                </p>
                <div class="utama-hidden">Utama</div>
              </div>
              <div class="option">
                <div class="change">
                  <a href="" class="ubah">Ubah</a>
                  <a href="" class="hapus">Hapus</a>
                </div>
                <a class="atur" onclick="toggleUtamaVisibility()">Atur sebagai utama</a>
              </div>
            </div>
        
          <div class="line"></div>    

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
  <nav class="navbar">
    <div class="logo">
      <h2>Local Step</h2>
    </div>
    <div class="shopmenu">
      <a href="{{route('msearch')}}">
        <img src="assets/search_btn.svg">
      </a>
      <a href="{{route('cart')}}">
        <img src="assets/cart.svg">
      </a>
      <a href="{{route('wishlist')}}">
        <img src="assets/wishlist.svg">
      </a>
    </div>
    <div class="menu">
      <a href="{{route('mbrand')}}">
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
  </nav>
  </nav>

  <script>
    const accordionContent = document.querySelectorAll(".accordion-content");

    accordionContent.forEach((item, index) => {
        let header = item.querySelector("header");
        header.addEventListener("click", () => {
            item.classList.toggle("open");

            let description = item.querySelector(".description");
            if (item.classList.contains("open")) {
                description.style.height = `${description.scrollHeight}px`; //scrollHeight property returns the height of an element including padding , but excluding borders, scrollbar or margin
                item.querySelector("i").classList.replace("fa-plus", "fa-minus");
            } else {
                description.style.height = "0px";
                item.querySelector("i").classList.replace("fa-minus", "fa-plus");
            }
            removeOpen(index); //calling the funtion and also passing the index number of the clicked header
        })
    })

    function removeOpen(index1) {
        accordionContent.forEach((item2, index2) => {
            if (index1 != index2) {
                item2.classList.remove("open");

                let des = item2.querySelector(".description");
                des.style.height = "0px";
                item2.querySelector("i").classList.replace("fa-minus", "fa-plus");
            }
        })
    }
</script>

<script>
 function toggleUtamaVisibility() {
  // i want to make array for the data

  // then put the data on the opsi class with the status of the hidden
  // only one class is being the main one or utama

  // then the rest is generated normally with having the atur sebagai utama


  
  }
</script>

{{-- Gambar --}}
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Load stored profile picture data from localStorage
    const storedImageData = localStorage.getItem('profilePicture');

    if (storedImageData) {
      // Update all elements with the class 'profpic' on Page B
      updateAllProfpics(storedImageData);
    }
  });

  function updateAllProfpics(imageData) {
    const profpics = document.querySelectorAll('.profpic');
    profpics.forEach((profpic) => {
      profpic.src = imageData;
    });

    const accountImage = document.querySelector('.account img');
    if (accountImage) {
      accountImage.src = imageData;
    }
  }
  
</script>
  
</body>

</html>