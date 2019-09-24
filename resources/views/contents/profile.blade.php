@extends('layouts.content')
@section('content')
  
  {{-- Profile Info --}}
  <div class="row my-3 justify-content-center">
    <div class="col-10 col-sm-8">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-lg-3 col-md-4 col-12">
              <img src="https://via.placeholder.com/150" alt="profile picture" class="mb-4">
            </div>
            <div class="col-lg-9 col-md-8 col-12">
              <h4>Akbar Iskandar</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam eveniet accusantium, sed corrupti a harum, libero necessitatibus repellat non, architecto officiis illum. Possimus totam, asperiores doloremque incidunt itaque nobis libero.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- End Profile Info --}}
  
  <div class="row my-3 justify-content-center">
    <div class="col-10 col-sm-8">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12">

          {{-- Satuan Status --}}
          @component('components.status-card')
          @endcomponent
          {{-- End Satuan Status --}}

        </div>
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