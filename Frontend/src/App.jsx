import { Route, Routes } from 'react-router-dom';
import { SiteLayout } from './components/SiteLayout.jsx';
import { HomePage } from './pages/HomePage.jsx';
import { CatalogPage } from './pages/CatalogPage.jsx';
import { AuthPage } from './pages/AuthPage.jsx';

export default function App() {
  return (
    <Routes>
      <Route element={<SiteLayout />}>
        <Route path="/" element={<HomePage />} />
        <Route path="/catalog" element={<CatalogPage />} />
        <Route path="/auth" element={<AuthPage />} />
      </Route>
    </Routes>
  );
}
