const orderNow = document.getElementById('order-now');
const itemName = document.getElementById('item-name');
const price = document.getElementById('price');
const quantity = document.getElementById('quantity_p');
const productSection = document.getElementById('single-product-section');
const checkout = document.getElementById('checkout');
if(orderNow) {
   orderNow.addEventListener('click', () => {
      if(quantity.value > 0) {
         let data = {
            username: productSection.dataset.uname,
            item: itemName.innerText,
            price: price.innerText,
            quantity: quantity.value
         };
         localStorage.setItem('order-data', JSON.stringify(data));
         window.location.href = '/fine_art_shop/payment.php';
      } else {
         alert('The quantity should be larger than 0');
      }
   });
}

if(checkout) {
   checkout.addEventListener('click', ()=>{
      let data = JSON.parse(localStorage.getItem('order-data'));
      order('/fine_art_shop/services/order.php', data).then((response)=>{
          console.log(response);
          if(response['message'] === 'order-added-successfully') {
             alert("Your order is successful.");
          } else if(response['message'] === 'quantity-exceeds') {
             alert("Please enter a small quantity.");
          }
      });
   });

   async function order(url, data) {
      const response = await fetch(url, {
         method: 'POST',
         headers: {
            'Content-Type':'application/json'
         },
         body: JSON.stringify(data)
      });
      return response.json();
   }
}

