function openProduct(event, productId) {
    var i, desc, icon;

    desc = document.getElementsByClassName("desc");
    for (i = 0; i < desc.length; i++) {
      desc[i].classList.remove("selected");
    }
  
    icon = document.getElementsByClassName("icon");
    for (i = 0; i < icon.length; i++) {
      icon[i].classList.remove("selected");
    }

    document.getElementById(productId).classList.add("selected");
    event.currentTarget.classList.add("selected");
  }

document.getElementById("defaultOpen").click();

document.addEventListener('DOMContentLoaded', function () {
  const prodList = document.querySelector('.prodlist');
  const prodChoices = document.querySelectorAll('.prodchoice');
  const itemsPerPage = 6;

function showPage(pageNumber) {
  const startIndex = (pageNumber - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;

  prodChoices.forEach((choice, index) => {
      choice.style.display = (index >= startIndex && index < endIndex) ? 'block' : 'none';
  });
}

function setupPagination() {
  const totalPages = Math.ceil(prodChoices.length / itemsPerPage);

  const pagination = document.querySelector('.pagination');
  for (let i = 1; i <= totalPages; i++) {
      const pageLink = document.createElement('a');
      pageLink.href = '#';
      pageLink.textContent = i;
      pagination.appendChild(pageLink);

      pageLink.addEventListener('click', function (event) {
          event.preventDefault();
          const pageNumber = parseInt(event.target.textContent);
          showPage(pageNumber);
          updateActivePage(pageNumber);
      });
  }

  showPage(1);
  updateActivePage(1);
}

function updateActivePage(pageNumber) {
  const pageLinks = document.querySelectorAll('.pagination a');
  pageLinks.forEach(link => link.classList.remove('active'));
  pageLinks[pageNumber - 1].classList.add('active');
}

setupPagination();
});