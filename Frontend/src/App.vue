<script setup>
import { RouterLink, RouterView } from 'vue-router';
</script>

<template>
  <header class="header">
    <div class="container header-content">
      <RouterLink class="logo" to="/">CV Камеры</RouterLink>
      <nav class="nav" aria-label="Основная навигация">
        <RouterLink class="nav-link" active-class="nav-active" to="/">Главная</RouterLink>
        <RouterLink class="nav-link" active-class="nav-active" to="/catalog">Каталог</RouterLink>
        <RouterLink class="nav-link" active-class="nav-active" to="/auth">Вход / Регистрация</RouterLink>
      </nav>
    </div>
  </header>

  <RouterView />

  <footer class="footer">
    <div class="container footer-content">
      <span>© 2026 CV Камеры</span>
      <span>Каталог камер компьютерного зрения</span>
    </div>
  </footer>
</template>
