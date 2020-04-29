@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Edit Post
                </h1>
            </div>
        </div>
    </section>
    <section>
        <div class='tile'>
            <div class='container is-fluid'>

                <form method="post" action="/posts/edit" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{$post->id}}">
                    <div class="field">
                        <label for="title" class="label">Post Title</label>
                        <div class="control">
                            <input name="title" type="text" class="input" id="title" 
                                    value="{{$post->title}}">
                        </div>
                    </div>
                    <div class="field">
                        <label for="body" class="label">Post Body</label>
                        <div class="control">
                            <textarea name="body" type="text" class="input" id="body" 
                            rows="10">{{$post->body}}</textarea>
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-primary">Update Post</button>
                            <a href="/posts/{{$post->id}}" class="button">Return to post: "{{$post->title}}"</a>
                        </div>
                    </div>
                    
                </form>
                
            </div>
        </div>
    </section>
@endSection