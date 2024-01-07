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
        <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/checkout.css') }}" />
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
                        <div class="payment-select">
                            <div class="select-modal">
                                <div class="select-header">
                                    <div class="header-title">
                                        <object
                                            data="{{
                                                asset('assets/loc-icon.svg')
                                            }}"
                                            type=""
                                        ></object>
                                        Alamat Pengiriman
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
                                    Jl. Dr. Ir. H. Soekarno, Mulyorejo, Kec.
                                    Mulyorejo, Kota SBY, Jawa Timur 60115
                                </div>
                                <div class="modal-content">
                                    <div class="content-header">
                                        <div>Opsi</div>
                                        <div>Alamat Pengiriman</div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content">
                                            <div class="loc-content">
                                                <input
                                                    type="radio"
                                                    name="loc"
                                                    id="loc"
                                                />
                                                <label for="loc"
                                                    >Jl. Dr. Ir. H. Soekarno,
                                                    Mulyorejo, Kec. Mulyorejo, Kota
                                                    SBY, Jawa Timur 60115</label
                                                >
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="loc-content">
                                                <iconify-icon
                                                    icon="ic:baseline-plus"
                                                    width="28"
                                                    height="28"
                                                ></iconify-icon>
                                                <label for="loc">Tambahkan </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="select-modal">
                                <div class="select-header">
                                    <div class="header-title">
                                        <object
                                            data="{{
                                                asset('assets/loc-icon.svg')
                                            }}"
                                            type=""
                                        ></object>
                                        Produk yang telah anda pilih
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
                                    Pastikan produk yang dipilih sesuai
                                </div>
                                <div class="modal-content">
                                    <div class="product-header">
                                        <div>No.</div>
                                        <div>Deskripsi Produk</div>
                                        <div>Harga</div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content">
                                            <div class="loc-content">
                                                <div class="no">1</div>
                                                <div class="sub-desc">
                                                    <object data="{{ asset('assets/aerost_hoops.svg') }}" width="100" height="100" type=""></object>
                                                    <div class="product-desc">
                                                        <div class="product-name">
                                                            Osmond Armchair
                                                        </div>
                                                        <div class="product-color">
                                                            <div class="color-label">
                                                                Color
                                                            </div>
                                                            <div class="color-name">
                                                                Gunnared biege
                                                            </div>
                                                        </div>
                                                        <div class="product-qty">
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
                                                            <div class="product-remove">Remove</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    Rp 149.900
                                                </div>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="loc-content">
                                                <div class="no">2</div>
                                                <div class="sub-desc">
                                                    <object data="{{ asset('assets/aerost_hoops.svg') }}" width="100" height="100" type=""></object>
                                                    <div class="product-desc">
                                                        <div class="product-name">
                                                            Osmond Armchair
                                                        </div>
                                                        <div class="product-color">
                                                            <div class="color-label">
                                                                Color
                                                            </div>
                                                            <div class="color-name">
                                                                Gunnared biege
                                                            </div>
                                                        </div>
                                                        <div class="product-qty">
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
                                                            <div class="product-remove">Remove</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-price">
                                                    Rp 149.900
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="select-modal">
                                <div class="select-header">
                                    <div class="header-title">
                                        <object
                                            data="{{
                                                asset('assets/loc-icon.svg')
                                            }}"
                                            type=""
                                        ></object>
                                        Metode Pengiriman
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
                                    JNE - Regular
                                </div>
                                <div class="modal-content">
                                    <div class="send-header">
                                        <div>No.</div>
                                        <div>Penyedia Jasa</div>
                                        <div>Paket</div>
                                        <div>Harga</div>
                                        <div>Opsi</div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content">
                                            <div class="send-content">
                                                <div class="no">1</div>
                                                <div class="send-name">JNE</div>
                                                <div class="send-paket">Hemat</div>
                                                <div class="send-price">Rp 9.000</div>
                                                <input type="radio" name="send-option">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="send-content">
                                                <div class="no">2</div>
                                                <div class="send-name">JNE</div>
                                                <div class="send-paket">Regular</div>
                                                <div class="send-price">Rp 9.000</div>
                                                <input type="radio" name="send-option">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="send-content">
                                                <div class="no">3</div>
                                                <div class="send-name">JNE</div>
                                                <div class="send-paket">Yes</div>
                                                <div class="send-price">Rp 9.000</div>
                                                <input type="radio" name="send-option">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="send-content">
                                                <div class="no">4</div>
                                                <div class="send-name">JNE</div>
                                                <div class="send-paket">Express</div>
                                                <div class="send-price">Rp 9.000</div>
                                                <input type="radio" name="send-option">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="select-modal">
                                <div class="select-header">
                                    <div class="header-title">
                                        <object
                                            data="{{
                                                asset('assets/loc-icon.svg')
                                            }}"
                                            type=""
                                        ></object>
                                        Metode Pembayaran
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
                                    Dompet Online - DANA
                                </div>
                                <div class="modal-content">
                                    <div class="pay-header">
                                        <div>No.</div>
                                        <div>Metode Bayar</div>
                                        <div>Deskripsi</div>
                                        <div>Opsi</div>
                                    </div>
                                    <div class="content-container">
                                        <div class="content">
                                            <div class="pay-content">
                                                <div class="no">1</div>
                                                <div class="pay-method">Transfer Bank</div>
                                                <div class="pay-desc">
                                                    <select name="pay-bank" id="pay-bank">
                                                        <option value="">Bank - Mandiri</option>
                                                        <option value="">Bank - BCA</option>
                                                        <option value="">Bank - BRI</option>
                                                        <option value="">Shopeepay</option>
                                                    </select>
                                                </div>
                                                <input type="radio" name="pay-option" id="pay-option">
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="pay-content">
                                                <div class="no">1</div>
                                                <div class="pay-method">Transfer Bank</div>
                                                <div class="pay-desc">
                                                    <select name="pay-bank" id="pay-bank">
                                                        <option value="">Bank - Mandiri</option>
                                                        <option value="">Bank - BCA</option>
                                                        <option value="">Bank - BRI</option>
                                                        <option value="">Shopeepay</option>
                                                    </select>
                                                </div>
                                                <input type="radio" name="pay-option" id="pay-option">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="payment-summary">
                            <div class="summary-container">
                                <div class="summary-title">
                                    RANGKUMAN PESANAN
                                </div>
                                <div class="summary-content">
                                    <div class="sub-content">
                                        <div class="first-con">Harga</div>
                                        <div class="sec-con">Rp 449.700</div>
                                    </div>
                                    <div class="sub-content">
                                        <div class="first-con">Diskon</div>
                                        <div class="sec-con">Rp 0</div>
                                    </div>
                                    <div class="sub-content">
                                        <div class="first-con">Ongnkir</div>
                                        <div class="sec-con free">Free</div>
                                    </div>
                                    <div class="sub-content">
                                        <div class="first-con">Kupon Tambahan</div>
                                        <div class="sec-con">Rp 0</div>
                                    </div>
                                </div>
                                <div class="summary-info">
                                    <div class="sub-content">
                                        <div class="first-con">Total</div>
                                        <div class="sec-con">Rp 449.700</div>
                                    </div>
                                    <div class="sub-content">
                                        <div class="first-con">Metode Bayar</div>
                                        <div class="sec-con">ShopeePay</div>
                                    </div>
                                    <div class="sub-content">
                                        <div class="first-con">Perkiraan Sampai</div>
                                        <div class="sec-con">01 Feb, 2023</div>
                                    </div>
                                    <a href="{{route('payment')}}">
                                        <button class="payment-btn">
                                            Lanjutkan Pembayaran
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
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
                Username1
              </p>
              <a class="img" href="{{route('profile_data')}}">
                <img src="assets/dummy.png">
              </a>
            </div>
          </nav>

        <script src="{{ asset('js/home.js') }}"></script>
    </body>
    <script>
        const modals = document.querySelectorAll(".select-modal");
        modals.forEach((modal) => {
            const dropdown = modal.querySelector(".select-header .dropdown");
            dropdown.addEventListener("click", (e) => {
                const content = modal.querySelector(".modal-content");
                content.classList.toggle("active");
                dropdown.classList.toggle("active");
            });
        });

        const content = document.querySelectorAll(".product-desc");
            content.forEach((element) => {
                const ele = element.querySelector(
                    ".product-qty .qty-input"
                    );
                    console.log(ele);
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
    </script>
</html>
