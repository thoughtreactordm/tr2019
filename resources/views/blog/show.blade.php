@extends('layouts.master-internal')

@section('title', $post->title)

@section('hero')
    <div class="bg-gradient-r-brand">
        <div class="w-full h-96 xs:h-32 bg-center bg-cover"
             style="background-image: url({{ asset('/storage/' . $post->image) }});"
        ></div>
        <div class="container mx-auto max-w-2xl p-6 text-white">
            <h1 class="md:text-4xl xs:text-2xl blog-headline text-white">
                {{ $post->title }}
            </h1>
            <h4 class="post-date md:text-2xl font-light text-orange-lighter">
                Posted on {{ $post->created_at->format('F jS, Y') }}
            </h4>
        </div>
    </div>
@endsection

@section('content')

    <article class="bg-white shadow-md">
        <div class="p-16 xs:p-4 leading-open">
            {!! $post->body !!}
        </div>

        <div class="p-3 text-grey-light bg-gradient-r-light-grey-white flex flex-wrap justify-between border-gradient-r-grey-white border-t-2">
            <strong>By {{ $post->author["name"] }}</strong>
            <em>Last updated {{ $post->updated_at->format('F jS, Y') }}</em>
        </div>
    </article>

    <section class="m-6 flex justify-between {{ (!isset($previous) ? 'flex-row-reverse' : '') }}">

        @if(isset($previous))
            <div class="flex flex-col">
                <span class="text-sm text-grey-light">Previous</span>
                <span>
                    <a class="text-2xl xs:text-base" href="/blog/{{ $previous->slug }}">{{ $previous->title }}</a>
                </span>
            </div>
        @endif

        @if(isset($next))
            <div class="flex text-right flex-col">
                <span class="text-sm text-grey-light">Next</span>
                <span>
                    <a class="text-2xl xs:text-base" href="/blog/{{ $next->slug }}">{{ $next->title }}</a>
                </span>
            </div>
        @endif

    </section>

@endsection
