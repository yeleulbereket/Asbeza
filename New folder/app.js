// (function() {

//   // ('.details_button').on('click', function() {
//   //   $('#details_modal').modal('show');

//   //   console.log(1234567);

//   //   $div = $(this).closest('div');
//   //   var data = $div.children("input").map(function(){
//   //     return $(this).text();
//   //   }).get();
//   //   });
//     // var data = $tr.children("td").map(function() {
//     // 	return $(this).text();
//     // }).get();
//     let btn = document.getElementById("details_button");
//       btn.addEventListener("click", function(event){

//       console.log(btn);
//     });
//     console.log(1234567);

//     });
(function() {
  const cartBtn = document.querySelectorAll(".shop-item-button");
  const cart = document.getElementById("cart");
  let x = 0;
  let detailsBtn = document.querySelectorAll(".details_button");
  let dd = document.getElementById("detailsmodal");

  let tot;

  detailsBtn.forEach(function(det) {
    det.addEventListener("click", function(event) {
      $div = $(this).closest("div");
      var data = $div
        .children("input")
        .map(function() {
          return $(this).val();
        })
        .get();
      let name = data[0];
      let image = data[1];
      let price = data[2];
      let detail = data[3];
      console.log(data[0]);
      console.log(data[1]);
      console.log(data[2]);
      console.log(data[3]);

      $("details_id").val(data[0]);
      dd.innerHTML = `
<img class="img-fluid" src="${image}" alt="" style="width: 35% ">

						<h3>${name}</h3>
            <p class="price"><span>ETB-${price}</span></p>
            <p class="detail">${detail}</p>
`;
    });
  });

  cartBtn.forEach(function(btn) {
    btn.addEventListener("click", function(event) {
      const item = {};
      console.log(btn);
      //   if(x==0){
      let name =
        event.target.parentElement.parentElement.parentElement.children[0]
          .textContent;
      let id =
        event.target.parentElement.parentElement.parentElement.children[1]
          .value;
      console.log(id);
      let price = event.target.parentElement.parentElement.parentElement.children[2].children[0].children[0].textContent
        .slice(4)
        .trim();

      console.log(price);
      console.log(name);
      let image = event.target.parentElement.children[3].value;
      console.log(image);
      item.name = name;
      item.price = price;
      console.log(id);

      //   x = x+1;
      // }
      // else{
      //     cartBtn.disabled=true;
      // }
      const cartItem = document.createElement("div");
      cartItem.classList.add(
        "cart-item",
        "d-flex",
        "justify-content-between",
        "text-capitalize",
        "my-3"
      );
      cartItem.setAttribute("id", id);

      //       cartItem.innerHTML = `

      // <td>
      //    <img class="img-fluid" src="${image}" alt="" style="width: 11%  ">
      // </td>
      // <td>
      //    <p id="cart-item-title" class="font-weight-bold mb-0">${item.name}</p>
      // </td>
      // <td>
      //    <span id="cart-item-price" class="cart-item-price" class="mb-0">${item.price}</span>
      // </td>
      // <td>
      //    <a href="#" align="right" id='cart-item-remove' class="cart-item-remove">
      //    </td>

      // `;
      cartItem.innerHTML = `
<img src="${image}" class="img-fluid rounded-circle" id="item-img" alt=""style="width:11%">
<div class="item-text">

  <p id="cart-item-title" id="cart-item-title" name="name" class="font-weight-bold mb-0">${item.name}${id}</p>
  <span>$</span>
  <span id="cart-item-price" id="cart-item-price" name="price" class="cart-item-price">${item.price}</span>
</div>
`;
      console.log(name + price);

      // $.post("checkout.php", {
      //   name: name,
      //   price: price,
      //   id: id
      // });
      var link = document.createElement("a");
      link.setAttribute("class", "cart-item-remove icon-delete");
      link.setAttribute("id", id);
      link.setAttribute("value", price);
      // link.setAttribute("onclick", dele());
      cartItem.appendChild(link);

      const cart = document.getElementById("carter");
      const total = document.querySelector(".cart-total-container");
      cart.insertBefore(cartItem, total);
      showTotals();

      $(document).on("click", ".cart-item-remove", function() {
        console.log(
          document.getElementById("carter") + " " + $(this).attr("id")
        );
        const parent = document.getElementById("carter");
        const child = $(this).attr("id");
        console.log(
          parent +
            " " +
            child +
            " " +
            $(this).attr("id") +
            " " +
            parseFloat($(this).attr("value")) +
            " " +
            tot
        );
        tot = tot - parseFloat($(this).attr("value"));
        distot(tot);
        parent.removeChild(document.getElementById(child));
      });
    });
  });

  function showTotals() {
    let total = [];
    const item = document.querySelectorAll(".cart-item-price");
    item.forEach(function(item) {
      total.push(parseFloat(item.textContent));

      console.log(total.length);
    });
    tot = total[0];

    for (var i = 1; i < total.length - 1; i++) {
      tot = tot + parseFloat(total[i]);
    }

    console.log(total.length - 1);
    let totlen = total.length;
    //document.getElementById("item-count").textContent = totlen;
    if (totlen == 1) {
      document.getElementById("item-count").textContent = totlen;
      console.log(total.length);
    } else {
      document.getElementById("item-count").textContent = totlen - 1;
    }
    // console.log(totalMoney);
    distot(tot);

    // document.getElementById("item-count").textContent = total.length;
  }
  function distot(total) {
    document.getElementById("cart-total").textContent = total;
    // console.log(document.querySelectorAll(".cart-item-remove"));
  }

  function dele() {}
})();
