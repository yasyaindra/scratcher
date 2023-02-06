const menuToggle = document.querySelector(".menu-toggle input");
const body = document.body;
const nameImg = ["mountain", "sea", "forrest", "dessert", "lake", "village"];
// const input = document.querySelector(".contact_input");

const nav = document.querySelector("nav ul");

menuToggle.addEventListener("click", () => {
    nav.classList.toggle("slide");

    if (nav.className == "slide") {
        body.style = "overflow-y:hidden";
    } else {
        body.style = "overflow-y:auto";
    }
});
// nameImg.forEach((e) => {
//     const img = document.createElement("img");
//     const gallery = document.querySelector(".gallery");
//     img.setAttribute("src", `https://source.unsplash.com/random/200x200/?${e}`);
//     gallery.append(img);
// });
