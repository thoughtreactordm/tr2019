<article class="my-8 bg-white shadow-md">
    <div class="border-t-8 border-gradient-r-brand bg-gradient-l-dark-grey">
        <div class="w-full">
            <img src="/img/blog.jpg" alt="">
        </div>
        <div class="p-3 text-white">
            <h2 class="md:text-4xl sm:text-lg blog-headline">
                <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
            </h2>
            <h4 class="post-date md:text-2xl font-light">
                Posted on {{ $post->created_at->format('F jS, Y') }}
            </h4>
        </div>
    </div>


    <div class="p-8">
        {!! $post->body !!}
    </div>

    <div class="p-3 text-grey-light bg-gradient-r-light-grey-white flex justify-between border-gradient-r-grey-white border-t-2">
        <span>Tags: <a href="#">tag1</a>, <a href="#">tag2</a></span>
        <span><em>By Michael DeLally</em></span>
    </div>
</article>