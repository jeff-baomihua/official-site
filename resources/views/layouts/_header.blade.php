<div class="nav index">
    <div class="layui-container">
        <!-- 公司logo -->
        <div class="nav-logo">
            <a href="{{ route('pages.index') }}">
                <img src="{{ '/res/static/img/logo.png' }}" alt="网络公司">
            </a>
        </div>
        <div class="nav-list">
            <button>
                <span></span><span></span><span></span>
            </button>
            {{-- 类目 --}}
            <ul class="layui-nav" lay-filter="">
                @foreach($categories as $category)
                    @if (in_array($category->route, explode('.', current_route())))
                        <li class="layui-nav-item layui-this"><a href="/{{ $category->route }}">{{ $category->name }}</a></li>
                    @else
                        <li class="layui-nav-item"><a href="/{{ $category->route }}">{{ $category->name }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
</div>