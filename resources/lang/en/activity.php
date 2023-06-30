<?php

/**
 * Содержит все строки перевода для различных событий журнала активности.
 * Они должны быть сгруппированы по значению перед двоеточием (:)
 * в имени события. Если двоеточие отсутствует, они должны быть расположены
 * на верхнем уровне.
 */
return [
    'auth' => [
        'fail' => 'Неудачная попытка входа',
        'success' => 'Успешный вход в систему',
        'password-reset' => 'Сброс пароля',
        'reset-password' => 'Запрос сброса пароля',
        'checkpoint' => 'Запрошена двухфакторная аутентификация',
        'recovery-token' => 'Использован токен восстановления двухфакторной аутентификации',
        'token' => 'Решена двухфакторная аутентификация',
        'ip-blocked' => 'Заблокирован запрос с неразрешенного IP-адреса для: :identifier',
        'sftp' => [
            'fail' => 'Неудачная попытка входа по протоколу SFTP',
        ],
    ],
    'user' => [
        'account' => [
            'email-changed' => 'Изменен адрес электронной почты с :old на :new',
            'password-changed' => 'Изменен пароль',
        ],
        'api-key' => [
            'create' => 'Создан новый ключ API: :identifier',
            'delete' => 'Удален ключ API: :identifier',
        ],
        'ssh-key' => [
            'create' => 'Добавлен SSH-ключ: :fingerprint к учетной записи',
            'delete' => 'Удален SSH-ключ: :fingerprint из учетной записи',
        ],
        'two-factor' => [
            'create' => 'Включена двухфакторная аутентификация',
            'delete' => 'Отключена двухфакторная аутентификация',
        ],
    ],
    'server' => [
        'reinstall' => 'Переустановлен сервер',
        'console' => [
            'command' => 'Выполнена команда ":command" на сервере',
        ],
        'power' => [
            'start' => 'Запущен сервер',
            'stop' => 'Остановлен сервер',
            'restart' => 'Перезапущен сервер',
            'kill' => 'Процесс сервера завершен',
        ],
        'backup' => [
            'download' => 'Скачана резервная копия :name',
            'delete' => 'Удалена резервная копия :name',
            'restore' => 'Восстановлена резервная копия :name (удаленные файлы: :truncate)',
            'restore-complete' => 'Завершено восстановление резервной копии :name',
            'restore-failed' => 'Не удалось завершить восстановление резервной копии :name',
            'start' => 'Запущено новое резервное копирование :name',
            'complete' => 'Резервная копия :name помечена как завершенная',
            'fail' => 'Резервная копия :name помечена как неудачная',
            'lock' => 'Заблокирована резервная копия :name',
            'unlock' => 'Разблокирована резервная копия :name',
        ],
        'database' => [
            'create' => 'Создана новая база данных: :name',
            'rotate-password' => 'Пароль для базы данных :name обновлен',
            'delete' => 'Удалена база данных: :name',
        ],
        'file' => [
            'compress_one' => 'Сжат файл :directory:file',
            'compress_other' => 'Сжато :count файлов в :directory',
            'read' => 'Просмотрено содержимое файла :file',
            'copy' => 'Создана копия файла :file',
            'create-directory' => 'Создан каталог :directory:name',
            'decompress' => 'Разархивировано :files в :directory',
            'delete_one' => 'Удален файл :directory:files.0',
            'delete_other' => 'Удалено :count файлов в :directory',
            'download' => 'Скачан файл :file',
            'pull' => 'Скачан удаленный файл с :url в :directory',
            'rename_one' => 'Переименован файл :directory:files.0.from в :directory:files.0.to',
            'rename_other' => 'Переименовано :count файлов в :directory',
            'write' => 'Записано новое содержимое в файл :file',
            'upload' => 'Начата загрузка файла',
            'uploaded' => 'Загружен файл :directory:file',
        ],
        'sftp' => [
            'denied' => 'Отказано в доступе к SFTP из-за разрешений',
            'create_one' => 'Создан :files.0',
            'create_other' => 'Создано :count новых файлов',
            'write_one' => 'Изменено содержимое файла :files.0',
            'write_other' => 'Изменено содержимое :count файлов',
            'delete_one' => 'Удален файл :files.0',
            'delete_other' => 'Удалено :count файлов',
            'create-directory_one' => 'Создан каталог :files.0',
            'create-directory_other' => 'Создано :count каталогов',
            'rename_one' => 'Переименован файл :files.0.from в :files.0.to',
            'rename_other' => 'Переименовано или перемещено :count файлов',
        ],
        'allocation' => [
            'create' => 'Добавлено выделение :allocation к серверу',
            'notes' => 'Обновлены примечания для :allocation с ":old" на ":new"',
            'primary' => 'Установлено выделение :allocation как основное для сервера',
            'delete' => 'Удалено выделение :allocation',
        ],
        'schedule' => [
            'create' => 'Создано расписание :name',
            'update' => 'Обновлено расписание :name',
            'execute' => 'Ручное выполнение расписания :name',
            'delete' => 'Удалено расписание :name',
        ],
        'task' => [
            'create' => 'Создана новая задача ":action" для расписания :name',
            'update' => 'Обновлена задача ":action" для расписания :name',
            'delete' => 'Удалена задача для расписания :name',
        ],
        'settings' => [
            'rename' => 'Переименован сервер с :old в :new',
            'description' => 'Изменено описание сервера с :old на :new',
        ],
        'startup' => [
            'edit' => 'Изменена переменная :variable с ":old" на ":new"',
            'image' => 'Обновлен образ Docker для сервера с :old на :new',
        ],
        'subuser' => [
            'create' => 'Добавлен подпользователь :email',
            'update' => 'Обновлены разрешения подпользователя :email',
            'delete' => 'Удален подпользователь :email',
        ],
    ],
];
