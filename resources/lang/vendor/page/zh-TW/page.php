<?php

return [
    'name'        => '內容',
    'names'       => '文章',
    'options'     => [
        'view' => ['default' => 'Default', 'left' => 'Left Menu', 'right' => 'Right Menu'],
        'compile' => ['0' => 'No', '1' => 'Yes'],
        'status' => ['0' => 'Hide', '1' => 'Show'],
        'category' => ['default' => 'Default'],
    ],
    'label'       => [
        'name'             => '標題',
        'title'            => 'Title',
        'heading'          => 'Heading',
        'sub_heading'      => 'Sub heading',
        'abstract'         => 'Abstract',
        'content'          => 'Content',
        'meta_title'       => 'Meta 標題',
        'meta_keyword'     => 'Meta 關鍵字',
        'meta_description' => 'Meta 說明',
        'banner'           => 'Banner',
        'images'           => '圖片',
        'compile'          => 'Compile',
        'view'             => 'View',
        'order'            => '排序',
        'status'           => '狀態',
        'status'           => '狀態',
        'keyword'          => 'Keyword',
        'description'      => 'Description',
        'slug'             => '網址後綴',
        'url'              => 'Url',
        'created_at'       => 'Created at',
        'updated_at'       => 'Updated at',
        'category_id'      => '分類',
    ],
    'placeholder' => [
        'name'             => '請輸入你的標題',
        'title'            => 'Please enter title',
        'description'      => 'Please enter description',
        'heading'          => 'Please enter heading',
        'sub_heading'      => 'Please enter sub heading',
        'abstract'         => 'Please enter abstract / summary text for the page',
        'content'          => 'Please enter content',
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
        'category_id'      => 'Please enter category',
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
