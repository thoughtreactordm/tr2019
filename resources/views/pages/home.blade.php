@php
    $page = [
        'description' => 'Thought Reactor is a passionate game development studio dedicated to building quality and artistic games that incorporate the challenge and engagement of puzzles.'
    ];
@endphp

@extends('layouts.master')

@section('title', 'Engaging indie games')

@section('content')

    @forelse($posts as $post)
        @include('layouts.partials.article')
    @empty
        <div class="m-8 text-center">
            <h1>He's tryin'!</h1>
            <img class="w-full m-4 shadow" src="{{ asset('/img/meeseeks.png') }}">

            <h3>Nothings broken - just working on getting the first blog post up!</h3>
        </div>
    @endforelse

    {{ $posts->links('layouts.utility.paginator') }}

@endsection
