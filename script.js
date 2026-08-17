
document.addEventListener('DOMContentLoaded',()=>{
  const body=document.body, theme=document.getElementById('themeToggle'), cart=document.getElementById('cartCount'), toast=document.getElementById('toast');
  let n=0;
  const saved=localStorage.getItem('delvin-client-theme')||'light';
  const setTheme=t=>{body.classList.toggle('dark',t==='dark');theme.textContent=t==='dark'?'☀':'☾';localStorage.setItem('delvin-client-theme',t)};
  setTheme(saved);
  theme.addEventListener('click',()=>setTheme(body.classList.contains('dark')?'light':'dark'));
  const show=s=>{toast.textContent=s;toast.classList.add('show');clearTimeout(window._t);window._t=setTimeout(()=>toast.classList.remove('show'),1800)};
  document.querySelectorAll('.heart').forEach(b=>b.onclick=()=>b.textContent=b.textContent==='♡'?'♥':'♡');
  document.querySelectorAll('.plus').forEach(b=>b.onclick=()=>{cart.textContent=++n;show(`${b.dataset.product} به سبد نمایشی اضافه شد.`)});
  document.querySelectorAll('.tabs button').forEach(b=>b.onclick=()=>{
    document.querySelectorAll('.tabs button').forEach(x=>x.classList.remove('active'));b.classList.add('active');
    const key=b.dataset.filter;
    document.querySelectorAll('#productGrid .product').forEach(c=>c.style.display=key==='all'?'':(c.querySelector('small').textContent.includes('دوشی')&&key==='shoulder'?'':''));
  });
});
