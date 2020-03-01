<?php

namespace Litecms\Page\Repositories\Eloquent;

use Litecms\Page\Interfaces\PageRepositoryInterface;
use Litepie\Repository\Eloquent\BaseRepository;

class PageRepository extends BaseRepository implements PageRepositoryInterface
{

    /**
     * Booting the repository.
     *
     * @return null
     */
    public function boot()
    {
        $this->fieldSearchable = config('litecms.page.page.search');
    }

    /**
     * Specify Model class name.
     *
     * @return string
     */
    public function model()
    {
        return config('litecms.page.page.model');
    }

    /**
     * Get page by id or slug.
     *
     * @return void
     */
    public function getPage($var)
    {
        return $this->findBySlug($var);
    }
    /**
     * Get paginate page
     *
     * @return void
     */
    public function getPaginate($number)
    {
        return $this->paginate($limit = $number, $columns = ['*'])->where('status','=','Show');
    }
    /**
     * Get Simple Limit page tabel data by news.
     *
     * @return void
     */
    public function getSimpleLimit($number,$id,$sort)
    {
        return $this->model->where('category','=','news')->where('status','=','Show')->orderBy('order','ASC')->orderBy('id','DESC')->limit($number)->get();
    }
    /**
     * Get page all tabel data by news.
     *
     * @return void
     */
    public function getListAll()
    {
        return $this->model->where('category','=','news')->where('status','=','Show')->orderBy('order','ASC')->orderBy('id','DESC')->get();
    }
    
    
}
