# climate

## Установка.

- проект работает на php-7.4

-   Клонируем репу
-   Распаковываем в корень чистый вп
-   Создаем БД (OS работает на mysql-5.7, apache_2.4-php_7.2)
-   Закидываем дамп базы и uploads
-   в БД меняем в wp-options `siteurl` и `home` на локальный хост
-   Устанавливаем WP (запуск проекта из OS)
-   Из темы делаем `yarn install --frozen-lock`
-   Из темы делаем `composer install`
-   Копируем и переименовываем для браузер-синка `webpack.brs.config.js.example` в `webpack.brs.config.js` указываем нужные параметры в нем (в proxy локальный хост).
-   Если работаем через OS закидываем в корень файл .htaccess с настройками для apache
-   Если browser-sync не захочет работать, то попробовать запустить сервер не на localhost, а на 127.0.0.1.
-   затем `yarn build`

## Сборка фронта

-   Дев сборка `yarn build` или `yarn dev`
-   Вотч `yarn start` или `yarn watch`

## Компоненты

-   Readme для компонентов лежит в папке wp-content/themes/myusa/components
