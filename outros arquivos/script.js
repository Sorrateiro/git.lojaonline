function addToCart(id) {
  let cart = JSON.parse(localStorage.getItem("cart")) || [];
  if (!cart.includes(id)) {
    cart.push(id);
    localStorage.setItem("cart", JSON.stringify(cart));
    alert("Produto adicionado ao carrinho!");
  } else {
    alert("Produto já está no carrinho!");
  }
}

function addToFavorites(id) {
  let favs = JSON.parse(localStorage.getItem("favorites")) || [];
  if (!favs.includes(id)) {
    favs.push(id);
    localStorage.setItem("favorites", JSON.stringify(favs));
    alert("Produto adicionado aos favoritos!");
  } else {
    alert("Produto já está nos favoritos!");
  }
}
