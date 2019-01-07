<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thought Reactor</title>

        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body class="bg-grey-lightest">

        <div class="container mx-auto">

            <header class="p-3">
                <div class="flex justify-between items-center">
                    <img src="/img/logo.svg" alt="Thought Reactor" class="logo">

                    <div class="uppercase invisible md:visible">
                        <a href="#"
                           class="text-grey-darkest font-black no-underline mx-1"
                        >
                            Home
                        </a>
                        <a href="#"
                           class="text-grey-darkest font-black no-underline mx-1"
                        >
                            Blog
                        </a>
                        <a href="#"
                           class="text-grey-darkest font-black no-underline mx-1"
                        >
                            Games
                        </a>
                        <a href="#"
                           class="text-grey-darkest font-black no-underline mx-1"
                        >
                            About
                        </a>
                    </div>
                </div>
            </header>

            <main>
                <div class="p-32 m-8 bg-white rounded-lg shadow-sm border-t-2 border-orange-dark">
                    <h2>Headline</h2>
                    <p>Body text...</p>
                </div>
            </main>

            <footer class="text-center text-grey-light p-16">
                <p class="m-6">
                    Copyright&copy;{{ date('Y') }} Thought Reactor, All Rights Reserved.
                </p>

                <p class="m-6">
                    Made with Laravel, Wink, and TailwindCSS.
                </p>
            </footer>
        </div>


    </body>
</html>
