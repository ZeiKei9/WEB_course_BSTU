# Лабораторная работа №3

Базовое приложение Laravel с API и запуском через Docker. Два контроллера возвращают статические данные о камерах и категориях в формате JSON.

## Запуск

Открыть Docker Desktop и перейти в эту папку:

```sh
cd "/Users/zeikei/Desktop/учеба/4 курс 1 семестр/WEB/Backend"
docker compose up --build -d
```

API доступен по адресу `http://localhost:8000`.

Если проект скачан заново и файлов `.env` и `vendor` ещё нет, перед запуском выполнить:

```sh
cp .env.example .env
docker compose run --rm app composer install
docker compose run --rm app php artisan key:generate
```

Остановить приложение:

```sh
docker compose down
```

## Проверка в Postman

1. Нажать **Import** и выбрать `Lab3.postman_collection.json` из этой папки.
2. Открыть запрос **Камеры** и нажать **Send**. Ожидается `200 OK` и JSON-массив из четырёх камер.
3. Открыть запрос **Категории** и нажать **Send**. Ожидается `200 OK` и JSON-массив из трёх категорий.

Адрес сервера задан переменной коллекции `baseUrl`: `http://localhost:8000`.

Если работаешь без аккаунта Postman, выбери **Continue without an account → Open Lightweight API Client**. В этом режиме введи адреса вручную, выбери метод **GET** и нажми **Send**:

```text
http://localhost:8000/api/cameras
http://localhost:8000/api/categories
```

## Где находится код

- `app/Http/Controllers/CameraController.php` — статический массив камер.
- `app/Http/Controllers/CategoryController.php` — статический массив категорий.
- `routes/api.php` — два маршрута: `GET /api/cameras` и `GET /api/categories`.
- `bootstrap/app.php` — подключение файла маршрутов API.
- `composer.json` — зависимости Laravel и модуль API Laravel Sanctum, установленный командой `php artisan install:api`.
- `Dockerfile` — PHP и Composer внутри контейнера.
- `compose.yaml` — запуск одного контейнера и доступ к порту 8000.

Остальные каталоги входят в стандартный каркас Laravel. Для этой работы база данных не используется: массивы записаны прямо в контроллерах. API общедоступен, токены не нужны. Подключение Vue к серверу заданием не предусмотрено.

В Dockerfile используются официальные образы из публичного зеркала Docker в Amazon ECR, поскольку загрузка из Docker Hub в этой сети обрывалась.
