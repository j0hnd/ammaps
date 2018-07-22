<div class="col-md-8 offset-md-2 mt-3">
    <h2>{{ $title }}</h2>
    <div id="mapdiv"></div>

    {{ $slot }}
</div>

@push('scripts')
<script type="text/javascript">
var map = AmCharts.makeChart( "mapdiv", {
  type: "map",
  theme: "light",
  dataProvider: {
    map: "{{ $map }}",
    areas: @json($data)
  },
  areasSettings: {
    color: "#3697d9",
    rollOverColor: "#9acbec",
    rollOverOutlineColor: "#256997",
    selectedColor: "#3087c3",
    outlineColor: "#FFFFFF",
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
