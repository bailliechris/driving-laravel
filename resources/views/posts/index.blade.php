@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Testimonials
                </h1>
            </div>
        </div>
    </section>
    <section>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class='tile'>
                        <div class='container is-fluid'>
                            <div class='box'>
                                <a href='/posts/{{$post->id}}'>
                                <p class="title is-4">{{$post->title}}</p></a>
                                <p class="subtitle is-6">Written on {{$post->created_at}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class='container is-fluid'>
                    {{$posts->links()}}
                </div>
            @else
                <div class='tile'>
                    <p class="title is-3">No Posts Found</p>
                <div>
            @endif
    </section>
@endSection