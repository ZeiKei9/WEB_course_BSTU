<script setup>
import { onMounted, ref } from 'vue';
import ProductCard from '../components/ProductCard.vue';
import { getApiData } from '../api.js';

const products = ref([]);
const loading = ref(true);
const error = ref('');

onMounted(async () => {
  try {
    products.value = await getApiData('cameras');
  } catch {
    error.value = 'Не удалось загрузить камеры. Попробуйте обновить страницу.';
  } finally {
    loading.value = false;
  }
});
</script>

<template>
  <main class="page">
    <div class="container">
      <div class="page-heading">
        <div>
          <h1 class="page-title">Каталог камер</h1>
          <p class="page-text">Камеры для задач машинного и компьютерного зрения.</p>
        </div>
      </div>

      <div class="catalog-layout">
        <aside class="filters">
          <h2 class="filters-title">Фильтры</h2>
          <div class="field">
            <label class="field-label" for="interface">Интерфейс</label>
            <select id="interface" class="field-control">
              <option>Все</option>
              <option>GigE</option>
              <option>USB3</option>
            </select>
          </div>
          <div class="field">
            <label class="field-label" for="resolution">Разрешение</label>
            <select id="resolution" class="field-control">
              <option>Любое</option>
              <option>2 Мп</option>
              <option>5 Мп</option>
              <option>12 Мп</option>
            </select>
          </div>
          <div class="field">
            <label class="field-label" for="type">Тип камеры</label>
            <select id="type" class="field-control">
              <option>Все</option>
              <option>Цветная</option>
              <option>Монохромная</option>
            </select>
          </div>
          <button class="button button-full" type="button">Применить</button>
        </aside>

        <section class="catalog-products" aria-label="Камеры">
          <p v-if="loading" class="section-text" role="status">Загрузка камер...</p>
          <p v-else-if="error" class="section-text" role="alert">{{ error }}</p>
          <template v-else>
            <ProductCard v-for="product in products" :key="product.id" :product="product" show-specs />
          </template>
        </section>
      </div>
    </div>
  </main>
</template>
