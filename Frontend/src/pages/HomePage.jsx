import { Link } from 'react-router-dom';
import { ProductCard } from '../components/ProductCard.jsx';
import { products } from '../data/products.js';

const categories = [
  {
    number: '01',
    title: 'GigE камеры',
    description: 'Для подключения по Ethernet и работы на большом расстоянии от компьютера.',
  },
  {
    number: '02',
    title: 'USB3 камеры',
    description: 'Для систем, где нужна высокая скорость передачи данных и простое подключение.',
  },
  {
    number: '03',
    title: 'Монохромные камеры',
    description: 'Для технического зрения, измерений и задач, где цвет не является главным параметром.',
  },
];

export function HomePage() {
  return (
    <main>
      <section className="main-block">
        <div className="container main-content">
          <div>
            <span className="main-label">Камеры машинного зрения</span>
            <h1 className="main-title">Оборудование для компьютерного зрения</h1>
            <p className="main-description">Промышленные камеры для контроля качества, распознавания объектов и автоматизации производственных процессов.</p>
            <div className="main-buttons">
              <Link className="button" to="/catalog">Перейти в каталог</Link>
              <a className="button button-secondary" href="#categories">Посмотреть категории</a>
            </div>
          </div>
          <div className="main-box">
            <h2 className="main-box-title">Что есть в каталоге</h2>
            <div className="main-box-grid">
              <div className="main-box-item"><strong className="main-box-value">2–12 Мп</strong><span className="main-box-caption">разрешение камер</span></div>
              <div className="main-box-item"><strong className="main-box-value">GigE</strong><span className="main-box-caption">камеры по Ethernet</span></div>
              <div className="main-box-item"><strong className="main-box-value">USB3</strong><span className="main-box-caption">быстрая передача данных</span></div>
              <div className="main-box-item"><strong className="main-box-value">CMOS</strong><span className="main-box-caption">цветные и монохромные</span></div>
            </div>
          </div>
        </div>
      </section>

      <section className="section white-section" id="categories">
        <div className="container">
          <div className="section-heading">
            <h2 className="section-title">Категории</h2>
            <p className="section-text">Основные типы камер для разных задач.</p>
          </div>
          <div className="categories">
            {categories.map((category) => (
              <article className="category" key={category.title}>
                <div className="category-number">{category.number}</div>
                <h3 className="category-title">{category.title}</h3>
                <p className="category-description">{category.description}</p>
              </article>
            ))}
          </div>
        </div>
      </section>

      <section className="section">
        <div className="container">
          <div className="section-heading section-heading-row">
            <div>
              <h2 className="section-title">Популярные модели</h2>
              <p className="section-text">Несколько камер из нашего каталога.</p>
            </div>
            <Link className="text-link" to="/catalog">Смотреть все</Link>
          </div>
          <div className="products">
            {products.slice(0, 3).map((product) => (
              <ProductCard key={product.model} product={product} />
            ))}
          </div>
        </div>
      </section>
    </main>
  );
}
