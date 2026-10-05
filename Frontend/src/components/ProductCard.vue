<script setup>
import { RouterLink } from 'vue-router';

defineProps({
  product: { type: Object, required: true },
  showSpecs: { type: Boolean, default: false },
});
</script>

<template>
  <article class="product-card">
    <div class="product-preview">
      <span class="product-preview-label">{{ product.resolution }} MP / {{ product.interfaceType }}</span>
    </div>
    <div class="product-body">
      <span class="product-brand">{{ product.brand }}</span>
      <h3 class="product-title">{{ product.model }}</h3>
      <p class="product-description">{{ product.description }}</p>
      <ul v-if="showSpecs" class="product-specs">
        <li>{{ product.resolution }} Мп</li>
        <li>{{ product.interfaceType }}</li>
        <li>{{ product.sensor }}</li>
      </ul>
      <div class="product-footer">
        <strong class="product-price">{{ product.price.toLocaleString('ru-RU') }} ₽</strong>
        <button v-if="showSpecs" class="button button-small" type="button">Купить</button>
        <RouterLink v-else class="button button-small" to="/catalog">Подробнее</RouterLink>
      </div>
    </div>
  </article>
</template>
