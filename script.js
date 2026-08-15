
const body = document.body;
const themeToggle = document.getElementById('themeToggle');
const cartCount = document.getElementById('cartCount');
const toast = document.getElementById('toast');
let cart = 0;

function setTheme(theme){
  body.classList.toggle('dark', theme === 'dark');
  themeToggle.textContent = theme === 'dark' ? '☀' : '☾';
  localStorage.setItem('delvin-demo-theme', theme);
}
setTheme(localStorage.getItem('delvin-demo-theme') || 'light');

themeToggle.addEventListener('click', () => {
  setTheme(body.classList.contains('dark') ? 'light' : 'dark');
});

function showToast(text){
  toast.textContent = text;
  toast.classList.add('show');
  clearTimeout(window.__toast);
  window.__toast = setTimeout(() => toast.classList.remove('show'), 1800);
}

document.querySelectorAll('.heart').forEach(btn => {
  btn.addEventListener('click', () => {
    btn.textContent = btn.textContent.trim() === '♡' ? '♥' : '♡';
  });
});

document.querySelectorAll('.plus').forEach(btn => {
  btn.addEventListener('click', () => {
    cart++;
    cartCount.textContent = cart;
    showToast(`${btn.dataset.product} به سبد نمایشی اضافه شد.`);
  });
});

document.querySelectorAll('.tabs button').forEach(btn => {
  btn.addEventListener('click', () => {
    const key = btn.dataset.filter;
    document.querySelectorAll('.tabs button').forEach(x => x.classList.remove('active'));
    btn.classList.add('active');

    document.querySelectorAll('#productGrid .product').forEach(card => {
      const tags = card.dataset.tags.split(' ');
      card.style.display = key === 'all' || tags.includes(key) ? '' : 'none';
    });
  });
});

const searchForm = document.getElementById('searchForm');
searchForm.addEventListener('submit', (e) => {
  e.preventDefault();
  const q = document.getElementById('searchInput').value.trim().toLowerCase();
  if (!q) return;
  let matches = 0;
  document.querySelectorAll('.product').forEach(card => {
    const hit = card.dataset.name.toLowerCase().includes(q);
    card.style.display = hit ? '' : 'none';
    if (hit) matches++;
  });
  document.getElementById('productGrid').scrollIntoView({behavior:'smooth', block:'start'});
  showToast(matches ? `${matches} محصول پیدا شد.` : 'محصولی با این نام پیدا نشد.');
});
