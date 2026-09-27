import { ProductCard } from '../components/ProductCard.jsx';
import { products } from '../data/products.js';

export function CatalogPage() {
  return (
    <main className="page">
      <div className="container">
        <div className="page-heading">
          <div>
            <h1 className="page-title">Каталог камер</h1>
            <p className="page-text">Камеры для задач машинного и компьютерного зрения.</p>
          </div>
        </div>

        <div className="catalog-layout">
          <aside className="filters">
            <h2 className="filters-title">Фильтры</h2>
            <div className="field">
              <label className="field-label" htmlFor="interface">Интерфейс</label>
              <select className="field-control" id="interface">
                <option>Все</option>
                <option>GigE</option>
                <option>USB3</option>
              </select>
            </div>
            <div className="field">
              <label className="field-label" htmlFor="resolution">Разрешение</label>
              <select className="field-control" id="resolution">
                <option>Любое</option>
                <option>2 Мп</option>
                <option>5 Мп</option>
                <option>12 Мп</option>
              </select>
            </div>
            <div className="field">
              <label className="field-label" htmlFor="type">Тип камеры</label>
              <select className="field-control" id="type">
                <option>Все</option>
                <option>Цветная</option>
                <option>Монохромная</option>
              </select>
            </div>
            <button className="button button-full" type="button">Применить</button>
          </aside>

          <section className="catalog-products" aria-label="Камеры">
            {products.map((product) => (
              <ProductCard key={product.model} product={product} showSpecs />
            ))}
          </section>
        </div>
      </div>
    </main>
  );
}
