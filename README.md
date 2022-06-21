# myusacorporation.com

## Установка.

-   Клонируем репу
-   Распаковываем в корень чистый вп
-   Закидываем дамп базы и uploads
-   в БД меняем `siteurl` и `home` на локальный хост
-   Из темы делаем `yarn install --frozen-lock`
-   Из темы делаем `composer install`
-   Копируем и переименовываем для браузер-синка `webpack.brs.config.js.example` в `webpack.brs.config.js` указываем нужные параметры в нем.
    Если browser-sync не захочет работать, то попробовать запустить сервер не на localhost, а на 127.0.0.1.
-   затем `yarn build`

## Сборка фронта

-   Дев сборка `yarn build` или `yarn dev`
-   Вотч `yarn start` или `yarn watch`

Сборку фронта нужно доделывать, нет:

-   бэйбеля (для IE11)
-   работы с картинками
-   минификации
-   очистки dist папки
-   _... что нужно можно доабавить_

## Компоненты

-   Readme для компонентов лежит в папке wp-content/themes/myusa/components
