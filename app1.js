//show cart

(function() {
  const cartInfo = document.getElementById("cart-info");
  const cart = document.getElementById("cart");

  cartInfo.addEventListener("click", function() {
    cart.classList.toggle("show-cart");
  });
})();

///add tocart

(function() {
  const cartBtn = document.querySelectorAll(".shop-item-button");
console.log(cartBtn);

  cartBtn.forEach(function(btn) {
    btn.addEventListener("click", function(event) {
      //console.log(event.target);
      console.log(88);

      let fullPath = event.target.parentElement.previousElementSibling.src;
      let pos = fullPath.indexOf("img") + 3;
      let partPath = fullPath.slice(pos);
      const item = {};
      item.img = `img-cart${partPath}`;
      let name =
        event.target.parentElement.parentElement.nextElementSibling.children[0]
          .children[0].textContent;
      item.name = name;
      let price =
        event.target.parentElement.parentElement.nextElementSibling.children[0]
          .children[1].textContent;
    
      let finalPrice = price.slice(1).trim();
      item.price = finalPrice;
      //console.log(name);
      console.log(item);
      
      const cartItem = document.createElement("div");
      cartItem.classList.add(
        "cart-item",
        "d-flex",
        "justify-content-between",
        "text-capitalize",
        "my-3"
      );
      
      cartItem.innerHTML = `
  <img src="${item.img}" class="img-fluid rounded-circle" id="item-img" alt="">
  <div class="item-text">
  
    <p id="cart-item-title" class="font-weight-bold mb-0">${item.name}</p>
    <span>$</span>
    <span id="cart-item-price" class="cart-item-price" class="mb-0">${item.price}</span>
  </div>
  <a href="#" id='cart-item-remove' class="cart-item-remove">
    <i class="fas fa-trash"></i>
  </a>
</div>
`;
  
      //select cart
      const cart = document.getElementById("cart");
      const total = document.querySelector(".cart-total-container");
      cart.insertBefore(cartItem, total);
      //alert("item added");
      showTotals();
    });
  });
  // function showTotals() {
  //   const total = [];
  //   const item = document.querySelectorAll(".cart-item-price");
  //   item.forEach(function(item) {
  //     total.push(parseFloat(item.textContent));
  //   });
  //   console.log(total);
  //   const totalMoney = total
  //     .reduce(function(total, item) {
  //       total += item;
  //       return total;
  //     }, 0)
  //     .toFixed(2);
  //     document.getElementById("cart-total").textContent = totalMoney;
  //     document.querySelector(".item-total").textContent = totalMoney;
  //     document.getElementById("item-count").textContent = total.length;


  //   // console.log(totalMoney);
  // }
})();
