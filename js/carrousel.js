var tImages = [
  "image_boutique/affiche_décoration.png",
  "image_boutique/affiche_vetement.png",
  "image_boutique/auto_collant_pikachu.jpg",
];

const carrousel_left = document.querySelector(".carrousel_left");
const carrousel_right = document.querySelector(".carrousel_right");

let counter = 0;

function caroussel_left() {
  console.log(counter);
  if (counter != 0) {
    counter--;
  } else {
    counter = tImages.length - 1;
  }
  let DIV = document.createElement("div");
  DIV.classList.add("album_pic");
  DIV.innerHTML = `<img src="${tImages[counter]}" class="track_art" alt="cover image">`;

  let Cover_image = document.querySelector(".album_pic");
  Cover_image.replaceWith(DIV);
}

function caroussel_right() {
  console.log(tImages.length);

  if (counter > tImages.length - 2) {
    counter = 0;
  } else {
    counter++;
  }
  console.log(counter);
  let DIV = document.createElement("div");
  DIV.classList.add("album_pic");
  DIV.innerHTML = `<img src="${tImages[counter]}" class="track_art" alt="cover image">`;

  let Cover_image = document.querySelector(".album_pic");
  Cover_image.replaceWith(DIV);
}

carrousel_left.addEventListener("click", caroussel_left);
carrousel_right.addEventListener("click", caroussel_right);
