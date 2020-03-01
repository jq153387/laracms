<?php

namespace Litecms\Page\Http\Controllers;

use App\Http\Controllers\PublicController as BaseController;

class PagePublicController extends BaseController
{
    /**
     * Constructor.
     *
     * @param type \Litecms\Page\Interfaces\PageInterface $page
     *
     * @return type
     */
    public function __construct(\Litecms\Page\Interfaces\PageRepositoryInterface $page)
    {
        parent::__construct();
        $this->model = $page;
    }

    /**
     * Show page.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function getPage($slug)
    {
        // get page by slug
        $page = $this->model->getPage($slug);
        if (is_null($page)||$page->status=='Hide'||$page->category=='news') {
            abort(404);
        }

        //Set theme variables
        $view = $page->view;
        $view = view()->exists('page::' . $view) ? $view : 'default';

        if ($page->compile) {
            $page->content = blade_compile($page->content);
        }

        return $this->response
            ->setMetaKeyword(strip_tags($page->meta_keyword))
            ->setMetaDescription(strip_tags($page->meta_description))
            ->setMetaTitle(strip_tags($page->meta_title))
            ->view('page::' . $view)
            ->data(compact('page'))
            ->output();

    }
    /**
     * Show page.
     *
     * @param string $slug
     *
     * @return response
     */
    protected function getPageNews($slug)
    {
        // get page by slug
        $page = $this->model->getPage($slug);
        if (is_null($page)||$page->status=='Hide'||$page->category=='default') {
            abort(404);
        }

        //Set theme variables
        $view = $page->view;
        $view = view()->exists('page::' . $view) ? $view : 'default';

        if ($page->compile) {
            $page->content = blade_compile($page->content);
        }

        return $this->response
            ->setMetaKeyword(strip_tags($page->meta_keyword))
            ->setMetaDescription(strip_tags($page->meta_description))
            ->setMetaTitle(strip_tags($page->meta_title))
            ->view('page::' . $view)
            ->data(compact('page'))
            ->output();

    }
    /**
     * Display a list of page.
     *
     * @return Response
     */
    public function Pageslist()
    {
        $data = $this->model->getListAll();
        return compact('data');
    }
    protected function getNewsList(){
        

        return $this->response->setMetaTitle(trans('page::page.names'))
            ->view('page::news')
            ->output();
        // return $this->response
        // ->setMetaKeyword("")
        // ->setMetaDescription(strip_tags(""))
        // ->setMetaTitle("")
        // ->view('page::news')
        // ->data('')
        // ->output();
    }

}
