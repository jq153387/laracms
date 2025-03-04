<?php

return [
    'name'        => '內容',
    'names'       => '文章',
    'options'     => [
        'view' => ['default' => 'Default', 'left' => 'Left Menu', 'right' => 'Right Menu'],
        'compile' => ['0' => 'No', '1' => 'Yes'],
        'status' => ['Hide' => '停止發佈', 'Show' => '發佈的'],
        'category' => ['news' => '最新消息', 'default' => '頁面'],
    ],
    'label'       => [
        'name'             => '標題',
        'title'            => 'Title',
        'heading'          => 'Heading',
        'sub_heading'      => 'Sub heading',
        'abstract'         => 'Abstract',
        'content'          => '內容',
        'meta_title'       => 'Meta 標題',
        'meta_keyword'     => 'Meta 關鍵字',
        'meta_description' => 'Meta 說明',
        'banner'           => 'Banner',
        'images'           => '圖片',
        'compile'          => 'Compile',
        'view'             => 'View',
        'order'            => '排序',
        'status'           => '狀態',
        'keyword'          => 'Keyword',
        'description'      => 'Description',
        'slug'             => '網址後綴',
        'url'              => '網址後綴',
        'created_at'       => '發佈日期',
        'updated_at'       => 'Updated at',
        'category'          => '分類',
    ],
    'placeholder' => [
        'name'             => '請輸入你的標題',
        'title'            => '請輸入你的標題',
        'description'      => 'Please enter description',
        'heading'          => 'Please enter heading',
        'sub_heading'      => 'Please enter sub heading',
        'abstract'         => 'Please enter abstract / summary text for the page',
        'content'          => '請輸入你的內容',
        'meta_title'       => '請輸入你的meta 標題',
        'meta_keyword'     => '請輸入你的meta 關鍵字',
        'meta_description' => '請輸入你的meta 說明',
        'banner'           => 'Please enter banner',
        'images'           => 'Please enter images',
        'compile'          => 'Please select compile',
        'view'             => 'Please select view',
        'order'            => '設定排序',
        'status'           => '請輸入你的狀態',
        'keyword'          => 'Please enter keyword',
        'description'      => 'Please enter description',
        'slug'             => '請輸入你的網址後綴',
        'category'      => '請選擇分類',
    ],

    /**
     * Columns array for show hide checkbox.
     */
    'cloumns'     => [
        'name'    => ['name' => 'Name', 'data-column' => 1, 'checked' => 'checked', 'disabled' => 'disabled'],
        'title'   => ['name' => 'Title', 'data-column' => 2, 'checked' => 'checked'],
        'url'     => ['name' => 'URL', 'data-column' => 3, 'checked' => 'checked', 'disabled' => 'disabled'],
        'heading' => ['name' => 'Heading', 'data-column' => 4, 'checked' => 'checked'],
        'order'   => ['name' => 'Order', 'data-column' => 5],
    ],

    'message'     => [
        'nopage' => '找不到網頁',
    ],
    'tab'         => [
        'page'    => '標題',
        'setting' => '設定',
        'meta'    => 'Meta',
        'image'   => 'Image',
    ],
    'text'        => [
        'preview' => '單擊下面的列表進行預覽',
    ],
];
