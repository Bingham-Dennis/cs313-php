const items = [
  {
    id: 1,
    name: 'Bruno',
    image: 'https://images.dog.ceo/breeds/malamute/n02110063_11227.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 2,
    name: 'Spot',
    image: 'https://images.dog.ceo/breeds/cairn/n02096177_170.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 3,
    name: 'Roxy',
    image: 'https://images.dog.ceo/breeds/saluki/n02091831_7977.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 4,
    name: 'Snazzy',
    image: 'https://images.dog.ceo/breeds/spaniel-sussex/n02102480_5703.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 5,
    name: 'Zazzles',
    image: 'https://images.dog.ceo/breeds/springer-english/n02102040_6603.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 6,
    name: 'Tanner',
    image: 'https://images.dog.ceo/breeds/appenzeller/n02107908_3119.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 7,
    name: 'Goldie',
    image: 'https://images.dog.ceo/breeds/labrador/n02099712_4323.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 8,
    name: 'Yeller',
    image: 'https://images.dog.ceo/breeds/collie/n02106030_10021.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 9,
    name: 'Dexter',
    image: 'https://images.dog.ceo/breeds/newfoundland/n02111277_612.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 10,
    name: 'Bandit',
    image: 'https://images.dog.ceo/breeds/beagle/n02088364_7927.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 11,
    name: 'Sargent',
    image: 'https://images.dog.ceo/breeds/schnauzer-miniature/n02097047_509.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 12,
    name: 'Fluffy',
    image: 'https://images.dog.ceo/breeds/maltese/n02085936_7941.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 13,
    name: 'Bruce',
    image: 'https://images.dog.ceo/breeds/rottweiler/n02106550_11870.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 14,
    name: 'Gizmo',
    image: 'https://images.dog.ceo/breeds/cockapoo/bubbles2.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 15,
    name: 'Gracie',
    image: 'https://images.dog.ceo/breeds/basenji/n02110806_1100.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 16,
    name: 'Lady',
    image: 'https://images.dog.ceo/breeds/springer-english/n02102040_2481.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He love playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  }
];

function loadItems() {
  items.forEach((dog) => {
    let div = document.createElement('div');
    div.setAttribute('class', 'card');

    let h4 = document.createElement('h4');
    h4.setAttribute('class', 'cardContent');
    h4.innerHTML = dog.name;
    div.appendChild(h4);

    let i = document.createElement('img');
    i.setAttribute('src', dog.image);
    i.setAttribute('alt', 'dog picture');
    div.appendChild(i);

    let p = document.createElement('p');
    p.setAttribute('class', 'cardContent');
    p.innerHTML = dog.description;
    div.appendChild(p);

    let b = document.createElement('button');
    b.innerHTML = dog.button;
    b.setAttribute('id', dog.id);
    b.setAttribute('onclick', `addToCart(${dog.id})`);
    div.appendChild(b);

    document.getElementById('content').appendChild(div);
  });
}

function addToCart(id) {
  console.log(id);
  let dog = items.find( item => item.id === id);
  console.log(dog);

  $.post('./store.php', dog);
}

// @help: You are here!
function getCartItems() {
  let data = getData("GET", "cart.php", true);
  data.forEach((dog) => {
    console.log(dog);
  });
}

function getData(actionType, url, sync) {
  var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    var data = JSON.parse(this.responseText);
  }
};
xmlhttp.open(actionType, url, sync);
xmlhttp.send();
}
