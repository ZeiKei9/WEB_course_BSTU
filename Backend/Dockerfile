FROM public.ecr.aws/docker/library/php:8.5-cli-alpine

RUN apk add --no-cache unzip

COPY --from=public.ecr.aws/docker/library/composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
