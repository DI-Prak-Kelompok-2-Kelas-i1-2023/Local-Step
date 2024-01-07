<!DOCTYPE html>
<html lang="en">

<head>
  <title>Shop - Product</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="assets/patrobascld_blackwhite.svg">
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
  <link rel="stylesheet" href="{{asset('css/search.css')}}">
  <link rel="stylesheet" href="{{asset('css/price-filter.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</head>

<body>

  {{-- content --}}
  <div class="shop">
    <div class="shopprof">
      <img class="banner" src="assets/store_banner.png">
      <img class="pp" src="assets/store_pp.png">
      <div class="menushop">
        <button><a href="{{route('nonshop_home')}}">Home</a></button>
        <button><a href="{{route('nonshop_product')}}">Produk</a></button>
      </div>
    </div>
    <div class="shopproduct">
      <div class="filter">
        <div class="filtitle">
          <img src="assets/filter.svg">
          <h3>Filter</h3>
        </div>
        <div id="color-filter">
          <h3>Warna</h3>
          <div id="colors-input">
              <div class="color-input">
                  <input type="checkbox" name="red" id="red" />
                  <label for="red">Merah</label>
              </div>
              <div class="color-input">
                  <input type="checkbox" name="red" id="red" />
                  <label for="red">Kuning</label>
              </div>
              <div class="color-input">
                  <input type="checkbox" name="red" id="red" />
                  <label for="red">Hijau</label>
              </div>
              <div class="color-input">
                  <input type="checkbox" name="red" id="red" />
                  <label for="red">Orange</label>
              </div>
              <div class="color-input">
                  <input type="checkbox" name="red" id="red" />
                  <label for="red">Biru</label>
              </div>
              <div class="color-input">
                  <input type="checkbox" name="red" id="red" />
                  <label for="red">Ungu</label>
              </div>
              <div class="color-input">
                  <input type="checkbox" name="red" id="red" />
                  <label for="red">Hitam</label>
              </div>
              <div class="color-input">
                  <input type="checkbox" name="red" id="red" />
                  <label for="red">Coklat</label>
              </div>
              <div class="color-input">
                  <input type="checkbox" name="red" id="red" />
                  <label for="red">Putih</label>
              </div>
              <div class="color-input">
                  <input type="checkbox" name="red" id="red" />
                  <label for="red">Pink</label>
              </div>
              <div class="color-input">
                  <input type="checkbox" name="red" id="red" />
                  <label for="red">Abu-Abu</label>
              </div>
              <div class="color-input">
                  <input type="checkbox" name="red" id="red" />
                  <label for="red">Cream</label>
              </div>
          </div>
      </div>
      <div id="loc-filter">
          <h3>Lokasi</h3>
          <div id="locs-input">
              <div class="loc-input">
                  <input
                      type="checkbox"
                      name="jabodetabek"
                      id="jabodetabek"
                  />
                  <label for="jabodetabek">Jabodetabek</label>
              </div>
              <div class="loc-input">
                  <input
                      type="checkbox"
                      name="jabodetabek"
                      id="jabodetabek"
                  />
                  <label for="jabodetabek">Jawa Timur</label>
              </div>
              <div class="loc-input">
                  <input
                      type="checkbox"
                      name="jabodetabek"
                      id="jabodetabek"
                  />
                  <label for="jabodetabek">DI Yogyakarta</label>
              </div>
              <div class="loc-input">
                  <input
                      type="checkbox"
                      name="jabodetabek"
                      id="jabodetabek"
                  />
                  <label for="jabodetabek">Sulawesi Selatan</label>
              </div>
              <div class="loc-input">
                  <input
                      type="checkbox"
                      name="jabodetabek"
                      id="jabodetabek"
                  />
                  <label for="jabodetabek">Jawa Barat</label>
              </div>
              <div class="loc-input">
                  <label id="other" for="jabodetabek">Lainnya</label>
              </div>
          </div>
      </div>
      <div id="price-filter">
          <h3>Batas Harga</h3>
          <div id="price-range">
              <div class="slider-control">
                  <input
                      type="range"
                      id="startVal"
                      value="20"
                      min="0"
                      max="100"
                  />
                  <input
                      type="range"
                      id="endVal"
                      value="80"
                      min="0"
                      max="100"
                  />
              </div>
              <div class="range-control">
                  <div class="control-container">
                      <div class="control-label">Min</div>
                      <input
                          type="number"
                          class="control-input"
                          id="startInput"
                          value="20"
                          min="0"
                          max="100"
                      />
                  </div>
                  <div class="control-container">
                      <div class="control-label">Max</div>
                      <input
                          type="number"
                          class="control-input"
                          id="endInput"
                          value="80"
                          min="0"
                          max="100"
                      />
                  </div>
              </div>
          </div>
      </div>
      <div id="size-filter">
          <h3>Size</h3>
          <div class="size-container">
              @for ($i = 32; $i <= 46; $i++)
              <div class="size">{{ $i }}</div>
              @endfor
          </div>
      </div>
      </div>
      <div class="prodlist">
        <div class="prodchoice" onclick="redirectToProductPage()">
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
        <div class="prodchoice" onclick="redirectToProductPage()">
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
        <div class="prodchoice" onclick="redirectToProductPage()">
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
        <div class="prodchoice" onclick="redirectToProductPage()">
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
        <div class="prodchoice" onclick="redirectToProductPage()">
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
        <div class="prodchoice" onclick="redirectToProductPage()">
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
        <div class="prodchoice" onclick="redirectToProductPage()">
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
        <div class="prodchoice" onclick="redirectToProductPage()">
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
        <div class="prodchoice" onclick="redirectToProductPage()">
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
        <div class="prodchoice" onclick="redirectToProductPage()">
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
        <div class="prodchoice" onclick="redirectToProductPage()">
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
        <div class="prodchoice" onclick="redirectToProductPage()">
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
      </div>
    </div>
    <div class="paginator">
      <iconify-icon icon="material-symbols:arrow-back-ios" style="color: black;"></iconify-icon>
      @for ($i = 1; $i <= 5; $i++ )
      <div class="page">
          {{ $i }}
      </div>
      @endfor
      <iconify-icon icon="material-symbols:arrow-forward-ios" style="color: black;"></iconify-icon>
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

  <script src="{{ asset('js/home.js') }}"></script>
  
</body>

<script>
function redirectToProductPage() {
            window.location.href = 'product';
        }

  function toggleSize(size) {
      size.classList.toggle("active");
  }
  function controlFromInput(
      fromSlider,
      fromInput,
      toInput,
      controlSlider
  ) {
      const [from, to] = getParsed(fromInput, toInput);
      fillSlider(fromInput, toInput, "#C6C6C6", "#000", controlSlider);
      if (from > to) {
          fromSlider.value = to;
          fromInput.value = to;
      } else {
          fromSlider.value = from;
      }
  }

  function controlToInput(toSlider, fromInput, toInput, controlSlider) {
      const [from, to] = getParsed(fromInput, toInput);
      fillSlider(fromInput, toInput, "#C6C6C6", "#000", controlSlider);
      setToggleAccessible(toInput);
      if (from <= to) {
          toSlider.value = to;
          toInput.value = to;
      } else {
          toInput.value = from;
      }
  }

  function controlFromSlider(fromSlider, toSlider, fromInput) {
      const [from, to] = getParsed(fromSlider, toSlider);
      fillSlider(fromSlider, toSlider, "#C6C6C6", "#000", toSlider);
      if (from > to) {
          fromSlider.value = to;
          fromInput.value = to;
      } else {
          fromInput.value = from;
      }
  }

  function controlToSlider(fromSlider, toSlider, toInput) {
      const [from, to] = getParsed(fromSlider, toSlider);
      fillSlider(fromSlider, toSlider, "#C6C6C6", "#000", toSlider);
      setToggleAccessible(toSlider);
      if (from <= to) {
          toSlider.value = to;
          toInput.value = to;
      } else {
          toInput.value = from;
          toSlider.value = from;
      }
  }

  function getParsed(currentFrom, currentTo) {
      const from = parseInt(currentFrom.value, 10);
      const to = parseInt(currentTo.value, 10);
      return [from, to];
  }

  function fillSlider(from, to, sliderColor, rangeColor, controlSlider) {
      const rangeDistance = to.max - to.min;
      const fromPosition = from.value - to.min;
      const toPosition = to.value - to.min;
      controlSlider.style.background = `linear-gradient(
to right,
${sliderColor} 0%,
${sliderColor} ${(fromPosition / rangeDistance) * 100}%,
${rangeColor} ${(fromPosition / rangeDistance) * 100}%,
${rangeColor} ${(toPosition / rangeDistance) * 100}%,
${sliderColor} ${(toPosition / rangeDistance) * 100}%,
${sliderColor} 100%)`;
  }

  function setToggleAccessible(currentTarget) {
      const toSlider = document.querySelector("#endVal");
      if (Number(currentTarget.value) <= 0) {
          toSlider.style.zIndex = 2;
      } else {
          toSlider.style.zIndex = 0;
      }
  }

  const fromSlider = document.querySelector("#startVal");
  const toSlider = document.querySelector("#endVal");
  const fromInput = document.querySelector("#startInput");
  const toInput = document.querySelector("#endInput");
  fillSlider(fromSlider, toSlider, "#C6C6C6", "#000", toSlider);
  setToggleAccessible(toSlider);

  fromSlider.oninput = () =>
      controlFromSlider(fromSlider, toSlider, fromInput);
  toSlider.oninput = () => controlToSlider(fromSlider, toSlider, toInput);
  fromInput.oninput = () =>
      controlFromInput(fromSlider, fromInput, toInput, toSlider);
  toInput.oninput = () =>
      controlToInput(toSlider, fromInput, toInput, toSlider);

  const sizeBtn = document.querySelectorAll(".size");
  sizeBtn.forEach((ele) => {
      ele.addEventListener("click", (e) => {
          toggleSize(ele);
      });
  });
</script>

</html>