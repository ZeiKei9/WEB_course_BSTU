<template>
  <main class="auth-wrap">
    <div class="auth-grid">
      <form class="auth-card" @submit.prevent>
        <h1 class="auth-title">Вход</h1>
        <p class="auth-description">Введите данные своей учётной записи.</p>
        <div class="field">
          <label class="field-label" for="login-email">Электронная почта</label>
          <input id="login-email" class="field-control" type="email" placeholder="example@mail.ru" />
        </div>
        <div class="field">
          <label class="field-label" for="login-password">Пароль</label>
          <input id="login-password" class="field-control" type="password" placeholder="Введите пароль" />
        </div>
        <button class="button button-full" type="submit">Войти</button>
      </form>

      <form class="auth-card" @submit.prevent>
        <h1 class="auth-title">Регистрация</h1>
        <p class="auth-description">Создайте новую учётную запись.</p>
        <div class="field">
          <label class="field-label" for="register-name">Имя</label>
          <input id="register-name" class="field-control" type="text" placeholder="Введите имя" />
        </div>
        <div class="field">
          <label class="field-label" for="register-email">Электронная почта</label>
          <input id="register-email" class="field-control" type="email" placeholder="example@mail.ru" />
        </div>
        <div class="field">
          <label class="field-label" for="register-password">Пароль</label>
          <input id="register-password" class="field-control" type="password" placeholder="Придумайте пароль" />
        </div>
        <button class="button button-full" type="submit">Зарегистрироваться</button>
      </form>
    </div>
  </main>
</template>
