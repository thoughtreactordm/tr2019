<article class="my-8 bg-white shadow-md">
    <div class="border-t-8 border-gradient-r-brand bg-gradient-l-dark-grey">
        <div class="w-full h-64 xs:h-32 bg-center bg-cover"
             style="background-image: url({{ asset('/storage/' . $post->image) }});"
        ></div>
        <div class="p-3 text-white">
            <h2 class="md:text-5xl sm:text-lg blog-headline">
                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <h4 class="post-date md:text-2xl font-light text-grey">
                {{ $post->created_at->format('F jS, Y') }}
            </h4>
        </div>
    </div>


    <div class="p-8">
        {!! $post->body !!}
    </div>

    <div class="p-3 text-grey-light bg-gradient-r-light-grey-white flex flex-wrap justify-between border-gradient-r-grey-white border-t-2">
        <strong>By {{ $post->author["name"] }}</strong>

        @if($post->updated_at > $post->created_at)
            <em>Last updated {{ $post->updated_at->format('F jS, Y') }}</em>
        @else
            <em>Posted on {{ $post->created_at->format('F jS, Y') }}</em>
        @endif
    </div>
</article>
