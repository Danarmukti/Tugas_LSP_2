window.addEventListener("scroll", () => {
  const navbar = document.getElementById("navbar1");
  const scrollThreshold = 50; // Ukuran scroll sebelum class ditambahkan

  if (window.scrollY > scrollThreshold) {
    navbar.classList.add("navbar-colored");
  } else {
    navbar.classList.remove("navbar-colored");
  }
});

const sections = document.querySelectorAll("section");
const navLinks = document.querySelectorAll(".nav-link");

function updateActiveNavLink() {
  let index = sections.length;

  while (--index && window.scrollY + 50 < sections[index].offsetTop) {}

  navLinks.forEach((link) => link.classList.remove("active-link"));
  navLinks[index].classList.add("active-link");
}

window.addEventListener("scroll", updateActiveNavLink);

updateActiveNavLink();
