<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Документация API камер</title>
    <link rel="stylesheet" href="{{ asset('swagger-ui/swagger-ui.css') }}">
</head>
<body>
    <div id="swagger-ui"></div>
    <script src="{{ asset('swagger-ui/swagger-ui-bundle.js') }}"></script>
    <script>
        SwaggerUIBundle({
            url: @json(asset('openapi.json')),
            dom_id: '#swagger-ui',
            validatorUrl: null,
            supportedSubmitMethods: ['get', 'head', 'post', 'put', 'delete']
        });
    </script>
</body>
</html>
