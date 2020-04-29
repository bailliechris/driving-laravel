@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="hero-body">
        <div class="container">
            <h1 class="title">
                {{$post->title}}
            </h1>
        </div>
    </div>
</section>
<section>
    <div class='tile'>
        <div class='container is-fluid'>
            <div class="card">
                <div class="card-image">
                  <figure class="image">
                    <img class="card-img-top" src="{{ Storage::url($post->image)  }}">
                  </figure>
                </div>
                <div class="card-content">      
                  <div class="content">
                    <p class="title is-4">{{$post->body}}</p>
                    <br>
                    <p class="subtitle is-6">Written on {{$post->created_at}}</p>
                    <br>

                    @guest
                      
                      <a href="/posts" class="button">Return to all posts</a>

                    @else
                      
                      <a href="/posts/{{$post->id}}/edit" class="button is-warning">Edit Post</a>

                      <button id="btn" class="button is-danger" v-on:click="toggle_modal">Delete Post</button>
                      
                      <a href="/posts" class="button">Return to all posts</a>

                      <div class="modal" v-bind:class="{'is-active':isShowModal}">
                        <div class="modal-background" v-on:click="toggle_modal"></div>
                        <div class="modal-card">
                          <header class="modal-card-head">
                            <p class="modal-card-title">Delete Post</p>
                            <button class="delete" aria-label="close" v-on:click="toggle_modal"></button>
                          </header>
                          <section class="modal-card-body">
                            <p>Are you sure you would like to delete this post?</p>
                          </section>
                          <footer class="modal-card-foot">
                            <form action="{{$post->id}}" method="POST">
                              @method('DELETE')
                              @csrf
                              <button type="submit" class="button is-danger">Confirm Delete</button>
                            </form>
                            <button class="button" v-on:click="toggle_modal">Cancel</button>
                          </footer>
                        </div>
                      </div>
                      
                    @endguest

                  </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endSection