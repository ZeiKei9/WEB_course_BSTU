import { Link } from 'react-router-dom';

export function ProductCard({ product, showSpecs = false }) {
  return (
    <article className="product-card">
      <div className="product-preview">
        <span className="product-preview-label">{product.resolution} MP / {product.interfaceType}</span>
      </div>
      <div className="product-body">
        <span className="product-brand">{product.brand}</span>
        <h3 className="product-title">{product.model}</h3>
        <p className="product-description">{product.description}</p>
        {showSpecs && (
          <ul className="product-specs">
            <li>{product.resolution} Мп</li>
            <li>{product.interfaceType}</li>
            <li>{product.sensor}</li>
          </ul>
        )}
        <div className="product-footer">
          <strong className="product-price">{product.price.toLocaleString('ru-RU')} ₽</strong>
          {showSpecs ? (
            <button className="button button-small" type="button">Купить</button>
          ) : (
            <Link className="button button-small" to="/catalog">Подробнее</Link>
          )}
        </div>
      </div>
    </article>
  );
}
