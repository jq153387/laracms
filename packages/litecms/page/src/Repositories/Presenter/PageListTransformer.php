<?php

namespace Litecms\Page\Repositories\Presenter;

use League\Fractal\TransformerAbstract;

class PageListTransformer extends TransformerAbstract
{
    public function transform(\Litecms\Page\Models\Page $page)
    {
        return [
            'id'      => $page->getRouteKey(),
            'slug'    => $page->slug,
            'url'     => $page->slug . '.html',
            'name'    => $page->name,
            'heading' => $page->heading,
            'title'   => $page->title,
            'category' => $page->category,
            'keyword' => $page->keyword,
            'status'  => $page->status,
            'order'   => $page->order,
            'created_at'   => $page->created_at
        ];
    }
}
