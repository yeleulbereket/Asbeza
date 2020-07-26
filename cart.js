(function() {
    const cartBtn = document.querySelectorAll(".shop-item-button");
  
    cartBtn.forEach(function(btn) {
      btn.addEventListener("click", function(event) {
        console.log(event.target);
        let name =
          event.target.parentElement.parentElement.parentElement.children[0].textContent;
          let price =
          event.target.parentElement.parentElement.parentElement.children[1].children[0].children[0].textContent;
       console.log(name,price);
       const cart = document.getElementById("cart-table");

        console.log(cart);
      });
    });
    // 
  })();