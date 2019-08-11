<div class="fly-panel">
    <div class="fly-panel-title fly-filter">
        <a href="" class="layui-this">全部</a>
        <span class="fly-mid"></span>
        <a href="" class="">游戏活动</a>
        <span class="fly-mid"></span>
        <a href="" class="">系统公告</a>
        <span class="fly-filter-right layui-hide-xs"></span>
    </div>

    <ul class="fly-list">
        @foreach($articles as $article)
            @if ($article->article_type_id == 1)
                <li>
                    <a class="layui-badge layui-bg-orange">{{ $article->articleType->name }}</a>
                    <a href="{{ route('articles.show', [$article->id])  }}"> {{ $article->title }}</a>
                    <div class="fly-list-badge">
                        <span class="layui-badge layui-bg-gray">{{ $article->created_at->format('Y-m-d') }}</span>
                    </div>
                </li>
            @else
                <li>
                    <a class="layui-badge layui-bg-blue">{{ $article->articleType->name }}</a>
                    <a href="{{ route('articles.show', [$article->id])  }}"> {{ $article->title }}</a>
                    <div class="fly-list-badge">
                        <span class="layui-badge layui-bg-gray">{{ $article->created_at->format('Y-m-d') }}</span>
                    </div>
                </li>
            @endif
        @endforeach
    </ul>
    <p></p>
    <div style="text-align: center">
        <div id="page"></div>
    </div>
</div>