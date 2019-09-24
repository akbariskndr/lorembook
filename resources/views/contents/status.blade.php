@extends('layouts.content')
@section('content')
  <div class="row my-3 justify-content-center">
    <div class="col-lg-6 col-md-8 col-10">

      @component('components.status-card')
      @endcomponent
      @component('components.comments')
      @endcomponent
      
    </div>
  </div>
@endsection