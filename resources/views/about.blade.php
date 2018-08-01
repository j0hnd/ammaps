@extends('maps')

@section('main-content')
  @component('components.jumbotron')
     @slot('title')
       About
     @endslot

     @slot('content')
      <p>Officia magna elit proident consectetur sunt Lorem aliqua officia quis. Cillum esse exercitation ipsum non
        proident sunt officia laboris esse non in amet excepteur dolore occaecat. Et cillum mollit commodo occaecat
        culpa officia incididunt non velit aliqua culpa. Minim nulla non sunt Lorem elit do voluptate et cillum
        tempor fugiat quis.</p>
      <p>Sunt magna minim magna sit fugiat in ex ex. Nulla mollit ullamco cillum occaecat eu eiusmod minim velit
        eiusmod consequat fugiat enim. Anim quis consectetur do eu in nulla do id duis incididunt sit ut veniam
        nisi mollit. Esse et elit elit ad velit reprehenderit velit nisi ipsum. Dolor enim in enim quis ea adipisicing
        in ut quis est reprehenderit enim cupidatat ex occaecat Lorem. Eu culpa cupidatat est pariatur sunt culpa sint
        sit nisi nisi irure incididunt ex.</p>
     @endslot
   @endcomponent
@endsection

@push('scripts')
<script type="text/javascript">
  mixpanel.track("Loaded about page");
  mixpanel.track_links(".signup-btn", "clicked signup form", {
    "referrer": document.referrer
  });
</script>
@endpush
