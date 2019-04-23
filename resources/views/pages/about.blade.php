@php
    $page = [
        'description' => 'Thought Reactor is a passionate game development studio dedicated to building quality and artistic games that incorporate the challenge and engagement of puzzles.'
    ];
@endphp

@extends('layouts.master-internal')

@section('title', 'About')

@section('content-fw')
{{--  INTRO  --}}
<div class="p-16 bg-gradient-br-brand text-center">

    <div class="container mx-auto max-w-lg text-orange-lighter">
        <h1 class="text-white text-5xl">Engage. Entertain. Enlighten.</h1>

        <p class="my-6 text-2xl">
            Thought Reactor is a passionate game development studio dedicated to building quality and artistic games that incorporate the challenge and engagement of puzzles. From traditional puzzlers to story-driven adventure games, we create our games to test the mind while providing enlightening and entertaining gameplay experiences.
        </p>
    </div>

</div>

{{--  WHY PUZZLES?  --}}
<div class="p-16 text-center">

    <div class="container mx-auto max-w-lg text-grey-dark">
        <h2 class="text-4xl">Why Puzzles?</h2>

        <p class="my-6 text-2xl">
            Critical thinking, pattern recognition, and spacial reasoning are some of the most powerful components of the human mind. We feel puzzle games and games that infuse those design elements into their gameplay are amongst the most rewarding styles of games we can play.
        </p>

        <p class="my-6 text-2xl">
            By leveraging the strongest faculties of our minds we can spurn both challenge, reward, and creative divergence. Thought Reactor designs games purposefully to enable those portions of the brain to hopefully provide an enriching gameplay experience free from gimmicks and manipulation. Through the use of these pathways we aim to make games that illicit the rewarding feeling of surmounting a challenge and arising victorious.
        </p>
    </div>

</div>

{{--  OUR WORK SO FAR  --}}
<div class="p-16 bg-gradient-bl-dark-grey text-center">

    <div class="container mx-auto max-w-lg text-grey-light">
        <h2 class="text-4xl text-white">Our Work So Far...</h2>

        <p class="my-6 text-2xl">
            Over the course of over 7 years (3 as an incorporated entity), Thought Reactor has spent the majority of its time experimenting with ideas and concepts that fit the mold of games we are passionate about bringing to the world. Through all this, we have participated in over thirteen <a href="https://ldjam.com">Ludum Dare</a> game jams, turning out six small, experimental games.
        </p>

        <p class="my-6 text-2xl">
            Additionally, we have released one commercial title, <a href="https://thoughtreactor.itch.io/igeo">IGEO</a>, an isometric logic-based puzzle game originally created for Ludum Dare 35. Since the release of IGEO, we have been refining our craft by fleshing out several prototypes in the hope that one day we can fund and realize more ambitious projects.
        </p>

        <p class="my-6 text-2xl">
            In 2019, our primary goal is to release several small games. In conjunction with Ludum Dare and other jams, Thought Reactor will be polishing an old prototype (<a href="https://thoughtreactor.itch.io/light-drifter-34">Light Drifter 34</a>) and revitalizing IGEO with a deeper, content-rich spiritual successor, known currently as <em>Temples of IGEO</em>.
        </p>
    </div>

</div>

{{--  WHAT DOES THE FUTURE HOLD  --}}
<div class="p-16 bg-gradient-br-brand text-center">

    <div class="container mx-auto max-w-lg text-orange-lighter">
        <h2 class="text-4xl text-white">What Does the Future Hold?</h2>

        <p class="my-6 text-2xl">
            For the past one and a half years, we have been developing an intensive prototype for an FPS puzzle game known as <a href="https://parabolagame.com" class="text-white"><em>PARABOLA</em></a>.
        </p>

        <p class="my-6 text-2xl">
            While it has undergone numerous design alterations, the core concept of this game focuses on the shooting and bouncing of projectiles that power machines to solve challenging logic puzzles. Our goal is to embed this fun and challenging gameplay in a rich and engaging world filled with light story elements.
        </p>

        <p class="my-6 text-2xl">
            As we continue to hone our skills in game jams and refine our product offering with smaller, bite-sized titles, <em>PARABOLA</em> will remain a constant focus on a future Thought Reactor that can build and publish deep, full games with vibrant visuals, engrossing gameplay, and enlightening narratives.
        </p>
    </div>

</div>

{{--  FOLLOW OUR JOURNEY  --}}
<div class="pt-16 text-center">

    <div class="container mx-auto max-w-lg">

        <h2 class="text-5xl">Follow Our Journey!</h2>

        <p class="my-6 text-2xl">
            To keep up with recent developments, releases, and inside looks at how we design and build games - be sure to follow us on your favorite channels or bookmark the blog. We hope to have you along for this incredible journey!
        </p>

    </div>

</div>

@endsection
