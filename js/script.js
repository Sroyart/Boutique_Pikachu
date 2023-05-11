const primaryNav = document.querySelector(".nav-list");
const btn = document.querySelector(".menu-btn");

let test = false;

primaryNav.setAttribute("data-visible", false);
function showMsg() {
  if (test === false) {
    test = true;
  } else if (test === true) {
    test = false;
  }
  primaryNav.setAttribute("data-visible", test);
  console.log(test);

  // console.log(primaryNav.getAttribute("data-visible", true));
}

btn.addEventListener("click", showMsg);
