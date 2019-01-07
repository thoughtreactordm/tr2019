<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Thought Reactor</title>

    <link rel="stylesheet" href="/css/app.css">

</head>
<body class="bg-grey-lightest">

<header class="p-6 bg-gradient-tl-dark-grey border-t-4 border-gradient-r-brand shadow-md">
    <div class="container mx-auto max-w-lg">
        <div class="flex justify-between items-center">
            <a href="/">
                <img src="/img/logo.svg" alt="Thought Reactor" class="logo">
            </a>

            <div class="uppercase invisible md:visible">
                <a href="#"
                   class="text-grey font-black no-underline mx-1 hover:text-orange-dark"
                >
                    Blog
                </a>
                <a href="#"
                   class="text-grey font-black no-underline mx-1 hover:text-orange-dark"
                >
                    Games
                </a>
                <a href="#"
                   class="text-grey font-black no-underline mx-1 hover:text-orange-dark"
                >
                    About
                </a>
            </div>
        </div>
    </div>
</header>

<div class="container mx-auto max-w-lg">

    <main>
        <article class="my-8 bg-white shadow-md md:rounded-b-lg">
            <div class="p-3 bg-gradient-l-dark-grey border-l-4 border-gradient-b-brand text-white">
                <h2>Headline</h2>
                <h4 class="post-date">
                    Posted on January 7, 2019
                </h4>
            </div>

            <div class="p-8">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Neque aliquam vestibulum morbi blandit cursus risus at ultrices. Dignissim sodales ut eu sem integer vitae. Nunc consequat interdum varius sit amet mattis vulputate. Ullamcorper morbi tincidunt ornare massa eget. Mattis vulputate enim nulla aliquet porttitor lacus luctus. Felis imperdiet proin fermentum leo. Nec nam aliquam sem et tortor. Porttitor leo a diam sollicitudin tempor id eu. Velit dignissim sodales ut eu sem integer vitae. Interdum posuere lorem ipsum dolor sit amet. Cursus euismod quis viverra nibh cras pulvinar mattis.</p>

                <p>Et malesuada fames ac turpis. Enim sit amet venenatis urna. Nisi quis eleifend quam adipiscing vitae. Sed risus pretium quam vulputate dignissim suspendisse in est. Eu turpis egestas pretium aenean pharetra. Vel pharetra vel turpis nunc eget lorem <a href="#">dolor sed viverra</a>. Vitae semper quis lectus nulla at volutpat diam ut. Quam nulla porttitor massa id neque aliquam vestibulum morbi. Senectus et netus et malesuada fames. Massa tincidunt dui ut ornare. Quis commodo odio aenean sed. Ipsum suspendisse ultrices gravida dictum fusce ut.</p>

            </div>

            <div class="p-3 text-grey-light bg-gradient-r-light-grey-white md:rounded-b-lg">
                Tags: <a href="#">tag1</a>, <a href="#">tag2</a>
            </div>
        </article>
    </main>

    <footer class="text-center text-grey-light p-16">
        <p class="m-6">
            Copyright&copy;{{ date('Y') }} Thought Reactor, All Rights Reserved.
        </p>

        <p class="m-6">
            Built with <a href="https://laravel.com">Laravel</a>, <a href="https://wink.themsaid.com/">Wink</a>, and <a href="https://tailwindcss.com">TailwindCSS</a>.
        </p>
    </footer>
</div>


</body>
</html>
