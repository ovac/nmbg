@extends('layouts.app')

@section('content')

    <section class="ds section_padding_100 columns_margin_bottom_20">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="section_header">News</h2>
                </div>
            </div>
            <div class="row">

                @foreach ($blogs as $blog)
                    <div class="col-md-4 col-sm-6">
                        <article class="vertical-item content-padding with_background bottom_color_border text-center">
                            <div class="item-media">
                                @if ($blog->image)
                                    <img src="{{ $blog->image }}" alt="">
                                @elseif($blog->video)
                                    <img src="https://img.youtube.com/vi/{{ $blog->video }}/0.jpg" class="fluid" alt="">
                                @endif

                                <div class="media-links">
                                    <a href="/blogs/{{ $blog->id }}" class="abs-link"></a>
                                </div>
                            </div>
                            <div class="item-content">
                                <header class="entry-header">
                                    <span class="entry-date highlight lusitana">
                                        <time class="entry-date" datetime="{{ $blog->created_at }}">
                                            {{ $blog->created_at }}
                                        </time>
                                    </span>
                                    <h3 class="entry-title">
                                        <a href="/blogs/{{ $blog->id }}">
                                            {{ $blog->title }}
                                        </a>
                                    </h3>
                                    <p>
                                        {{ $blog->entry }}
                                    </p>
                                </header>

                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <section id="contacts" class="cs background_cover page_banner section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <span class="small-text main_bg_color2">24/7 support</span>
                    <p class="big playfair topmargin_10">1-800-123-4567</p>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
