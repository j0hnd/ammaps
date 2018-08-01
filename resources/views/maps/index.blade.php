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
    <div class="col-12">
      <div id="nav">
        <a href="/about" class="btn btn-info about">About</a>
        <a href="/pricing" class="btn btn-info pricing">Pricing</a>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
<script type="text/javascript">
  mixpanel.track("Load Map");
  mixpanel.track_links("#nav .about", "click about link", {
      "referrer": document.referrer
  });
  mixpanel.track_links("#nav .pricing", "click pricing link", {
      "referrer": document.referrer
  });
</script>
@endpush
