@extends('layouts.master')

@section('title', 'Engaging indie games')

@section('content')

    @foreach($posts as $post)
        @include('layouts.partials.article')
    @endforeach

    {{ $posts->links('layouts.utility.paginator') }}

@endsection
