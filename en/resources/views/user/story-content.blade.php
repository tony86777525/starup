@extends('user.basic.wrapper')

@push('meta')
    <title>StoryContent | {{ $story->title }} | Startup Portal Taiwan</title>
    <meta name="Description" content="Stories about entrepreneurs in Taiwan">
    <meta property="og:title" content="StoryContent | {{ $story->title }} | Startup Portal Taiwan">
    <meta property="og:description" content="Stories about entrepreneurs in Taiwan">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ route('user.story-content', ['story_id' => $story->id]) }}">
    <meta property="og:image" content="{{ asset($story->image) }}">
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
        <h1 class="title">{{ $story->title }}</h1>
        <div class="date mt-3 mb-3">{{ $story->art_date }} | {{ $story->tag }}</div>
        <div class="clearfix"></div>
        <div>
            <img alt="{{ $story->title }}" src="{{ $story->image }}" style="max-width:100%;height:auto;" />
            <div class="NewsContent pt-3 mb-5">
                {!! $story->content !!}
            </div>
        </div>
    </div>
@endsection

@push('page_script')

@endPush
