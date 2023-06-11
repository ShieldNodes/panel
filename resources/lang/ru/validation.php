<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Поле :attribute должно быть принято.',
    'active_url' => 'Поле :attribute не является действительным URL.',
    'after' => 'Поле :attribute должно быть датой после :date.',
    'after_or_equal' => 'Поле :attribute должно быть датой после или равной :date.',
    'alpha' => 'Поле :attribute может содержать только буквы.',
    'alpha_dash' => 'Поле :attribute может содержать только буквы, числа и дефисы.',
    'alpha_num' => 'Поле :attribute может содержать только буквы и числа.',
    'array' => 'Поле :attribute должно быть массивом.',
    'before' => 'Поле :attribute должно быть датой перед :date.',
    'before_or_equal' => 'Поле :attribute должно быть датой перед или равной :date.',
    'between' => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file' => 'Поле :attribute должно быть между :min и :max килобайт.',
        'string' => 'Поле :attribute должно быть между :min и :max символами.',
        'array' => 'Поле :attribute должно содержать от :min до :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно иметь значение true или false.',
    'confirmed' => 'Поле :attribute не совпадает с подтверждением.',
    'date' => 'Поле :attribute не является действительной датой.',
    'date_format' => 'Поле :attribute не соответствует формату :format.',
    'different' => 'Поля :attribute и :other должны быть разными.',
    'digits' => 'Поле :attribute должно быть :digits цифрами.',
    'digits_between' => 'Поле :attribute должно быть от :min до :max цифр.',
    'dimensions' => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'email' => 'Поле :attribute должно быть действительным адресом электронной почты.',
    'exists' => 'Выбранное значение для :attribute недействительно.',
    'file' => 'Поле :attribute должно быть файлом.',
    'filled' => 'Поле :attribute обязательно для заполнения.',
    'image' => 'Поле :attribute должно быть изображением.',
    'in' => 'Выбранное значение для :attribute недействительно.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'ip' => 'Поле :attribute должно быть действительным IP-адресом.',
    'json' => 'Поле :attribute должно быть действительной JSON-строкой.',
    'max' => [
        'numeric' => 'Поле :attribute не может быть больше :max.',
        'file' => 'Поле :attribute не может быть больше :max килобайт.',
        'string' => 'Поле :attribute не может быть больше :max символов.',
        'array' => 'Поле :attribute не может содержать больше :max элементов.',
    ],
    'mimes' => 'Поле :attribute должно быть файлом типа: :values.',
    'mimetypes' => 'Поле :attribute должно быть файлом типа: :values.',
    'min' => [
        'numeric' => 'Поле :attribute должно быть не меньше :min.',
        'file' => 'Поле :attribute должно быть не меньше :min килобайт.',
        'string' => 'Поле :attribute должно быть не меньше :min символов.',
        'array' => 'Поле :attribute должно содержать не меньше :min элементов.',
    ],
    'not_in' => 'Выбранное значение для :attribute недействительно.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'present' => 'Поле :attribute должно быть присутствующим.',
    'regex' => 'Формат поля :attribute недействителен.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => 'Поле :attribute обязательно, когда :other равно :value.',
    'required_unless' => 'Поле :attribute обязательно, если :other не находится в :values.',
    'required_with' => 'Поле :attribute обязательно, когда присутствует :values.',
    'required_with_all' => 'Поле :attribute обязательно, когда присутствует :values.',
    'required_without' => 'Поле :attribute обязательно, когда отсутствует :values.',
    'required_without_all' => 'Поле :attribute обязательно, когда ни одно из :values не присутствует.',
    'same' => 'Поля :attribute и :other должны совпадать.',
    'size' => [
        'numeric' => 'Поле :attribute должно быть :size.',
        'file' => 'Поле :attribute должно быть :size килобайт.',
        'string' => 'Поле :attribute должно быть длиной :size символов.',
        'array' => 'Поле :attribute должно содержать :size элементов.',
    ],
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно быть действительным часовым поясом.',
    'unique' => 'Значение поля :attribute уже занято.',
    'uploaded' => 'Не удалось загрузить файл :attribute.',
    'url' => 'Формат поля :attribute недействителен.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

    // Internal validation logic for Pterodactyl
    'internal' => [
        'variable_value' => 'переменная :env',
        'invalid_password' => 'Введенный пароль недействителен для этой учетной записи.',
    ],
];
