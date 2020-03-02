<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | following language lines contain default error messages used by
    | validator class. Some of these rules have multiple versions such
    | as size rules. Feel free to tweak each of these messages here.
    |
    | Simplified Chinese Translated by @佛壁灯
    |
    */

    'accepted' => ':attribute 必須被接受。 ',
    'active_url' => ':attribute 非有效URL。 ',
    'after' => ':attribute 必須為 :date 後的日期。 ',
    'after_or_equal' => ':attribute 必須為 :date 後或與其相同的日期。 ',
    'alpha' => ':attribute 僅能包含字母。 ',
    'alpha_dash' => ':attribute 僅能包含字母、數字和半角連接符。 ',
    'alpha_num' => ':attribute 僅能包含字母和數字。 ',
    'array' => ':attribute 必須為數列。 ',
    'before' => ':attribute 必須為 :date 前的日期。 ',
    'before_or_equal' => ':attribute 必須為 :date 前或與其相同的日期。 ',
    'between' => [
        'numeric' => ':attribute 必須在 :min 和 :max 之間。 ',
        'file' => ':attribute 必須在 :min 和 :max 千字節之間。 ',
        'string' => ':attribute 必須在 :min 和 :max 字符之間。 ',
        'array' => ':attribute 必須在 :min 和 :max 項之間。 ',
    ],
    'boolean' => ':attribute 必須為 True 或 False。 ',
    'confirmed' => ':attribute 驗證不匹配。 ',
    'date' => ':attribute 非有效日期。 ',
    'date_format' => ':attribute 不匹配格式 :format。 ',
    'different' => ':attribute 和 :other 必須不同。 ',
    'digits' => ':attribute 必須為 :digits 位。 ',
    'digits_between' => ':attribute 必須為 :min 位和 :max 位之間。 ',
    'dimensions' => ':attribute 圖片大小無效。 ',
    'distinct' => ':attribute 域存在重複值。 ',
    'email' => ':attribute 必須為有效電子郵件地址。 ',
    'exists' => '選中的 :attribute 無效。 ',
    'file' => ':attribute 必須為文件。 ',
    'filled' => ':attribute 域必須存在值。 ',
    'image' => ':attribute 必須為圖片。 ',
    'in' => '選中的 :attribute 無效。 ',
    'in_array' => ':attribute 域不在 :other 中存在。 ',
    'integer' => ':attribute 必須為整數。 ',
    'ip' => ':attribute 必須為有效的 IP 地址。 ',
    'ipv4' => ':attribute 必須為有效的 IPv4 地址。 ',
    'ipv6' => ':attribute 必須為有效的 IPv6 地址。 ',
    'json' => ':attribute 必須為有效的 JSON 字符串。 ',
    'max' => [
        'numeric' => ':attribute 不能大於 :max。 ',
        'file' => ':attribute 不能大於 :max 千字節。 ',
        'string' => ':attribute 不能超過 :max 個字符。 ',
        'array' => ':attribute 不能有超過 :max 個項。 ',
    ],
    'mimes' => ':attribute 必須為文件類型： :values。 ',
    'mimetypes' => ':attribute 必須為文件類型： :values。 ',
    'min' => [
        'numeric' => ':attribute 必須至少為 :min。 ',
        'file' => ':attribute 必須至少為 :min 千字節。 ',
        'string' => ':attribute 必須至少有 :min 個字符。 ',
        'array' => ':attribute 必須至少有 :min 個項。 ',
    ],
    'not_in' => '選中的 :attribute 無效。 ',
    'numeric' => ':attribute 必須為數字。 ',
    'present' => ':attribute 域必須存在。 ',
    'regex' => ':attribute 格式無效。 ',
    'required' => '需要 :attribute 域。 ',
    'required_if' => '當 :other 為 :value 時需要 :attribute 域。 ',
    'required_unless' => '當 :other 在 :value 內時需要 :attribute 域。 ',
    'required_with' => '當 :values 存在時需要 :attribute 域。 ',
    'required_with_all' => '當 :values 存在時需要 :attribute 域。 ',
    'required_without' => '當 :values 不存在時需要 :attribute 域。 ',
    'required_without_all' => '當沒有 :values 存在時需要 :attribute 域。 :',
    'same' => ':attribute 和 :other 必須匹配。 ',
    'size' => [
        'numeric' => ':attribute 必須為 :size.',
        'file' => ':attribute 必須為 :size kilobytes.',
        'string' => ':attribute 必須為 :size characters.',
        'array' => ':attribute must contain :size items.',
    ],
    'string' => ':attribute 必須為字符串。 ',
    'timezone' => ':attribute 必須為有效區。 ',
    'unique' => ':attribute 已被使用。 ',
    'uploaded' => '無法上傳 :attribute。 ',
    'url' => ':attribute 格式無效。 ',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
