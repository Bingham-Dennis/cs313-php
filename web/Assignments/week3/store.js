const items = [
  {
    id: 1,
    name: 'Bruno',
    image: 'https://images.dog.ceo/breeds/malamute/n02110063_11227.jpg',
    description: 'Bruno, is a fun loving dog that just wants a new forever home. He loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 2,
    name: 'Spot',
    image: 'https://images.dog.ceo/breeds/cairn/n02096177_170.jpg',
    description: 'Spot, is a fun loving dog that just wants a new forever home. He loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 3,
    name: 'Roxy',
    image: 'https://images.dog.ceo/breeds/saluki/n02091831_7977.jpg',
    description: 'Rpxy, is a fun loving dog that just wants a new forever home. She loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 4,
    name: 'Snazzy',
    image: 'https://images.dog.ceo/breeds/spaniel-sussex/n02102480_5703.jpg',
    description: 'Snazzy, is a fun loving dog that just wants a new forever home. He loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 5,
    name: 'Zazzles',
    image: 'https://images.dog.ceo/breeds/springer-english/n02102040_6603.jpg',
    description: 'Zazzles, is a fun loving dog that just wants a new forever home. She loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 6,
    name: 'Tanner',
    image: 'https://images.dog.ceo/breeds/appenzeller/n02107908_3119.jpg',
    description: 'Tanner, is a fun loving dog that just wants a new forever home. He loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 7,
    name: 'Goldie',
    image: 'https://images.dog.ceo/breeds/labrador/n02099712_4323.jpg',
    description: 'Goldie, is a fun loving dog that just wants a new forever home. She loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 8,
    name: 'Yeller',
    image: 'https://images.dog.ceo/breeds/collie/n02106030_10021.jpg',
    description: 'Yeller, is a fun loving dog that just wants a new forever home. He loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 9,
    name: 'Dexter',
    image: 'https://images.dog.ceo/breeds/newfoundland/n02111277_612.jpg',
    description: 'Dexter, is a fun loving dog that just wants a new forever home. He loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 10,
    name: 'Bandit',
    image: 'https://images.dog.ceo/breeds/beagle/n02088364_7927.jpg',
    description: 'Bandit, is a fun loving dog that just wants a new forever home. He loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 11,
    name: 'Sargent',
    image: 'https://images.dog.ceo/breeds/schnauzer-miniature/n02097047_509.jpg',
    description: 'Sargent, is a fun loving dog that just wants a new forever home. He loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 12,
    name: 'Fluffy',
    image: 'https://images.dog.ceo/breeds/maltese/n02085936_7941.jpg',
    description: 'Fluffy, is a fun loving dog that just wants a new forever home. She loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 13,
    name: 'Bruce',
    image: 'https://images.dog.ceo/breeds/rottweiler/n02106550_11870.jpg',
    description: 'Bruce, is a fun loving dog that just wants a new forever home. He loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 14,
    name: 'Gizmo',
    image: 'https://images.dog.ceo/breeds/cockapoo/bubbles2.jpg',
    description: 'Gizmo, is a fun loving dog that just wants a new forever home. He loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 15,
    name: 'Gracie',
    image: 'https://images.dog.ceo/breeds/basenji/n02110806_1100.jpg',
    description: 'Gracie, is a fun loving dog that just wants a new forever home. She loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  },
  {
    id: 16,
    name: 'Lady',
    image: 'https://images.dog.ceo/breeds/springer-english/n02102040_2481.jpg',
    description: 'Lady, is a fun loving dog that just wants a new forever home. She loves playing fetch and giving love to anyone who wants it.',
    button: 'Add To Cart'
  }
];

var count = 0;

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

function removeFromCart(id) {
  console.log(`Removing ${id} from cart.`);
}

async function getData() {
  let result;

  try {
    result = await $.ajax({
        url: './cart.php',
        type: 'GET'
    });

    return result;
  } catch (error) {
    console.error(error);
  }
}

async function getCartItems() {
  let data = JSON.parse(await getData());
  console.log(data);
  if (data !== undefined) {
    data.forEach((dog) => {
      let div = document.createElement('div');
      div.setAttribute('class', 'cartCard');

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
      b.innerHTML = 'Remove';
      b.setAttribute('id', dog.id);
      b.setAttribute('onclick', `removeFromCart(${dog.id})`);
      div.appendChild(b);

      document.getElementById('content').appendChild(div);
    });
  } else {
    console.log("You have no items in your cart");
  }
}

async function numItems() {
  let data = JSON.parse(await getData());
  console.log(data);
  data.forEach((item) => {
    count++;
  });
  document.getElementById('count').innerHTML = count;
}
