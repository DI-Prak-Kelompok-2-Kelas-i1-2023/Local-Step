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
                  <button class="tambah" onclick="openModal()">+ Tambah Alamat</button>
                </div>
            </div>
            <div class="line"></div>
            <div id="data-container">
              <!-- Dummy data will be dynamically inserted here -->
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
              <button>Edit Profil</button>
            </a>
          </li>
          <li>
            <a href="#">
              <button>Pesanan Saya</button>
            </a>
          </li>
          <li>
            <a href="{{route('index')}}">
              <button>Keluar</button>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </nav>

{{-- nav-side --}}
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

    function menuToggle(){
      const toggleMenu = document.querySelector('.profmenu');
      toggleMenu.classList.toggle('active');
    }
</script>

<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close" onclick="closeModal()">&times;</span>
    <!-- Your input fields for the new data -->
    <label for="newName">Name:</label>
    <input type="text" id="newName" name="newName">

    <label for="newPhoneNumber">Phone Number:</label>
    <input type="text" id="newPhoneNumber" name="newPhoneNumber">

    <label for="newAddress">Address:</label>
    <input type="text" id="newAddress" name="newAddress">

    <button onclick="addNewData()">Add New Data</button>
  </div>
</div>


{{-- Alamat Baru --}}
<script>
  // Dummy data array
  let dummyData = [
      {
          name: "Rosyidah",
          phoneNumber: "(+62)8123456789",
          address: "Jl. Mulyorejo Selatan II, No. 2, Surabaya MULYOREJO, SURABAYA, JAWA TIMUR, ID, 60112"
      },
      {
          name: "Samsudin",
          phoneNumber: "(+62)8123456789",
          address: "Jl. Mulyorejo Selatan II, No. 2, Surabaya MULYOREJO, SURABAYA, JAWA TIMUR, ID, 60112"
      },
      // Add more objects as needed
  ];

  // Function to open the modal
  function openModal() {
    const modal = document.getElementById('myModal');
    modal.style.display = 'block';
  }

  // Function to close the modal
  function closeModal() {
    const modal = document.getElementById('myModal');
    modal.style.display = 'none';
  }

  // Function to add new data to dummyData
  function addNewData() {
    const newName = document.getElementById('newName').value;
    const newPhoneNumber = document.getElementById('newPhoneNumber').value;
    const newAddress = document.getElementById('newAddress').value;

    // Check if all input fields are filled
    if (newName && newPhoneNumber && newAddress) {
      // Create a new data object
      const newData = {
        name: newName,
        phoneNumber: newPhoneNumber,
        address: newAddress,
      };

      // Add the new data to the beginning of the dummyData array
      dummyData.unshift(newData);

      // Close the modal
      closeModal();

      // Update the HTML to reflect the changes
      renderHTML(dummyData);
    } else {
      alert('Please fill in all fields.');
    }
  }


  // Function to create HTML elements based on the dummy data
  function renderHTML(data) {
      const dataContainer = document.getElementById('data-container');

      // Clear existing content
      dataContainer.innerHTML = '';

      data.forEach((item, index) => {
          const opsiDiv = document.createElement('div');
          opsiDiv.classList.add('opsi');

          // Option 1: Identity, Alamat, Utama
          const option1Div = document.createElement('div');
          option1Div.classList.add('option');

          const identityDiv = document.createElement('div');
          identityDiv.classList.add('identity');

          const nameH4 = document.createElement('h4');
          nameH4.textContent = `${item.name} |`;

          const phoneNumberH4 = document.createElement('h4');
          phoneNumberH4.textContent = item.phoneNumber;

          const addressP = document.createElement('p');
          addressP.classList.add('alamat');
          addressP.textContent = item.address;

          const utamaDiv = document.createElement('div');
          utamaDiv.classList.add(index === 0 ? 'utama' : 'utama-hidden');
          utamaDiv.textContent = 'Utama';

          identityDiv.appendChild(nameH4);
          identityDiv.appendChild(phoneNumberH4);

          option1Div.appendChild(identityDiv);
          option1Div.appendChild(addressP);
          option1Div.appendChild(utamaDiv);

          // Append Option 1 to the opsiDiv
          opsiDiv.appendChild(option1Div);

          // Option 2: Change and Atur
          const option2Div = document.createElement('div');
          option2Div.classList.add('option');

          const changeDiv = document.createElement('div');
          changeDiv.classList.add('change');

          const ubahLink = document.createElement('a');
          ubahLink.href = '#';
          ubahLink.classList.add('ubah');
          ubahLink.textContent = 'Ubah';

          const hapusLink = document.createElement('a');
          hapusLink.href = '#';
          hapusLink.classList.add(index === 0 ? 'hapus-hidden' : 'hapus');
          hapusLink.textContent = 'Hapus';

          changeDiv.appendChild(ubahLink);
          changeDiv.appendChild(hapusLink);

          const aturLink = document.createElement('a');
          aturLink.href = '#';
          aturLink.classList.add(index === 0 ? 'atur-hidden' : 'atur');
          aturLink.textContent = 'Atur sebagai utama';
          aturLink.dataset.index = index;

          // Append Option 2 to the opsiDiv
          option2Div.appendChild(changeDiv);
          option2Div.appendChild(aturLink);

          // Append Option 2 to the opsiDiv
          opsiDiv.appendChild(option2Div);

          // Append the opsiDiv to the dataContainer
          dataContainer.appendChild(opsiDiv);

          // Add a line separator between addresses, except for the last one
          if (index < data.length - 1) {
              const lineDiv = document.createElement('div');
              lineDiv.classList.add('line');
              dataContainer.appendChild(lineDiv);
          }
          // Attach event listeners to "Atur sebagai utama" links
   
        aturLink.addEventListener('click', (event) => {
            event.preventDefault(); // Prevent the default behavior of the link
            console.log('Clicked Index:', index);
            toggleUtamaVisibility(index);
        });
    });
}

// Function to update HTML when "Atur sebagai utama" is clicked
function toggleUtamaVisibility(index) {
    console.log('Before Update:', dummyData);

    // Check if the selected item is not already at the beginning
    if (index !== 0) {
        // Create a new array with the updated order
        dummyData = [
            dummyData[index],
            ...dummyData.slice(0, index),
            ...dummyData.slice(index + 1)
        ];
    } else {
        // If the selected item is already at the beginning, no need to reorder
        console.log('No need to reorder, already at the beginning.');
    }

    console.log('After Update:', dummyData);

    // Update the DOM without refreshing the page
    renderHTML(dummyData);
}

// Call the function to render initial HTML
renderHTML(dummyData);
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