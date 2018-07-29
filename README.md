# Установка Wordpress через Composer

Установка WordPress, плагинов и тем при помощи пакетного менеджера Composer.

## Общая структура проекта:

- `/core/` - содержит ядро WordPress
- `/content/`
    - `/content/plugins` - ваши плагины
    - `/content/themes` - ваши темы

## Процесс установки

```
git clone git@github.com:proweb/wordpress-composer.git // копируем репозиторий
composer install // устанавливаем WordPress и зависимости
```
