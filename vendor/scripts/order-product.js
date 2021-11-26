const orderNow = document.getElementById('order-now');
const itemName = document.getElementById('item-name');
const price = document.getElementById('price');
const quantity = document.getElementById('quantity_p');
const productSection = document.getElementById('single-product-section');

orderNow.addEventListener('click', ()=>{
   let data = {username: productSection.dataset.uname, item: itemName.innerText, price: price.innerText, quantity: quantity.value};
   order('/fine_art_shop/services/order.php', data).then((response)=>{
      console.log(response);
      if(response['message'] === 'order-added-successfully') {
         window.location.href = '/fine_art_shop/payment.php';
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