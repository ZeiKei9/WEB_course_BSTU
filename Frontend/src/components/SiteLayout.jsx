import { NavLink, Outlet } from 'react-router-dom';

function navClass({ isActive }) {
  return isActive ? 'nav-link nav-active' : 'nav-link';
}

export function SiteLayout() {
  return (
    <>
      <header className="header">
        <div className="container header-content">
          <NavLink className="logo" to="/">CV Камеры</NavLink>
          <nav className="nav" aria-label="Основная навигация">
            <NavLink to="/" end className={navClass}>Главная</NavLink>
            <NavLink to="/catalog" className={navClass}>Каталог</NavLink>
            <NavLink to="/auth" className={navClass}>Вход / Регистрация</NavLink>
          </nav>
        </div>
      </header>

      <Outlet />

      <footer className="footer">
        <div className="container footer-content">
          <span>© 2026 CV Камеры</span>
          <span>Каталог камер компьютерного зрения</span>
        </div>
      </footer>
    </>
  );
}
