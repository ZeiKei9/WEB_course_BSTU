export function AuthPage() {
  function handleSubmit(event) {
    event.preventDefault();
  }

  return (
    <main className="auth-wrap">
      <div className="auth-grid">
        <form className="auth-card" onSubmit={handleSubmit}>
          <h1 className="auth-title">Вход</h1>
          <p className="auth-description">Введите данные своей учётной записи.</p>
          <div className="field">
            <label className="field-label" htmlFor="login-email">Электронная почта</label>
            <input className="field-control" id="login-email" type="email" placeholder="example@mail.ru" />
          </div>
          <div className="field">
            <label className="field-label" htmlFor="login-password">Пароль</label>
            <input className="field-control" id="login-password" type="password" placeholder="Введите пароль" />
          </div>
          <button className="button button-full" type="submit">Войти</button>
        </form>

        <form className="auth-card" onSubmit={handleSubmit}>
          <h1 className="auth-title">Регистрация</h1>
          <p className="auth-description">Создайте новую учётную запись.</p>
          <div className="field">
            <label className="field-label" htmlFor="register-name">Имя</label>
            <input className="field-control" id="register-name" type="text" placeholder="Введите имя" />
          </div>
          <div className="field">
            <label className="field-label" htmlFor="register-email">Электронная почта</label>
            <input className="field-control" id="register-email" type="email" placeholder="example@mail.ru" />
          </div>
          <div className="field">
            <label className="field-label" htmlFor="register-password">Пароль</label>
            <input className="field-control" id="register-password" type="password" placeholder="Придумайте пароль" />
          </div>
          <button className="button button-full" type="submit">Зарегистрироваться</button>
        </form>
      </div>
    </main>
  );
}
