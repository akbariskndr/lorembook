@extends('layouts.content')
@section('content')
  <div class="row my-3 justify-content-center">
    <div class="col-sm-8 col-10">
      <div class="row">
        {{-- Satuan Status --}}
        <div class="col-lg-4 col-md-6 col-12">
          @component('components.status-card')
          @endcomponent
        </div>
        {{-- End Satuan Status --}}
      </div>
    </div>

  </div>

  @component('components.fab-add-status')
  @endcomponent

@endsection

@section('foot')

  @component('components.modal-add-status')
  @endcomponent
  
@endsection