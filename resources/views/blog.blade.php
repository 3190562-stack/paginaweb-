<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>BlogUSAP – Diseño & Desarrollo</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
  <style>
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

    body {
      font-family: 'Inter', sans-serif;
      background: #f5f5f5;
      color: #222;
    }

    a { text-decoration: none; color: inherit; }
    img { display: block; max-width: 100%; }

    /* ── TOP BAR ── */
    .topbar {
      background: #1db954;
      color: #fff;
      text-align: center;
      padding: .55rem 1rem;
      font-size: .82rem;
      font-weight: 500;
    }
    .topbar a { color: #fff; font-weight: 700; text-decoration: underline; }

    /* ── NAVBAR ── */
    .navbar {
      background: #1a1a1a;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 2rem;
      height: 54px;
    }
    .navbar__brand {
      display: flex; align-items: center; gap: .6rem;
      color: #fff; font-weight: 700; font-size: 1.1rem;
      letter-spacing: .5px;
    }
    .navbar__brand-icon {
      width: 28px; height: 28px;
      border: 2px solid #fff;
      display: flex; align-items: center; justify-content: center;
      font-size: .65rem; font-weight: 800; color: #fff;
    }
    .navbar__links {
      display: flex; gap: 0; list-style: none;
    }
    .navbar__links a {
      color: #ccc; font-size: .8rem; font-weight: 600;
      padding: .4rem 1rem;
      letter-spacing: .06em;
      text-transform: uppercase;
      transition: color .15s;
      border-right: 1px solid #333;
    }
    .navbar__links li:first-child a { border-left: 1px solid #333; }
    .navbar__links a:hover { color: #fff; }
    .navbar__search-icon {
      color: #ccc; cursor: pointer; font-size: 1.1rem;
    }
    .hamburger {
      display: none; flex-direction: column; gap: 5px; cursor: pointer;
    }
    .hamburger span { display: block; width: 22px; height: 2px; background: #fff; border-radius: 2px; }

    /* ── SEARCH BAR ── */
    .search-section {
      background: #fff;
      padding: 1.5rem 2rem;
      border-bottom: 1px solid #e0e0e0;
    }
    .search-bar {
      max-width: 860px;
      margin: 0 auto;
      display: flex;
      border: 1px solid #ccc;
      border-radius: 4px;
      overflow: hidden;
    }
    .search-bar input {
      flex: 1;
      border: none; outline: none;
      padding: .75rem 1rem;
      font-size: .95rem;
      color: #555;
    }
    .search-bar__category {
      display: flex; align-items: center;
      border-left: 1px solid #ccc;
      padding: 0 1rem;
      font-size: .85rem; color: #555;
      gap: .4rem; cursor: pointer;
      background: #fafafa;
      white-space: nowrap;
    }
    .search-bar__btn {
      background: #1db954; color: #fff;
      border: none; padding: 0 1.5rem;
      font-size: .95rem; font-weight: 700;
      cursor: pointer; transition: background .15s;
    }
    .search-bar__btn:hover { background: #17a348; }
    .search-caption {
      text-align: center;
      margin-top: .6rem;
      font-size: .8rem; color: #888;
    }

    /* ── CONTAINER ── */
    .container { max-width: 1100px; margin: 0 auto; padding: 0 1.5rem; }

    /* ── MAIN LAYOUT ── */
    .main-layout {
      display: grid;
      grid-template-columns: 1fr 280px;
      gap: 2rem;
      padding: 2rem 0;
    }

    /* ── POSTS GRID ── */
    .posts-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
    }

    .post-card {
      background: #fff;
      border-radius: 4px;
      overflow: hidden;
      box-shadow: 0 1px 4px rgba(0,0,0,.08);
      transition: box-shadow .2s;
      cursor: pointer;
    }
    .post-card:hover { box-shadow: 0 4px 16px rgba(0,0,0,.13); }

    .post-card__img {
      width: 100%; height: 180px;
      object-fit: cover;
      display: flex; align-items: center; justify-content: center;
      font-size: 3.5rem;
    }

    .post-card__body { padding: 1rem; }

    .post-card__tags {
      display: flex; flex-wrap: wrap; gap: .35rem;
      margin-bottom: .6rem;
    }
    .tag {
      background: #1db954; color: #fff;
      font-size: .68rem; font-weight: 700;
      padding: .2rem .55rem; border-radius: 3px;
      text-transform: uppercase; letter-spacing: .04em;
    }
    .tag.alt { background: #555; }
    .tag.blue { background: #2563eb; }
    .tag.orange { background: #f59e0b; }
    .tag.red { background: #ef4444; }
    .tag.purple { background: #8b5cf6; }

    .post-card__title {
      font-size: .95rem; font-weight: 700;
      line-height: 1.35; margin-bottom: .5rem;
      color: #1a1a1a;
    }
    .post-card__excerpt {
      font-size: .78rem; color: #666;
      line-height: 1.6; margin-bottom: .75rem;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
    .post-card__meta {
      font-size: .72rem; color: #999;
      display: flex; align-items: center; gap: .4rem;
      border-top: 1px solid #f0f0f0; padding-top: .6rem;
    }
    .post-card__meta .dot { color: #ccc; }

    /* ── SIDEBAR ── */
    .sidebar { display: flex; flex-direction: column; gap: 1.5rem; }

    .widget {
      background: #fff;
      border-radius: 4px;
      box-shadow: 0 1px 4px rgba(0,0,0,.08);
      overflow: hidden;
    }
    .widget__header {
      background: #1a1a1a; color: #fff;
      padding: .65rem 1rem;
      font-size: .8rem; font-weight: 700;
      text-transform: uppercase; letter-spacing: .08em;
    }
    .widget__body { padding: 1rem; }

    /* Category list */
    .cat-list { list-style: none; }
    .cat-list li {
      display: flex; justify-content: space-between;
      align-items: center;
      padding: .5rem .2rem;
      border-bottom: 1px solid #f0f0f0;
      font-size: .85rem; cursor: pointer;
      transition: color .15s;
    }
    .cat-list li:last-child { border-bottom: none; }
    .cat-list li:hover { color: #1db954; }
    .cat-list li span {
      background: #f0f0f0; border-radius: 3px;
      padding: .1rem .45rem; font-size: .72rem;
      font-weight: 700; color: #555;
    }

    /* Recent posts */
    .recent-item {
      display: flex; gap: .75rem;
      padding: .6rem 0;
      border-bottom: 1px solid #f0f0f0;
      cursor: pointer;
    }
    .recent-item:last-child { border-bottom: none; padding-bottom: 0; }
    .recent-thumb {
      width: 58px; height: 50px; border-radius: 3px;
      flex-shrink: 0;
      display: flex; align-items: center; justify-content: center;
      font-size: 1.4rem;
    }
    .recent-title {
      font-size: .78rem; font-weight: 600;
      line-height: 1.35; color: #222;
      margin-bottom: .2rem;
    }
    .recent-date { font-size: .7rem; color: #999; }

    /* Tags cloud */
    .tags-cloud { display: flex; flex-wrap: wrap; gap: .45rem; }
    .tag-item {
      background: #f0f0f0; color: #444;
      font-size: .75rem; padding: .3rem .65rem;
      border-radius: 3px; cursor: pointer;
      transition: all .15s;
    }
    .tag-item:hover { background: #1db954; color: #fff; }

    /* About widget */
    .about-widget { text-align: center; }
    .about-widget .logo {
      font-size: 2rem; font-weight: 800;
      color: #1a1a1a; margin-bottom: .4rem;
    }
    .about-widget .logo span { color: #1db954; }
    .about-widget p { font-size: .8rem; color: #666; line-height: 1.6; }

    /* ── PAGINATION ── */
    .pagination {
      display: flex; justify-content: center; gap: .35rem;
      padding: 1.5rem 0 .5rem;
    }
    .pagination button {
      width: 34px; height: 34px; border-radius: 3px;
      border: 1px solid #ddd; background: #fff;
      cursor: pointer; font-size: .85rem; color: #444;
      transition: all .15s;
    }
    .pagination button:hover, .pagination button.active {
      background: #1db954; color: #fff; border-color: #1db954;
    }

    /* ── FOOTER ── */
    footer {
      background: #1a1a1a; color: #888;
      padding: 2rem 0 1.25rem;
      margin-top: 1.5rem;
    }
    .footer-grid {
      display: grid; grid-template-columns: 2fr 1fr 1fr;
      gap: 2rem; margin-bottom: 1.5rem;
    }
    .footer-logo {
      font-size: 1.15rem; font-weight: 800;
      color: #fff; margin-bottom: .5rem;
    }
    .footer-logo span { color: #1db954; }
    footer p { font-size: .82rem; line-height: 1.65; }
    .footer-col h4 {
      color: #fff; font-size: .78rem; font-weight: 700;
      margin-bottom: .75rem; text-transform: uppercase;
      letter-spacing: .08em;
    }
    .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: .45rem; }
    .footer-col ul a { font-size: .82rem; color: #888; transition: color .15s; }
    .footer-col ul a:hover { color: #fff; }
    .footer-bottom {
      border-top: 1px solid #2a2a2a;
      padding-top: 1rem;
      text-align: center;
      font-size: .78rem;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 900px) {
      .main-layout { grid-template-columns: 1fr; }
      .posts-grid { grid-template-columns: repeat(2, 1fr); }
      .sidebar { display: grid; grid-template-columns: 1fr 1fr; }
      .footer-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 600px) {
      .navbar__links { display: none; }
      .navbar__search-icon { display: none; }
      .hamburger { display: flex; }
      .posts-grid { grid-template-columns: 1fr; }
      .sidebar { grid-template-columns: 1fr; }
      .footer-grid { grid-template-columns: 1fr; }
      .search-bar__category { display: none; }
    }

    /* Mobile menu */
    .mobile-menu {
      display: none; position: fixed; inset: 0; z-index: 200;
      background: #1a1a1a; padding: 4.5rem 2rem 2rem;
      flex-direction: column; gap: 1.25rem;
    }
    .mobile-menu.open { display: flex; }
    .mobile-menu a { color: #ccc; font-size: 1.1rem; font-weight: 600; border-bottom: 1px solid #2a2a2a; padding-bottom: 1rem; }
    .mobile-close { position: absolute; top: 1rem; right: 1.5rem; background: none; border: none; color: #fff; font-size: 1.4rem; cursor: pointer; }
  </style>
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  ¿Buscás recursos de diseño? Accedé a más de 39,000 mockups con <a href="#">PlaceIt by Envato</a> &nbsp;·&nbsp; <a href="#">Ver más →</a>
</div>

<!-- NAVBAR -->
<nav class="navbar">
  <div class="navbar__brand">
    <div class="navbar__brand-icon">B</div>
    BLOG<span style="color:#1db954">USAP</span>
  </div>
  <ul class="navbar__links">
    <li><a href="#">Diseño</a></li>
    <li><a href="#">Recursos</a></li>
    <li><a href="#">Prototipado</a></li>
    <li><a href="#">Código</a></li>
    <li><a href="#">UX</a></li>
  </ul>
  <span class="navbar__search-icon">🔍</span>
  <div class="hamburger" onclick="toggleMenu()">
    <span></span><span></span><span></span>
  </div>
</nav>

<!-- MOBILE MENU -->
<div class="mobile-menu" id="mobileMenu">
  <button class="mobile-close" onclick="toggleMenu()">✕</button>
  <a href="#">Diseño</a>
  <a href="#">Recursos</a>
  <a href="#">Prototipado</a>
  <a href="#">Código</a>
  <a href="#">UX</a>
</div>

<!-- SEARCH BAR -->
<section class="search-section">
  <div class="search-bar">
    <input type="text" placeholder="Search..."/>
    <div class="search-bar__category">DESIGN ▾</div>
    <button class="search-bar__btn">Search</button>
  </div>
  <p class="search-caption">Displaying category "DESIGN"</p>
</section>

<!-- MAIN CONTENT -->
<div class="container">
  <div class="main-layout">

    <!-- POSTS -->
    <main>
      <div class="posts-grid">

        <article class="post-card">
          <div class="post-card__img" style="background:linear-gradient(135deg,#1a1a2e,#e94560)">🛍️</div>
          <div class="post-card__body">
            <div class="post-card__tags">
              <span class="tag">Food</span>
              <span class="tag alt">Packaging</span>
            </div>
            <h3 class="post-card__title">Biodegradable Food Packaging</h3>
            <p class="post-card__excerpt">After recognizing the need for more eco-friendly fast food practices and products, designer Laia Avinoa created biodegradable food packaging as part of a school project.</p>
            <div class="post-card__meta">
              <span>Jun 2026</span><span class="dot">·</span><span>4 min</span>
            </div>
          </div>
        </article>

        <article class="post-card">
          <div class="post-card__img" style="background:linear-gradient(135deg,#0f2027,#2c5364)">💻</div>
          <div class="post-card__body">
            <div class="post-card__tags">
              <span class="tag blue">iPhone</span>
              <span class="tag blue">Laptop</span>
              <span class="tag blue">MacBook</span>
              <span class="tag blue">Mug</span>
              <span class="tag">T-Shirt</span>
            </div>
            <h3 class="post-card__title">Placeit: Create Mockups right in your Browser (now 15% off!)</h3>
            <p class="post-card__excerpt">Creating perfect mockups has never been so easy. With Placeit's user-friendly online tools you can find incredible templates no matter what you need.</p>
            <div class="post-card__meta">
              <span>Jun 2026</span><span class="dot">·</span><span>5 min</span>
            </div>
          </div>
        </article>

        <article class="post-card">
          <div class="post-card__img" style="background:linear-gradient(135deg,#3a3a3a,#888)">📦</div>
          <div class="post-card__body">
            <div class="post-card__tags">
              <span class="tag alt">Packaging</span>
            </div>
            <h3 class="post-card__title">Flatscreen TV Modifies Perception, Reduces Package Damage During Delivery</h3>
            <p class="post-card__excerpt">For some reason, bicycles in big cardboard boxes have a tendency to get dropped, bashed or crushed by delivery companies, which has spurred Dutch manufacturer Vanmoof into action.</p>
            <div class="post-card__meta">
              <span>Jun 2026</span><span class="dot">·</span><span>6 min</span>
            </div>
          </div>
        </article>

        <article class="post-card">
          <div class="post-card__img" style="background:linear-gradient(135deg,#134e5e,#71b280)">🎨</div>
          <div class="post-card__body">
            <div class="post-card__tags">
              <span class="tag">CSS</span>
              <span class="tag blue">Diseño</span>
            </div>
            <h3 class="post-card__title">Diseño responsivo con CSS Grid y Flexbox</h3>
            <p class="post-card__excerpt">Aprende a crear layouts adaptables que funcionen perfectamente en cualquier dispositivo sin necesidad de librerías externas.</p>
            <div class="post-card__meta">
              <span>May 2026</span><span class="dot">·</span><span>5 min</span>
            </div>
          </div>
        </article>

        <article class="post-card">
          <div class="post-card__img" style="background:linear-gradient(135deg,#7c3aed,#a855f7)">⚡</div>
          <div class="post-card__body">
            <div class="post-card__tags">
              <span class="tag purple">JavaScript</span>
            </div>
            <h3 class="post-card__title">JavaScript moderno: async/await y Promises explicados</h3>
            <p class="post-card__excerpt">La programación asíncrona puede ser confusa. Desglosamos los conceptos con ejemplos claros y casos de uso reales para desarrolladores.</p>
            <div class="post-card__meta">
              <span>May 2026</span><span class="dot">·</span><span>7 min</span>
            </div>
          </div>
        </article>

        <article class="post-card">
          <div class="post-card__img" style="background:linear-gradient(135deg,#b45309,#f59e0b)">🗄️</div>
          <div class="post-card__body">
            <div class="post-card__tags">
              <span class="tag orange">Laravel</span>
              <span class="tag orange">MySQL</span>
            </div>
            <h3 class="post-card__title">Eloquent ORM: relaciones y consultas avanzadas</h3>
            <p class="post-card__excerpt">Domina las relaciones HasMany, BelongsTo y ManyToMany en Eloquent para escribir código más limpio y eficiente en tus proyectos.</p>
            <div class="post-card__meta">
              <span>Abr 2026</span><span class="dot">·</span><span>10 min</span>
            </div>
          </div>
        </article>

      </div>

      <!-- Pagination -->
      <div class="pagination">
        <button>‹</button>
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
        <button>›</button>
      </div>
    </main>

    <!-- SIDEBAR -->
    <aside class="sidebar">

      <div class="widget">
        <div class="widget__header">Acerca de</div>
        <div class="widget__body about-widget">
          <div class="logo">Blog<span>USAP</span></div>
          <p>Recursos de diseño, desarrollo web y tecnología para la comunidad estudiantil USAP.</p>
        </div>
      </div>

      <div class="widget">
        <div class="widget__header">Categorías</div>
        <div class="widget__body" style="padding: .5rem 1rem;">
          <ul class="cat-list">
            <li>Diseño Web <span>14</span></li>
            <li>Laravel & PHP <span>11</span></li>
            <li>JavaScript <span>8</span></li>
            <li>Prototipado <span>6</span></li>
            <li>Recursos <span>9</span></li>
            <li>UX/UI <span>7</span></li>
          </ul>
        </div>
      </div>

      <div class="widget">
        <div class="widget__header">Recientes</div>
        <div class="widget__body" style="padding: .5rem 1rem;">
          <div class="recent-item">
            <div class="recent-thumb" style="background:linear-gradient(135deg,#1a1a2e,#e94560)">🛍️</div>
            <div>
              <div class="recent-title">Biodegradable Food Packaging</div>
              <div class="recent-date">3 jun 2026</div>
            </div>
          </div>
          <div class="recent-item">
            <div class="recent-thumb" style="background:linear-gradient(135deg,#134e5e,#71b280)">🎨</div>
            <div>
              <div class="recent-title">CSS Grid: guía completa</div>
              <div class="recent-date">28 may 2026</div>
            </div>
          </div>
          <div class="recent-item">
            <div class="recent-thumb" style="background:linear-gradient(135deg,#7c3aed,#a855f7)">⚡</div>
            <div>
              <div class="recent-title">async/await en JS moderno</div>
              <div class="recent-date">20 may 2026</div>
            </div>
          </div>
        </div>
      </div>

      <div class="widget">
        <div class="widget__header">Etiquetas</div>
        <div class="widget__body">
          <div class="tags-cloud">
            <span class="tag-item">Laravel</span>
            <span class="tag-item">PHP</span>
            <span class="tag-item">CSS</span>
            <span class="tag-item">HTML</span>
            <span class="tag-item">JavaScript</span>
            <span class="tag-item">MySQL</span>
            <span class="tag-item">Docker</span>
            <span class="tag-item">Git</span>
            <span class="tag-item">UX</span>
            <span class="tag-item">Tailwind</span>
          </div>
        </div>
      </div>

    </aside>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div>
        <div class="footer-logo">Blog<span>USAP</span></div>
        <p>Plataforma de artículos técnicos creada por y para estudiantes de la USAP.</p>
      </div>
      <div class="footer-col">
        <h4>Navegación</h4>
        <ul>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Artículos</a></li>
          <li><a href="#">Categorías</a></li>
          <li><a href="#">Acerca de</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Temas</h4>
        <ul>
          <li><a href="#">Diseño Web</a></li>
          <li><a href="#">Laravel</a></li>
          <li><a href="#">JavaScript</a></li>
          <li><a href="#">UX/UI</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      © 2026 BlogUSAP · Todos los derechos reservados · Hecho con ❤️ por estudiantes USAP
    </div>
  </div>
</footer>

<script>
  function toggleMenu() {
    document.getElementById('mobileMenu').classList.toggle('open');
  }
  document.querySelectorAll('.pagination button').forEach(btn => {
    btn.addEventListener('click', function() {
      if (this.textContent !== '‹' && this.textContent !== '›') {
        document.querySelectorAll('.pagination button').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
      }
    });
  });
</script>
</body>
</html>
