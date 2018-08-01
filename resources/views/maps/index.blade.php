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
    <div class="col-md-8 offset-md-2 mt-5">
      <div id="nav">
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/pricing">Pricing</a>
    </div>
    </div>
  </div>
@endsection

@push('scripts')
<script type="text/javascript">
  mixpanel.track("Load Map");
  mixpanel.track_links("#nav a", "click nav link", {
      "referrer": document.referrer
  });
</script>
@endpush
