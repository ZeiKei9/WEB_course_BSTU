<script setup>
import { RouterLink } from 'vue-router';
import ProductCard from '../components/ProductCard.vue';
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
</script>

<template>
  <main>
    <section class="main-block">
      <div class="container main-content">
        <div>
          <span class="main-label">Камеры машинного зрения</span>
          <h1 class="main-title">Оборудование для компьютерного зрения</h1>
          <p class="main-description">Промышленные камеры для контроля качества, распознавания объектов и автоматизации производственных процессов.</p>
          <div class="main-buttons">
            <RouterLink class="button" to="/catalog">Перейти в каталог</RouterLink>
            <a class="button button-secondary" href="#categories">Посмотреть категории</a>
          </div>
        </div>
        <div class="main-box">
          <h2 class="main-box-title">Что есть в каталоге</h2>
          <div class="main-box-grid">
            <div class="main-box-item"><strong class="main-box-value">2–12 Мп</strong><span class="main-box-caption">разрешение камер</span></div>
            <div class="main-box-item"><strong class="main-box-value">GigE</strong><span class="main-box-caption">камеры по Ethernet</span></div>
            <div class="main-box-item"><strong class="main-box-value">USB3</strong><span class="main-box-caption">быстрая передача данных</span></div>
            <div class="main-box-item"><strong class="main-box-value">CMOS</strong><span class="main-box-caption">цветные и монохромные</span></div>
          </div>
        </div>
      </div>
    </section>

    <section id="categories" class="section white-section">
      <div class="container">
        <div class="section-heading">
          <h2 class="section-title">Категории</h2>
          <p class="section-text">Основные типы камер для разных задач.</p>
        </div>
        <div class="categories">
          <article v-for="category in categories" :key="category.title" class="category">
            <div class="category-number">{{ category.number }}</div>
            <h3 class="category-title">{{ category.title }}</h3>
            <p class="category-description">{{ category.description }}</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-heading section-heading-row">
          <div>
            <h2 class="section-title">Популярные модели</h2>
            <p class="section-text">Несколько камер из нашего каталога.</p>
          </div>
          <RouterLink class="text-link" to="/catalog">Смотреть все</RouterLink>
        </div>
        <div class="products">
          <ProductCard v-for="product in products.slice(0, 3)" :key="product.model" :product="product" />
        </div>
      </div>
    </section>
  </main>
</template>
