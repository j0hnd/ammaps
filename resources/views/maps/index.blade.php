@extends('maps')

@section('main-content')
  @component('components.map', ['data' => $data, 'map' => 'usaLow'])
    @slot('title')
      Licensed Doctors Map
    @endslot

    <div class="row mt-3">
      <div class="col-12">
        <p>Sunt irure ad deserunt laborum in enim proident sunt officia sunt non esse. Proident non eu laboris do enim mollit eu minim adipisicing nulla irure esse
          et tempor tempor. Ut occaecat officia nisi cillum mollit dolore ex magna enim ex incididunt.</p>
      </div>
    </div>
  @endcomponent

  <div class="row">
    <div id="app">
      <example-component></example-component>

      <div id="components-demo">
        <button-counter></button-counter>
      </div>
    </div>
  </div>
@endsection
