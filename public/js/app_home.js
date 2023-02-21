const navBtn = document.querySelector("#menu");
const menuBar = document.querySelector('[role = "menubar"]');

// navBtn.addEventListener("click", navTabfunction());

// function navTabfunction() {
//     const isExpanded = JSON.parse(
//         navBtn.getAttribute("aria-expanded"),
//         !isExpanded
//     );
//     menuBar.classList.toggle("hidden");
//     menubar.classList.toggle("flex");
// }

navBtn.addEventListener("click", function () {
    // const isExpanded = JSON.parse(navBtn.getAttribute("aria-expanded"));
    // navBtn.setAttribute("aria-expanded", !isExpanded);
    menuBar.classList.toggle("hidden");
    // menuBar.classList.toggle("flex");
});
