@extends('layouts.master')

@section('title', 'Engaging indie games')

@section('content')

    @for($i=0; $i < 5; $i++)
        <article class="my-8 bg-white shadow-md">
            <div class="border-t-8 border-gradient-r-brand bg-gradient-l-dark-grey">
                <div class="w-full">
                    <img src="/img/blog.jpg" alt="">
                </div>
                <div class="p-3 text-white">
                    <h2 class="md:text-4xl sm:text-lg blog-headline">
                        <a href="">Headline</a>
                    </h2>
                    <h4 class="post-date md:text-2xl font-light">
                        Posted on January 7, 2019
                    </h4>
                </div>
            </div>


            <div class="p-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore
                    et dolore magna aliqua. Neque aliquam vestibulum morbi blandit cursus risus at ultrices.
                    Dignissim
                    sodales ut eu sem integer vitae. Nunc consequat interdum varius sit amet mattis vulputate.
                    Ullamcorper morbi tincidunt ornare massa eget. Mattis vulputate enim nulla aliquet porttitor
                    lacus
                    luctus. Felis imperdiet proin fermentum leo. Nec nam aliquam sem et tortor. Porttitor leo a
                    diam
                    sollicitudin tempor id eu. Velit dignissim sodales ut eu sem integer vitae. Interdum posuere
                    lorem
                    ipsum dolor sit amet. Cursus euismod quis viverra nibh cras pulvinar mattis.</p>

                <p>Et malesuada fames ac turpis. Enim sit amet venenatis urna. Nisi quis eleifend quam
                    adipiscing
                    vitae.
                    Sed risus pretium quam vulputate dignissim suspendisse in est. Eu turpis egestas pretium
                    aenean
                    pharetra. Vel pharetra vel turpis nunc eget lorem <a href="#">dolor sed viverra</a>. Vitae
                    semper
                    quis lectus nulla at volutpat diam ut. Quam nulla porttitor massa id neque aliquam
                    vestibulum
                    morbi.
                    Senectus et netus et malesuada fames. Massa tincidunt dui ut ornare. Quis commodo odio
                    aenean
                    sed.
                    Ipsum suspendisse ultrices gravida dictum fusce ut.</p>

            </div>

            <div class="p-3 text-grey-light bg-gradient-r-light-grey-white flex justify-between border-gradient-r-grey-white border-t-2">
                <span>Tags: <a href="#">tag1</a>, <a href="#">tag2</a></span>
                <span><em>By Michael DeLally</em></span>
            </div>
        </article>
    @endfor

@endsection