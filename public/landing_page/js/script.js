// Magicline
var myMagicLine = new magicLine(document.querySelectorAll(".nav-menu"), {
  mode: "line",
  lineStrength: 3,
  animationCallback: function (el, params) {
    anime({
      targets: el,
      left: params.left,
      top: params.top,
      width: params.width,
      height: params.height,
    });
  },
});
myMagicLine.init();

const navLinks = document.querySelectorAll(".nav-link");

navLinks.forEach((link) => {
  link.addEventListener("click", () => {
    const activeLink = document.querySelector(".act");
    activeLink.classList.remove("act");
    link.classList.add("act");
  });
});

