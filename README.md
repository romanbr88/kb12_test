# Тестовое задание для КБ-12

### Модуль для вывода 10 последних твитов пользователя

Параметры для подключения к Twitter API и логин пользователя Twitter нужно указать в файле `config/params.php`:
~~~
return [
    ...
    'twitter' => [
        'consumerKey' => '',
        'consumerSecret' => '',
        'accessToken' => '',
        'accessTokenSecret' => '',
        'username' => 'имя_пользователя',
    ],
];
~~~

Страница доступна до адресу:
~~~
http://localhost/twitter
~~~
