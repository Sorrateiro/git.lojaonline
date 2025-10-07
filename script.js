function addToCart(id) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  cart.push(id);
  localStorage.setItem("cart", JSON.stringify(cart));
  alert("Produto adicionado ao carrinho!");
}

function addToFavorites(id) {
  let favs = JSON.parse(localStorage.getItem("favorites")) || [];
  favs.push(id);
  localStorage.setItem("favorites", JSON.stringify(favs));
  alert("Produto adicionado aos favoritos!");
}
