<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Wishlist</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="icon"
            type="image/x-icon"
            href="assets/patrobascld_blackwhite.svg"
        />
        {{-- <link rel="stylesheet" href="{{ asset('css/home.css') }}" /> --}}
        {{-- <link rel="stylesheet" href="{{ asset('css/checkout.css') }}" /> --}}
        <link rel="stylesheet" href="{{ asset('css/payment.css') }}">
        <link rel="stylesheet" href="{{ asset('css/modal-content.css') }}" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Roboto"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins"
            rel="stylesheet"
        />

        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    </head>

    <body>
        {{-- section1 --}}
        <div class="section1">
            <div class="checkout-container">
                <div class="payment-header">
                    <div class="back-btn">
                        <object
                            data="{{ asset('assets/back-btn.svg') }}"
                            type=""
                        ></object>
                        <h2>KEMBALI</h2>
                    </div>
                    <div class="payment-route">
                        <div class="route">PEMESANAN</div>
                        <div class="route">
                            <iconify-icon
                                icon="mingcute:right-fill"
                            ></iconify-icon>
                            PEMBAYARAN
                        </div>
                        <div class="route">
                            <iconify-icon
                                icon="mingcute:right-fill"
                            ></iconify-icon>
                            PENGEMASAN
                        </div>
                        <div class="route">
                            <iconify-icon
                                icon="mingcute:right-fill"
                            ></iconify-icon>
                            PENGIRIMAN
                        </div>
                        <div class="route">
                            <iconify-icon
                                icon="mingcute:right-fill"
                            ></iconify-icon>
                            SELESAI
                        </div>
                    </div>
                </div>
                <div class="checkout-content">
                    <div class="payment-content">
                        <div class="payment-timer">
                            <div class="timer-header">
                                Segera Lakukan Pembayaran!
                            </div>
                            <div class="timer">
                                <object id="timer-svg" data="{{ asset('assets/timer.svg') }}" type=""></object>
                                <div class="timer-bottombar"></div>
                                <div class="countdown">
                                    <x-timer/>
                                </div>
                            </div>

                        </div>
                        <div class="payment-select">
                            <div class="select-modal">
                                <div class="select-header">
                                    <div class="header-title">
                                        <iconify-icon icon="material-symbols:receipt" style="color: tomato;"></iconify-icon>
                                        Tata Cara Pembayaran
                                    </div>
                                    <div class="dropdown">
                                        <iconify-icon
                                            icon="mingcute:down-fill"
                                            width="32"
                                            height="32"
                                        ></iconify-icon>
                                    </div>
                                </div>
                                <div class="select-value">
                                    Bingung cara bayarnya? Yuk cari tahu caranya
                                </div>
                                <div class="modal-content">
                                    <div class="content-container">
                                        <div class="content">
                                            <div class="loc-content">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem laudantium deleniti quidem totam quasi possimus hic? Mollitia eius nostrum saepe facilis maiores vel fugiat reprehenderit modi deserunt asperiores repudiandae, id ad optio dolorum recusandae quis! Dolore, non suscipit! Quas illum exercitationem porro cumque delectus aliquid nisi blanditiis. Placeat, quis doloremque molestiae vitae velit numquam consectetur neque, voluptates tempore quam dolores omnis inventore, aperiam mollitia ratione autem maxime delectus debitis nisi enim temporibus. Aut vero maiores voluptatum, quasi ipsum nulla necessitatibus consequuntur nemo blanditiis quae optio rem quibusdam nesciunt perferendis ut possimus quo neque quas magni nobis distinctio enim maxime? Non.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="select-modal">
                                <div class="select-header">
                                    <div class="header-title">
                                        <iconify-icon icon="material-symbols:print" style="color: tomato;"></iconify-icon>
                                        Batalkan Pemesanan
                                    </div>
                                    <div class="dropdown">
                                        <iconify-icon
                                            icon="mingcute:down-fill"
                                            width="32"
                                            height="32"
                                        ></iconify-icon>
                                    </div>
                                </div>
                                <div class="select-value">
                                    ingin membatalkan pesanan? Coba pastikan kembali !
                                </div>
                                <div class="modal-content">
                                    <div class="content-container">
                                        <div class="content">
                                            <div class="loc-content">
                                                <div class="cancel-desc">
                                                    Apakah kamu yakin akan membatalkan pemesanan yang telah dibuat? Periksa kembali barang yang telah kamu pesan. Pastikan alasanmu sudah kuat untuk melakukan pembatalan pesanan.
                                                </div>
                                                <div class="cancel-imp">
                                                    Tekan tombol dibawah ini jika kamu sudah yakin untuk membatalkan pesanan yang telah dibuat
                                                </div>
                                                <div class="cancel-btn">Batalkan Pemesanan</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        {{-- footer --}}
        {{-- <div class="footer">
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
                            <img src="assets/bri.svg" />
                        </a>
                        <a>
                            <img src="assets/bni.svg" />
                        </a>
                        <a>
                            <img src="assets/bca.svg" />
                        </a>
                        <a>
                            <img src="assets/cimb.svg" />
                        </a>
                        <a>
                            <img src="assets/seabank.svg" />
                        </a>
                        <a>
                            <img src="assets/bsi.svg" />
                        </a>
                        <a>
                            <img src="assets/mandiri.svg" />
                        </a>
                        <a>
                            <img src="assets/jatim.svg" />
                        </a>
                        <a>
                            <img src="assets/permata.svg" />
                        </a>
                        <a>
                            <img src="assets/indomaret.svg" />
                        </a>
                        <a>
                            <img src="assets/alfamart.svg" />
                        </a>
                        <a>
                            <img src="assets/alfamidi.svg" />
                        </a>
                    </ul>
                </div>
                <div class="menuBox" id="deliver">
                    <p>Jasa Pengiriman</p>
                    <ul class="grid">
                        <a>
                            <img src="assets/jne.svg" />
                        </a>
                        <a>
                            <img src="assets/jntexp.svg" />
                        </a>
                        <a>
                            <img src="assets/ninjaexp.svg" />
                        </a>
                        <a>
                            <img src="assets/grabexp.svg" />
                        </a>
                        <a>
                            <img src="assets/jntcargo.svg" />
                        </a>
                        <a>
                            <img src="assets/anteraja.svg" />
                        </a>
                        <a>
                            <img src="assets/gosend.svg" />
                        </a>
                        <a>
                            <img src="assets/sicepat.svg" />
                        </a>
                        <a>
                            <img src="assets/idexp.svg" />
                        </a>
                        <a>
                            <img src="assets/bluebird.svg" />
                        </a>
                        <a>
                            <img src="assets/indah.svg" />
                        </a>
                        <a>
                            <img src="assets/sentral.svg" />
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
                        <img src="assets/fi_twitter.svg" />
                    </a>
                    <a class="socmed" href="">
                        <img src="assets/fi_instagram.svg" />
                    </a>
                    <a class="socmed" href="">
                        <img src="assets/fi_facebook.svg" />
                    </a>
                </div>
                <div class="support">
                    <p>Support line:</p>
                    <p>+250 788 467 808</p>
                </div>
                <div class="copyright">
                    Copyright&nbsp;&nbsp;2023 © Local Step
                </div>
            </div>
        </div> --}}

        {{-- navbar --}}
        <div class="navbar">
            <div class="logo">
                <h2>Local Step</h2>
            </div>
            <div class="shopmenu">
                <a href="">
                    <img src="assets/search_btn.svg" />
                </a>
                <a href="{{ route('wishlist') }}">
                    <img src="assets/cart.svg" />
                </a>
                <a href="">
                    <img src="assets/wishlist.svg" />
                </a>
            </div>
            <div class="menu">
                <a href=""> Brand </a>
                <a href=""> Kategori </a>
            </div>
            <div class="account">
                <p>Username1</p>
                <a class="img" href="">
                    <img src="assets/dummy.png" />
                </a>
            </div>
        </div>

        <script src="{{ asset('js/home.js') }}"></script>
    </body>
    <script>
        const modals = document.querySelectorAll(".select-modal");
        modals.forEach((modal) => {
            const dropdown = modal.querySelector(".select-header .dropdown");
            dropdown.addEventListener("click", (e) => {
                const content = modal.querySelector(".modal-content");
                if (dropdown.classList.contains('active')){
                    content.classList.toggle("active");
                }
                else{
                    resetModals(modals, dropdown)
                    content.classList.toggle("active");
                }
                dropdown.classList.toggle("active");
            });
        });

        function resetModals(modals){
            modals.forEach((modal) => {
                const content = modal.querySelector('.modal-content')
                const dropdown = modal.querySelector('.select-header .dropdown')
                content.classList.remove('active')
                dropdown.classList.remove('active')
            })
        }
    </script>
</html>
