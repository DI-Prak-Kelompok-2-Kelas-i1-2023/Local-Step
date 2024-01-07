<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product Card/Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    
</head>

<body>
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
    <div class="wraps">
        <div class="card-wrapper">
            <div class="card">
                <!-- card left -->
                <div class="product-imgs">
                    <div class="img-display">
                        <div class="img-showcase">
                            <img src="assets/aerost_osaka.svg" alt="shoe image">
                            <img src="assets/aerost_osaka.svg" alt="shoe image">
                            <img src="assets/aerost_osaka.svg" alt="shoe image">
                            <img src="assets/aerost_osaka.svg" alt="shoe image">
                        </div>
                    </div>
                    <div class="img-select">
                        <div class="img-item">
                            <a href="#" data-id="1">
                                <img src="assets/aerost_osaka.svg" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="2">
                                <img src="assets/aerost_osaka.svg" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="3">
                                <img src="assets/aerost_osaka.svg" alt="shoe image">
                            </a>
                        </div>
                        <div class="img-item">
                            <a href="#" data-id="4">
                                <img src="assets/aerost_osaka.svg" alt="shoe image">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- card right -->
                <div class="text-right">
                    <div class="box">
                        <h1>Aerostreet</h1>
                        <h3>Aerostreet Osaka Krem Biru Hitam
                        </h3>
                        <h2>Rp 149.900</h2>
                        <div class="ukuran">
                            <h3>Ukuran</h3>
                            <p>Cek kembali ukuranmu dengan melihat deskripsi!</p>
                        </div>
                        <div class="size">
                            <button class="button-size" onclick="changeColor(this)">37</button>
                            <button class="button-size" onclick="changeColor(this)">38</button>
                            <button class="button-size" onclick="changeColor(this)">39</button>
                            <button class="button-size" onclick="changeColor(this)">40</button>
                            <button class="button-size" onclick="changeColor(this)">41</button>
                            <button class="button-size" onclick="changeColor(this)">42</button>
                            <button class="button-size" onclick="changeColor(this)">43</button>
                            <button class="button-size" onclick="changeColor(this)">44</button>
                        </div>
                    </div>
                    <div class="tokowrap">
                        <div class="masukkan">
                            <div class="cartbutton">Masukkan ke Keranjang</div>
                            <a href="">
                                <img src="assets/cart.svg">
                            </a>
                        </div>
                        <div class="toko">
                            <div class="tokodet">
                                <img class="brandtoko" src="assets/saly.svg" />
                                <h4 style="color: white;">Aerostreet Official</h4>
                                <a href="{{route('nonshop_home')}}" style="text-decoration: none">
                                    <div class="kunjung">Kunjungi toko</div>
                                </a>
                            </div>
                        </div>
                        <div class="chatbutton">Chat Sekarang</div>
                    </div>
                </div>
            </div>
        </div>

        <h3>DESKRIPSI</h3>
        <div class="deskripsi">

            <div class="isi-desk">
                <p>
                    TIDAK AKAN JEBOL setelah dicuci atau kehujanan karena menggunakan technologi baru Shoes Injection
                    Mould bahan sole dicairkan dengan tekanan tinggi menyatu sempurna dengan bahan kain dari sepatu
                    tanpa menggunakan proses lem.

                    <br />
                    <br />
                    Bahan : Kanvas - Mesh - Kulit sintetis

                    <br />
                    <br />
                    Panduan ukuran :

                    <br />
                    Ukuran 37 Panjang telapak kaki 23.9 cm

                    <br />
                    Ukuran 38 Panjang telapak kaki 24.6 cm

                    <br />
                    Ukuran 39 Panjang telapak kaki 25.2 cm

                    <br />
                    Ukuran 40 Panjang telapak kaki 25.9 cm

                    <br />
                    Ukuran 41 Panjang telapak kaki 26.6 cm

                    <br />
                    Ukuran 42 Panjang telapak kaki 27.2 cm

                    <br />
                    Ukuran 43 Panjang telapak kaki 27.9 cm

                    <br />
                    Ukuran 44 Panjang telapak kaki 28.6 cm

                    <br />
                    <br />
                    <br />
                    *semua stok dijamin ready

                    <br />
                    *Open order 24 jam

                    <br />
                    *Fast response jam 08.00-16.00 Senin s/d Sabtu

                    <br />
                    *Order diatas jam 09.00 akan di proses pada hari berikutnya

                    <br />
                    *Order pada hari minggu dan hari libur Nasional, akan kami proses pada hari kerja
                </p>
            </div>
        </div>

        <h3>PENILAIAN PRODUK</h3>
        <div class="ratebox">
            <div class="rate">
                <div class="rate-box">
                    <div class="nilairate">
                        <h3>4.7</h3>
                        <h3><span>dari</span></h3>
                        <H3>5</H3>
                    </div>
                    <div class="rawr">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="rate-menu">
                    <div class="menu1">
                        <div class="ratebtn1" onclick="changeColors(this)">Semua</div>
                        <div class="ratebtn1" onclick="changeColors(this)">5 Bintang</div>
                        <div class="ratebtn1" onclick="changeColors(this)">4 Bintang</div>
                        <div class="ratebtn1" onclick="changeColors(this)">3 Bintang</div>
                        <div class="ratebtn1" onclick="changeColors(this)">2 Bintang</div>
                        <div class="ratebtn1" onclick="changeColors(this)">1 Bintang</div>
                        <div class="ratebtn1" onclick="changeColors(this)">Dengan Komentar</div>
                        <div class="ratebtn1 clicked" onclick="changeColors(this)">Dengan Media</div>
                    </div>
                </div>
            </div>

            <div class="review">
                <img src="assets/dummy.png" class="review-prof">
                <div class="reviewdesc">
                    <p>Username</p>
                    <div class="starreview">
                        <i class="fas fa-star" class="star"></i>
                        <i class="fas fa-star" class="star"></i>
                        <i class="fas fa-star" class="star"></i>
                        <i class="fas fa-star" class="star"></i>
                        <i class="fas fa-star" class="star"></i>
                    </div>
                    <p>2023-09-30 | Compass Gazelle, Blue Sky</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                        <br />
                        Maecenas in magna sed lorem dignissim posuere. Nulla pulvinar efficitur mi,

                        <br />
                        vel interdum ligula feugiat dictum. Cras volutpat luctus felis ut ullamcorper.

                    </p>
                    <div class="photodetail">
                        <img class="testi" src="assets/aerost_osaka.svg" />
                        <img class="testi" src="assets/aerost_osaka.svg" />
                        <img class="testi" src="assets/aerost_osaka.svg" />
                    </div>
                </div>
            </div>
            <div class="review">
                <img src="assets/dummy.png" class="review-prof">
                <div class="reviewdesc">
                    <p>Username</p>
                    <div class="starreview">
                        <i class="fas fa-star" class="stars"></i>
                        <i class="fas fa-star" class="stars"></i>
                        <i class="fas fa-star" class="stars"></i>
                        <i class="fas fa-star" class="stars"></i>
                        <i class="fas fa-star" class="stars"></i>
                    </div>
                    <p>2023-09-30 | Compass Gazelle, Blue Sky</p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                        <br />
                        Maecenas in magna sed lorem dignissim posuere. Nulla pulvinar efficitur mi,

                        <br />
                        vel interdum ligula feugiat dictum. Cras volutpat luctus felis ut ullamcorper.

                    </p>
                    <div class="photodetail">
                        <img class="testi" src="assets/aerost_osaka.svg" />
                        <img class="testi" src="assets/aerost_osaka.svg" />
                        <img class="testi" src="assets/aerost_osaka.svg" />
                    </div>
                </div>
            </div>

            <div class="pagination">
                <img class="arrow" src="assets/aerost_osaka.svg" />
                <div class="page-active">
                    <p>1</p>
                </div>
                <p class="page">2</p>
                <p class="page">3</p>
                <p class="page">4</p>
                <p class="page">5</p>
                <p class="page">...</p>
                <img class="arrow" src="assets/aerost_osaka.svg" />
            </div>
        </div>

    <h3>REKOMENDASI UNTUK ANDA</h3>
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

    
    <script>
        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;

        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });

        function slideImage() {
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

            document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
        }

        window.addEventListener('resize', slideImage);

    </script>

    <script>
        function changeColor(button) {
            // Remove the 'clicked' class from all buttons
            document.querySelectorAll('.button-size').forEach(function (btn) {
                btn.classList.remove('clicked');
            });

            // Add the 'clicked' class to the clicked button
            button.classList.add('clicked');
        }
    </script>

    <script>
        function changeColors(button) {
            const menuButtons = button.parentNode.querySelectorAll('.ratebtn1');
            menuButtons.forEach(function (btn) {
                btn.classList.remove('clicked');
            });

            // Add the 'clicked' class to the clicked button
            button.classList.add('clicked');
        }
    </script>
    <script src="https://kit.fontawesome.com/f75625c80a.js" crossorigin="anonymous"></script>

</body>

</html>