<nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="/">
        <img src={{ asset('storage/images/logo.jpg') }} width="100">
      </a>

      <a role="button" class="navbar-burger" v-on:click="swap_nav" v-bind:class="{ 'is-active': isShowNav }" aria-label="menu" aria-expanded="false">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div class="navbar-menu" v-bind:class="{ 'is-active': isShowNav }">
      <div class="navbar-start">
        <a class="navbar-item" href="/about">
          About
        </a>

        <a class="navbar-item" href="/services">
          Services
        </a>
        
        <a class="navbar-item" href="/posts">
          Testimonials
        </a>
        
        <a class="navbar-item" href="/contact">
          Contact Us
        </a>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            @guest
              <a class="navbar-item" href="{{ route('login') }}">{{ __('Login') }}</a>
              @if (Route::has('register'))
                <a class="navbar-item" href="{{ route('register') }}">{{ __('Register') }}</a>
              @endif

            @else
              <a class="navbar-item" href="/posts/create">
                Create Testimonial
              </a>
              <a class="navbar-item" href="#">
                {{ Auth::user()->name }} <span class="caret"></span>
              </a>
              <a class="navbar-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            @endguest
          </div>
        </div>
      </div>
    </div>
</nav>