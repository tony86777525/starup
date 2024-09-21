@extends('user.basic.wrapper')

@push('meta')
    <title>Story | Startup Portal Taiwan</title>
    <meta name="Description" content="Stories about entrepreneurs in Taiwan">
    <meta property="og:site_name" content="Startup Portal Taiwan">
    <meta property="og:title" content="Story | Startup Portal Taiwan">
    <meta property="og:description" content="Stories about entrepreneurs in Taiwan">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('user.story') }}">
    <meta property="og:image" content="{{ asset('assets/img/bg_innovation.png') }}">
@endpush

@push('csrf_token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endPush

@push('page_css')
    <link rel="stylesheet" href="{{ asset('assets/css/user/news.css') }}" />
@endPush

@section('main')
    <div class="sharethis-inline-share-buttons" style="z-index: 2;position: fixed;right: 65px;bottom: 42px;"></div>
    <section>
        <section id="NewsPage" class="container mb-5">
            <div class="sc-box">
                <form action="{{ route('user.news') }}" method="get">
                    <input type="text" class="sc-input" placeholder="Search ..." name="q" value="">
                    <input type="submit" class="sc-submit" value="Search" style="background: transparent url('{{ asset('assets/img/search1.png') }}') center / 150% no-repeat;">
                </form>
            </div>
            @if($stories->isNotEmpty())
                @foreach($stories as $data)
                    <div class="row">
                        <div class="col-sm-12 col-md-4" id="News">
                            <a title="{{ $data->title }}" href="{{ route('user.story-content', ['story_id' => $data->id]) }}"><img alt="{{ $data->title }}" style="max-width:100%;height:auto;" class="pic2" src="{{ $data->image }}"></a>
                        </div>
                        <div class="col-sm-12 col-md-8 NewsWord">
                            <p class="NewsTitle"><a title="{{ $data->title }}" href="{{ route('user.story-content', ['story_id' => $data->id]) }}">{{ $data->title }}</a></p>
                            <div class="date">{{ $data->art_date }} | {{ $data->tag }}</div><br>
                            <div class="NewsContent">{{ \Illuminate\Support\Str::limit(\Illuminate\Support\Str::of($data->content)->stripTags(), 250) }}</div>
                            <button class="NewsButton"><a title="{{ $data->title }}" href="{{ route('user.news-content', ['news_id' => $data->id]) }}">More</a></button>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div style="background-color: #222831;height: 5px;margin-top: 18px;"></div>
                @endforeach
            @else
                <h3 class='mt-4'>No Results Found</h3><div>The page you requested could not be found. Try refining your search, or use the navigation above to locate the post.</div>
            @endif

            {{ $stories->links('user.basic.pagination', ['routeName' => 'user.story', 'q' => $q]) }}
        </section>
    </section>
@endsection

@push('page_script')

@endPush
