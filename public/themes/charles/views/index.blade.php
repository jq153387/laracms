<div>
    <section class="title_news">
        <div class="title">
            <h1>最新消息<a href="{{trans_url('/news')}}" class="more-btn-link" style="margin-top:20px"></a></h1>
        </div>

        {{-- {!!$page->content!!} --}}
        <ul>
            @for ($i = 0; $i < count($page); $i++) <li><a
                    href="{{trans_url('/news/'.$page[$i]->slug.'.html')}}">{{ $page[$i]->title }}</a>
                <span style="float: right;display: block;">{{subStr($page[$i]->created_at,0,10)}}</span>
                </li>


                @endfor
        </ul>

    </section>
    <section class="title_hot">
        <a href="/qna.html" class="link-titls">查理大學第一醫學院 Q&A</a>
        <div class="contianer">
            <div class="row">
                <div class="col-md-8">
                    <div class="media-box">
                        <div class="media-l">
                            <a href="#">
                                <img src="{{theme_asset('img/index_11.gif')}}" />
                            </a>
                        </div>
                        <div class="media-b">
                            <h4 class="media-heading color-h-rr">捷克介紹</h4>
                            <p>1989年11月間柏林圍牆倒塌後，整個蘇聯東歐的共產勢力也在一夕之間變天解體，自由與資本浪潮吹向了東歐，也吹醒了捷克人民的民族自覺...</p><a
                                class="more-link" href="/Czech-bri-sdo.html">更多資料..</a>
                        </div>
                    </div>
                    <div class="media-box">
                        <div class="media-l">
                            <a href="#">
                                <img src="{{theme_asset('img/index_18.gif')}}" />
                            </a>
                        </div>
                        <div class="media-b">
                            <h4 class="media-heading color-h-gr">布拉格介紹</h4>
                            <p>布拉格興起於中世紀，由於西元1355年德國皇帝查理四世在此接受加冕，將布拉格定為神聖羅馬帝國德意志王國首都...</p><a class="more-link"
                                href="/blog-bri-sdo.html">更多資料..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="media-box">
                        <div class="media-lno">
                            <a href="#">
                                <img src="{{theme_asset('img/index-1_15.gif')}}" />
                            </a>
                        </div>
                        <div class="media-bno">
                            <h4 class="media-heading color-h-br">布拉格生活</h4>
                            <p>多數國際學生覺得捷克首都布拉格非常有吸引力...</p><a class="more-link" href="/blog-life.html">更多資料..</a>
                        </div>
                        <div class="media-bno">
                            <h4 class="media-heading color-h-or">捷克簽證</h4>
                            <p><a href="/Czech-visa.html">捷克學生及觀光簽證</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>