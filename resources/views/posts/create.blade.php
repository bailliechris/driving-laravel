@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Create Post
                </h1>
            </div>
        </div>
    </section>
    <section>
        <div class='tile'>
            <div class='container is-fluid'>

                <form method="post" action="/posts" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="field">
                        <label for="title" class="label">Post Title</label>
                        <div class="control">
                            <input name="title" type="text" class="input" id="title" 
                                    placeholder="Post Title">
                        </div>
                    </div>
                    <div class="field">
                        <label for="body" class="label">Post Body</label>
                        <div class="control">
                            <textarea name="body" type="text" class="input" id="body"
                                   placeholder="Post text goes here..." rows="10"></textarea>
                        </div>
                    </div>

                    <div class="file">
                        <label class="file-label">
                          <input class="file-input" type="file" name="image">
                          <span class="file-cta">
                            <span class="file-icon">
                              <i class="fas fa-upload"></i>
                            </span>
                            <span class="file-label">
                              Choose a file…
                            </span>
                          </span>
                        </label>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-success">Submit Post</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
@endSection