@extends('layouts.app')

@section('content')
    <section class="hero">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Contact Us
                </h1>
                <h2 class="subtitle">
                    Fill in your name and e-mail address, we'll get back to you!
                </h2>
            </div>
        </div>
    </section>
    <section>
        <div class='tile'>
            <div class='container is-fluid'>

                <form method="post" 
                    action="/contact" 
                    enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="field">
                        <label for="name" class="label">Name</label>
                        <div class="control">
                            <input name="name" type="text" class="input" id="name" 
                                    placeholder="Jane Smith">
                        </div>
                    </div>

                    <div class="field">
                        <label for="email" class="label">E-mail</label>
                        <div class="control">
                            <input name="email" type="text" class="input" id="email" 
                                    placeholder="your@email">
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="button is-success">E-mail Me!</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>
    </section>

@endsection