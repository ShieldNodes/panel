<?php

return [
    'notices' => [
        'created' => 'Новое гнездо :name было успешно создано.',
        'deleted' => 'Успешно удалено запрошенное гнездо из панели.',
        'updated' => 'Успешно обновлены настройки конфигурации гнезда.',
    ],
    'eggs' => [
        'notices' => [
            'imported' => 'Это яйцо и связанные с ним переменные успешно импортированы.',
            'updated_via_import' => 'Это яйцо было обновлено с использованием предоставленного файла.',
            'deleted' => 'Успешно удалено запрошенное яйцо из панели.',
            'updated' => 'Конфигурация яйца была успешно обновлена.',
            'script_updated' => 'Установочный скрипт яйца был обновлен и будет запущен каждый раз при установке серверов.',
            'egg_created' => 'Новое яйцо было успешно создано. Вам необходимо перезапустить все работающие демоны, чтобы применить это новое яйцо.',
        ],
    ],
    'variables' => [
        'notices' => [
            'variable_deleted' => 'Переменная ":variable" была удалена и больше не будет доступна серверам после их переустановки.',
            'variable_updated' => 'Переменная ":variable" была обновлена. Вам необходимо переустановить серверы, использующие эту переменную, чтобы применить изменения.',
            'variable_created' => 'Новая переменная была успешно создана и назначена этому яйцу.',
        ],
    ],
];
