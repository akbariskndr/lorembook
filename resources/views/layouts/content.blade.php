@extends('layouts.app')
@section('main')
  @component('components.header-nav')
  @endcomponent
  
  <div class="container-fluid">

    <main>
      @yield('content')
    </main>
    
  </div>

@endsection