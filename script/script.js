dcdd
// header scrolling effect

window.onscroll = function() {

     // Get the navbar
    var navbar = document.querySelector("#navbar");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function NavbarStick() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
    NavbarStick();
    
    // Header logo animation

    const distance = window.scrollY;
    if (distance <100) {
        document.querySelector(".home-header__img").style.filter = `drop-shadow(${35 - distance *  0.3}px ${29 - distance *  0.3}px 5px)`;
        document.querySelector(".home-header__img").style.marginLeft  = `${distance *  0.03}px`;
        document.querySelector(".home-header__img").style.marginTop  = `${distance *  0.03}px`;
        document.querySelector(".home-header__img").style.transform = `scale(${1 - distance *  0.001})`;
    }
};


// --------------------------------------------------
// classes system

const classes = document.querySelectorAll(".class");
const classContainer = document.querySelector(".home-classes");
const classNames = [];

function classFilter() {

  // get content and create array
  [...classes].forEach(element => {
    let content = element.textContent;
    element.parentNode.setAttribute("data", content.toLowerCase());
    classNames.push(content);
  });

  // create filter buttons container
   const createFilterContainer = document.createElement("div");
   createFilterContainer.classList.add("filter-container");

   classContainer.prepend(createFilterContainer);


  // loop through array and create filter buttons



  // delete duplicates in array
  const unique = [...new Set(classNames)];

   //create filter buttons
  [...unique].forEach(filter => {

    const createFilterBtn = document.createElement("button");
    createFilterBtn.classList.add("filter", filter.toLowerCase());
    createFilterBtn.setAttribute("data", filter.toLowerCase());
    createFilterBtn.innerHTML = filter;

    createFilterContainer.prepend(createFilterBtn);

  });


  // filter button logic
  const filterBtn = document.querySelectorAll(".filter");
  [...filterBtn].forEach(btn => {
    btn.addEventListener("click", () => {

      let btnData = btn.getAttribute("data");
      let getSameBtns = document.querySelectorAll(`[data="${btnData}"]`);

      if (btn.classList.contains("active")) {
        [...getSameBtns].forEach(Btns => {
            Btns.classList.remove("active");
        });
      } else {
        [...getSameBtns].forEach(Btns => {
            Btns.classList.add("active");
        });
      }
    })
  });
}


classFilter();





// instgram json

//var getJSON = function(url) {
//  return new Promise(function(resolve, reject) {
//    var xhr = new XMLHttpRequest();
//    xhr.open('get', url, true);
//    xhr.responseType = 'json';
//    xhr.onload = function() {
//      var status = xhr.status;
//      if (status == 200) {
//        resolve(xhr.response);/*  w w w    .  d  e m o  2   s .    c  o m */
//      } else {
//        reject(status);
//      }
//    };
//    xhr.send();
//  });
//};
//getJSON('https://www.instagram.com/50square_training_studio/?__a=1').then(function(data) {
//    document.write("<br/>"+'Your Json result is:  ' + data.result); //you can comment this, i used it to debug
//    result.innerText = data.result; //display the result in an HTML element
//}, function(status) { //error detection....
//  document.write("<br/>"+'Something went wrong.');
//});
//