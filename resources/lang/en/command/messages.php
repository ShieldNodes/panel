<?php

return [
    'location' => [
        'no_location_found' => 'Не удалось найти запись, соответствующую указанному короткому коду.',
        'ask_short' => 'Короткий код местоположения',
        'ask_long' => 'Описание местоположения',
        'created' => 'Успешно создано новое местоположение (:name) с ID :id.',
        'deleted' => 'Успешно удалено запрошенное местоположение.',
    ],
    'user' => [
        'search_users' => 'Введите имя пользователя, ID пользователя или адрес электронной почты',
        'select_search_user' => 'ID пользователя для удаления (Введите \'0\' для повторного поиска)',
        'deleted' => 'Пользователь успешно удален из панели.',
        'confirm_delete' => 'Вы уверены, что хотите удалить этого пользователя из панели?',
        'no_users_found' => 'Не найдено пользователей для указанного поискового запроса.',
        'multiple_found' => 'Найдено несколько учетных записей для указанного пользователя. Невозможно удалить пользователя из-за флага --no-interaction.',
        'ask_admin' => 'Является ли этот пользователь администратором?',
        'ask_email' => 'Адрес электронной почты',
        'ask_username' => 'Имя пользователя',
        'ask_name_first' => 'Имя',
        'ask_name_last' => 'Фамилия',
        'ask_password' => 'Пароль',
        'ask_password_tip' => 'Если вы хотите создать учетную запись с отправкой случайного пароля на электронную почту пользователя, повторно запустите эту команду (CTRL+C) и передайте флаг --no-password.',
        'ask_password_help' => 'Пароль должен содержать не менее 8 символов, включая как минимум одну заглавную букву и одну цифру.',
        '2fa_help_text' => [
            'Эта команда отключит двухфакторную аутентификацию для учетной записи пользователя, если она включена. Она должна использоваться только в качестве команды для восстановления учетной записи, если пользователь заблокирован.',
            'Если это не то, что вы хотели сделать, нажмите CTRL+C, чтобы выйти из этого процесса.',
        ],
        '2fa_disabled' => 'Двухфакторная аутентификация была отключена для :email.',
    ],
    'schedule' => [
        'output_line' => 'Выполняется задача первого действия в расписании ":schedule" (:hash).',
    ],
    'maintenance' => [
        'deleting_service_backup' => 'Удаление резервной копии службы :file.',
    ],
    'server' => [
        'rebuild_failed' => 'Не удалось выполнить запрос на перест

ройку для ":name" (#:id) на узле ":node" из-за ошибки: :message',
        'reinstall' => [
            'failed' => 'Не удалось выполнить запрос на переустановку для ":name" (#:id) на узле ":node" из-за ошибки: :message',
            'confirm' => 'Вы собираетесь выполнить переустановку для группы серверов. Хотите продолжить?',
        ],
        'power' => [
            'confirm' => 'Вы собираетесь выполнить :action для :count серверов. Хотите продолжить?',
            'action_failed' => 'Не удалось выполнить действие питания для ":name" (#:id) на узле ":node" из-за ошибки: :message',
        ],
    ],
    'environment' => [
        'mail' => [
            'ask_smtp_host' => 'SMTP-хост (например, smtp.gmail.com)',
            'ask_smtp_port' => 'SMTP-порт',
            'ask_smtp_username' => 'SMTP-имя пользователя',
            'ask_smtp_password' => 'SMTP-пароль',
            'ask_mailgun_domain' => 'Домен Mailgun',
            'ask_mailgun_endpoint' => 'Конечная точка Mailgun',
            'ask_mailgun_secret' => 'Секретный ключ Mailgun',
            'ask_mandrill_secret' => 'Секретный ключ Mandrill',
            'ask_postmark_username' => 'Ключ API Postmark',
            'ask_driver' => 'Какой драйвер должен использоваться для отправки электронных писем?',
            'ask_mail_from' => 'Адрес электронной почты отправителя',
            'ask_mail_name' => 'Имя, отображаемое отправителем',
            'ask_encryption' => 'Метод шифрования',
        ],
    ],
];
