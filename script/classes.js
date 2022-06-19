// classes system
console.log("class system loading");

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

export {classFilter};