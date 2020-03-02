<?php

namespace App\Http\Controllers;

use App\Http\Response\PublicResponse;
use Litepie\Theme\ThemeAndViews;
use Litepie\User\Traits\RoutesAndGuards;
// use Litecms\Page\Interfaces\PageRepositoryInterface;
// use Litecms\Page\Models\Page;
// use App\Http\Controllers\APIController as BaseController;
// use Litecms\Page\Http\Requests\PageRequest;
class PublicController extends Controller
{
    use ThemeAndViews, RoutesAndGuards;

    /**
     * Initialize public controller.
     *
     * @return null
     */
    public function __construct()
    {
        $this->response = app(PublicResponse::class);
        $this->setTheme('charles');
        
    }

    /**
     * Show welcome page .
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        //$page = app(\Litecms\Page\Interfaces\PageRepositoryInterface::class)->getPage('home');

        return $this->response
            ->setMetaKeyword(strip_tags('歐洲醫學院,東歐醫學院,捷克醫學院,查理大學,查理大學第一醫學院,捷克留學'))
            ->setMetaDescription(strip_tags('傳寶留學中心致力於提供學生及家長最專業的諮詢及留學規劃，也用心及貼心的服務每位離鄉求學的學生，不論長期的學位課程或是短期的語言進修，〝傳寶〞皆秉持〝專業〞的態度，協助所有計畫出國的學生。'))
            ->setMetaTitle(strip_tags('歐洲醫學院,東歐醫學院,捷克醫學院,查理大學,查理大學第一醫學院,捷克留學'))
            ->layout('home')
            ->view('home')
            ->output();
    }
    /**
     * show home news list
     */
    public function index()
    {
        $page = app(\Litecms\Page\Interfaces\PageRepositoryInterface::class)->getSimpleLimit(5,'id','desc');
        
        //print_r($page);
        return $this->response
            ->setMetaKeyword(strip_tags('歐洲醫學院,東歐醫學院,捷克醫學院,查理大學,查理大學第一醫學院,捷克留學'))
            ->setMetaDescription(strip_tags('有鑒於許多〝傳寶〞服務過的學生，有志於進入醫學院就學，所以我們於2007取得捷克查理大學第一醫學院在台招生之代表，協助學生在台之諮詢及入學考試服務，並於捷克布拉格有完整的服務，提供學生於捷克時所需的協助，期望能讓有心從醫之學生順利的完成學業。
            除了捷克之外，傳寶也提供美國、英國、澳洲的醫學院入學諮詢，歡迎有興趣者可與我們聯繫！'))
            ->setMetaTitle(strip_tags('歐洲醫學院,東歐醫學院,捷克醫學院,查理大學,查理大學第一醫學院,捷克留學'))       
            ->layout('default')
            ->view('index')
            ->data(compact('page'))
            ->output();
    }
    // /**
    //  * show news list pages
    //  */
    // public function news()
    // {
    //     $page = app(\Litecms\Page\Interfaces\PageRepositoryInterface::class)->getSimpleLimit(5,'id','desc');
        
    //     //print_r($page);
    //     return $this->response
    //         ->setMetaKeyword(strip_tags('歐洲醫學院,東歐醫學院,捷克醫學院,查理大學,查理大學第一醫學院,捷克留學'))
    //         ->setMetaDescription(strip_tags('有鑒於許多〝傳寶〞服務過的學生，有志於進入醫學院就學，所以我們於2007取得捷克查理大學第一醫學院在台招生之代表，協助學生在台之諮詢及入學考試服務，並於捷克布拉格有完整的服務，提供學生於捷克時所需的協助，期望能讓有心從醫之學生順利的完成學業。
    //         除了捷克之外，傳寶也提供美國、英國、澳洲的醫學院入學諮詢，歡迎有興趣者可與我們聯繫！'))
    //         ->setMetaTitle(strip_tags('歐洲醫學院,東歐醫學院,捷克醫學院,查理大學,查理大學第一醫學院,捷克留學'))       
    //         ->layout('default')
    //         ->view('index')
    //         ->data(compact('page'))
    //         ->output();
    // }
}
