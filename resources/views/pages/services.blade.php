@extends('layouts.app')

@section('content')

    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    {{$title}}
                </h1>
                <h2 class="subtitle">
                    @if(count($services)>0)
                        <ul>
                        @foreach($services as $service)
                            <li class="list-group-item">{{$service}}</li>
                        @endforeach
                        </ul>
                    @endif
                </h2>
            </div>
        </div>
    </section>

@endsection