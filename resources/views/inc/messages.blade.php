@if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <div class="notification is-danger">
      <button class="delete" aria-label="delete"></button>
        {{$error}}
    </div>
  @endforeach

@endif

@if(session('success'))
  <div class="notification is-success">
    <button class="delete" aria-label="delete"></button>
    {{session('success')}}
  </div>
@endif

@if(session('error'))
  <div class="notification is-danger">
    <button class="delete" aria-label="delete"></button>
    {{session('error')}}
  </div>
@endif
