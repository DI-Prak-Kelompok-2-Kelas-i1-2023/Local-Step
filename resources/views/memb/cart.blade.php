<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Homepage</title>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="icon"
            type="image/x-icon"
            href="assets/patrobascld_blackwhite.svg"
        />
        <link rel="stylesheet" href="{{ asset('css/cart.css') }}" />
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
            <div class="search-container">
                <x-searchBar />
            </div>
            <div class="cart-container">
                <h2>KERANJANG SAYA</h2>
                <div class="cart-header">
                    <div class="checkbox">
                        @php $label = "Produk" @endphp
                        <x-custom-checkbox :$label />
                    </div>
                    <div class="label-container">
                        <div class="price-one">Harga Satuan</div>
                        <div class="qty">Kuantitas</div>
                        <div class="total-price">Total Harga</div>
                        <div class="action">Aksi</div>
                    </div>
                </div>
                <div class="cart-modal">
                    <div class="modal-header">
                        @php $label = "Aerostreet" @endphp
                        <x-custom-checkbox :$label />
                    </div>
                    <div class="modal-content">
                        <x-custom-checkbox label=" " />
                        <div class="content-container">
                            <object
                                class="shoe-img"
                                data="{{ asset('assets/aerost_hoops.svg') }}"
                                type=""
                            ></object>
                            <div class="content-desc">
                                <div class="content-name">
                                    Aerostreet Leona Pu...
                                </div>
                                <div class="content-info">
                                    <div class="content-color">
                                        <div>Warna:</div>
                                        <div class="color">Putih</div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-container">
                                <div class="content-price">Rp139.900</div>
                                <div class="qty-input">
                                    <div id="minBtn">
                                        <iconify-icon
                                            icon="ic:baseline-minus"
                                            width="32"
                                            height="32"
                                            style="color: black"
                                        ></iconify-icon>
                                    </div>
                                    <input
                                        type="number"
                                        name="qty"
                                        id="qtyInput"
                                        value="0"
                                        inputmode="numeric"
                                    />
                                    <div id="plusBtn">
                                        <iconify-icon
                                            icon="ic:baseline-plus"
                                            width="32"
                                            height="32"
                                            style="color: black"
                                        ></iconify-icon>
                                    </div>
                                </div>
                                <div class="total-price">Rp139.900</div>
                                <div class="remove">Remove</div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-content">
                        <x-custom-checkbox label=" " />
                        <div class="content-container">
                            <object
                                class="shoe-img"
                                data="{{ asset('assets/aerost_hoops.svg') }}"
                                type=""
                            ></object>
                            <div class="content-desc">
                                <div class="content-name">
                                    Aerostreet Evelyn P...
                                </div>
                                <div class="content-info">
                                    <div class="content-color">
                                        <div>Warna:</div>
                                        <div class="color">Putih Krem Pink</div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-container">
                                <div class="content-price">Rp139.900</div>
                                <div class="qty-input">
                                    <div id="minBtn">
                                        <iconify-icon
                                            icon="ic:baseline-minus"
                                            width="32"
                                            height="32"
                                            style="color: black"
                                        ></iconify-icon>
                                    </div>
                                    <input
                                        type="number"
                                        name="qty"
                                        id="qtyInput"
                                        value="0"
                                    />
                                    <div id="plusBtn">
                                        <iconify-icon
                                            icon="ic:baseline-plus"
                                            width="32"
                                            height="32"
                                            style="color: black"
                                        ></iconify-icon>
                                    </div>
                                </div>
                                <div class="total-price">Rp139.900</div>
                                <div class="remove">Remove</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="cart-modal">
                    <div class="modal-header">
                        @php $label = "PVN" @endphp
                        <x-custom-checkbox :$label />
                    </div>
                    <div class="modal-content">
                        <x-custom-checkbox label=" " />
                        <div class="content-container">
                            <object
                                class="shoe-img"
                                data="{{ asset('assets/aerost_osaka.svg') }}"
                                type=""
                            ></object>
                            <div class="content-desc">
                                <div class="content-name">
                                    PVN Hologram Impor...
                                </div>
                                <div class="content-info">
                                    <div class="content-color">
                                        <div>Warna:</div>
                                        <div class="color">Hologram Pink</div>
                                    </div>
                                </div>
                            </div>
                            <div class="add-container">
                                <div class="content-price">Rp399.800</div>
                                <div class="qty-input">
                                    <div id="minBtn">
                                        <iconify-icon
                                            icon="ic:baseline-minus"
                                            width="32"
                                            height="32"
                                            style="color: black"
                                        ></iconify-icon>
                                    </div>
                                    <input
                                        type="number"
                                        name="qty"
                                        id="qtyInput"
                                        value="0"
                                    />
                                    <div id="plusBtn">
                                        <iconify-icon
                                            icon="ic:baseline-plus"
                                            width="32"
                                            height="32"
                                            style="color: black"
                                        ></iconify-icon>
                                    </div>
                                </div>
                                <div class="total-price">Rp399.800</div>
                                <div class="remove">Remove</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="payment-container">
                <div class="voucher">
                    <div class="voucher-desc">
                        <object
                            data="{{ asset('assets/ongkir.svg') }}"
                            type=""
                        ></object>
                        Pilih voucher Gratis Ongkir untuk menikmati Gratis
                        Ongkir
                    </div>
                    <div class="voucher-select">
                        Pilih Voucher
                        <iconify-icon
                            icon="mingcute:right-line"
                            style="color: #838383"
                        ></iconify-icon>
                    </div>
                </div>
                <div class="summary">
                    <div class="summary-title">Ringkasan Belajar</div>
                    <div class="summary-content">
                        <div class="summary-price">Total Harga</div>
                        <div class="summary-disc">Total Diskon</div>
                        <div class="summary-total">Harga Akhir</div>
                        <a href="{{route('checkout')}}"><button class="summary-btn">Beli</button><a>
                    </div>
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
                Username11
              </p>
              <a class="img" onclick="menuToggle()">
                <img src="assets/dummy.png">
              </a>
              <div class="profmenu">
                <div class="username">
                  <span class="name">
                    Username11
                  </span>
                  <br>
                  <span>
                    username11@uner.com
                  </span>
                </div>
                <ul>
                  <li>
                    <a href="{{route('profile_data')}}">
                      <button>Edit Profile</button>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <button>About</button>
                    </a>
                  </li>
                  <li>
                    <a href="{{route('index')}}">
                      <button>Logout</button>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>

        <script src="{{ asset('js/home.js') }}"></script>
        <script>
            const modals = document.querySelectorAll(".modal-content");

            modals.forEach((modal) => {
                const ele = modal.querySelector(
                    ".content-container .add-container .qty-input"
                );
                const addBtn = ele.querySelector("#plusBtn");
                const substractBtn = ele.querySelector("#minBtn");
                const input = ele.querySelector("#qtyInput");

                addBtn.addEventListener("click", (e) => {
                    input.value = addQty(input.value, 1);
                });

                substractBtn.addEventListener("click", (e) => {
                    input.value = substractQty(input.value, 1);
                });
            });

            function addQty(initialVal, value) {
                return parseInt(initialVal) + value;
            }

            function substractQty(initialVal, value) {
                return initialVal > 0 ? parseInt(initialVal) - value : 0;
            }

            function menuToggle(){
                const toggleMenu = document.querySelector('.profmenu');
                toggleMenu.classList.toggle('active');
            }
        </script>
    </body>
</html>
