const body = document.body;
const themeToggle = document.getElementById("themeToggle");
const themeIcon = document.getElementById("themeIcon");
const cartCount = document.getElementById("cartCount");
const toast = document.getElementById("toast");
const menuToggle = document.getElementById("menuToggle");
const mobileNav = document.getElementById("mobileNav");
let count = 0;

const savedTheme = localStorage.getItem("varena-theme");
if (savedTheme === "dark") {
  body.classList.add("dark");
  themeIcon.textContent = "☀";
}

themeToggle.addEventListener("click", () => {
  body.classList.toggle("dark");
  const dark = body.classList.contains("dark");
  themeIcon.textContent = dark ? "☀" : "☾";
  localStorage.setItem("varena-theme", dark ? "dark" : "light");
});

menuToggle.addEventListener("click", () => {
  mobileNav.classList.toggle("open");
});

document.querySelectorAll(".mobile-nav a").forEach(link => {
  link.addEventListener("click", () => mobileNav.classList.remove("open"));
});

document.querySelectorAll(".add-btn").forEach(btn => {
  btn.addEventListener("click", () => {
    count++;
    cartCount.textContent = count;
    toast.textContent = `${btn.dataset.product} به سبد خرید اضافه شد.`;
    toast.classList.add("show");
    setTimeout(() => toast.classList.remove("show"), 2200);
  });
});

document.querySelectorAll(".heart").forEach(btn => {
  btn.addEventListener("click", () => {
    btn.textContent = btn.textContent === "♥" ? "♡" : "♥";
  });
});

const filters = document.querySelectorAll(".filter-chip");
const products = document.querySelectorAll(".product-card");

filters.forEach(filter => {
  filter.addEventListener("click", () => {
    filters.forEach(item => item.classList.remove("active"));
    filter.classList.add("active");

    const key = filter.dataset.filter;
    products.forEach(product => {
      const tags = product.dataset.tags.split(" ");
      product.style.display = key === "all" || tags.includes(key) ? "" : "none";
    });
  });
});
