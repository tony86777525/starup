@extends('user.basic.wrapper')

@push('meta')
    <title>News content | {{ $news->title }} | Startup Portal Taiwan</title>
    <meta name="Description" content="Latest start up related news in Taiwan">
    <meta property="og:title" content="NewsContent | {{ $news->title }} | Startup Portal Taiwan">
    <meta property="og:description" content="Latest start up related news in Taiwan">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('user.news-content', ['news_id' => $news->id]) }}">
    <meta property="og:image" content="{{ asset($news->image) }}">
@endpush

@push('csrf_token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endPush

@push('page_css')
    <link rel="stylesheet" href="{{ asset('assets/css/user/newscontent.css') }}" />
@endPush

@section('main')
    <div class="sharethis-inline-share-buttons" style="z-index: 2;position: fixed;right: 65px;bottom: 42px;"></div>
    <div id="Page" class="container">
        <h1 class="title">{{ $news->title }}</h1>
        <div class="date mt-3 mb-3">{{ $news->art_date }} | {{ $news->tag }}</div>
        <div class="clearfix"></div>
        <div>
            <img alt="{{ $news->title }}" src="{{ $news->image }}" style="max-width:100%;height:auto;" />
            <div class="NewsContent pt-3 mb-5">
                {!! $news->content !!}
            </div>
        </div>
    </div>
@endsection

@push('page_script')

@endPush
