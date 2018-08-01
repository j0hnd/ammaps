<div class="mt-3">
    <h2>{{ $title }}</h2>
    <div id="mapdiv"></div>

    {{ $slot }}
</div>

@push('scripts')
<script type="text/javascript">
var map = AmCharts.makeChart( "mapdiv", {
  type: window.mapType,
  theme: window.mapTheme,
  dataProvider: {
    map: "{{ $map }}",
    areas: @json($data)
  },
  areasSettings: {
    color: window.color,
    rollOverColor: window.rollOverColor,
    rollOverOutlineColor: window.rollOverOutlineColor,
    selectedColor: window.selectedColor,
    outlineColor: window.outlineColor,
    balloonText: "<strong>[[title]]</strong><br/>Licensed doctor: [[description]]"
  },
  imagesSettings: {
    labelPosition: "middle",
    labelFontSize: 9
  }
});

map.addListener("init", function() {
  setTimeout(function() {
    // iterate through areas and put a label over center of each
    map.dataProvider.images = [];
    for ( x in map.dataProvider.areas ) {
      var area = map.dataProvider.areas[ x ];
      var image = new AmCharts.MapImage();
      image.latitude = map.getAreaCenterLatitude( area );
      image.longitude = map.getAreaCenterLongitude( area );
      image.label = area.id.substr( 3 );
      image.title = area.title;
      image.linkToObject = area;
      map.dataProvider.images.push( image );
    }
    map.validateData();
    console.log( map.dataProvider );
  }, 100)
});
</script>
@endpush
