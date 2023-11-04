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