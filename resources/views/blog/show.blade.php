@extends('layouts.master')

@section('title', $post->title)

@section('hero')
    <div class="bg-gradient-l-dark-grey">
        <div class="w-full h-128 xs:h-64 bg-center bg-cover"
             style="background-image: url('/img/blog.jpg');"
        ></div>
        <div class="container mx-auto max-w-lg p-3 text-white">
            <h1 class="md:text-4xl sm:text-lg blog-headline">
                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
            </h1>
            <h4 class="post-date md:text-2xl font-light">
                Posted on {{ $post->created_at->format('F jS, Y') }}
            </h4>
        </div>
    </div>
@endsection

@section('content')

    <article class="bg-white shadow-md">
        <div class="p-8">
            {!! $post->body !!}
        </div>

        <div class="p-3 text-grey-light bg-gradient-r-light-grey-white flex justify-between border-gradient-r-grey-white border-t-2">
            <span>Tags: <a href="#">tag1</a>, <a href="#">tag2</a></span>
            <span><em>By Michael DeLally</em></span>
        </div>
    </article>

@endsection
