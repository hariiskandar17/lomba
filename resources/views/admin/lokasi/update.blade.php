@extends('admin.layoutadmin.master')

@section('title')
 Ubah
@stop
@section('content')
<style media="screen">
  #mapid{height: 400px;margin-bottom: 10px;}
</style>
<<<<<<< HEAD
<div class="text-center">
  <h3>Ubah Data</h3>
</div>
 {{-- menampilkan error validasi --}}
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
<form action="{{ route('lokasi.update',$model) }}" method="post" enctype="multipart/form-data">
      @csrf
      {{ method_field('PUT') }}
      <div class="row">
        <div class="col-md-6">
           <div class="form-group">
=======
<form action="{{ route('lokasi.update',$model) }}" method="post" enctype="multipart/form-data">
      @csrf
      {{ method_field('PUT') }}
        <div class="form-group">
>>>>>>> c5347be0390e123dddf31ce7f9a17484f27acd73
            <label for="title">Nama</label>
            <input type="text" value="{{ $model->name }}" class="form-control" name="name">
        </div>
        <div class="form-group">
            <label for="title">Alamat</label>
            <input type="hidden" name="gambar" value="1603631263_Benteng Belgica.jpg">
            <input type="text" value="{{ $model->alamat }}" class="form-control" name="alamat">
        </div>
        <div class="form-group">
            <label for="title">Kategori</label>
<<<<<<< HEAD
            <input type="text" value="{{ $model->kat }}" class="form-control" name="kat">
        </div>
         <div class="form-group">
            <label for="title">Thumbnail</label>
            <input type="file" name="gambar" value ="{{$model->gambar}}">
        </div>
=======
            <input type="text" value="{{ $model->kat }}" class="form-control" name="kategori">
        </div>
        <div class="form-group">
            <label for="title">Thumbnail</label>
            <input  Input::old('Receipt'), type="file" name="gambar" value = '{{$deskripsi->gambar}}'><td><?php echo $deskripsi->Receipt; ?></td>
            <!-- <input type="file" class="form-control" name="gambar" id="gambar" value="{{$deskripsi->gambar}}"> -->
            <!-- <label for="gambar"> Select a file to upload</label> -->
>>>>>>> c5347be0390e123dddf31ce7f9a17484f27acd73
        </div>
        <div class="col-md-6">
           <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <select name="provinsi" class="form-control col-12" id="provinsi">
                <option value="{{$model->provinsi}}">{{ Prov($model->provinsi) }}</option>
            </select>
        </div>

        <div class="form-group">
<<<<<<< HEAD
            <label for="kabupaten">Kabupaten</label>
            <select name="kabupaten" class="form-control col-12" id="kabupaten">
                <option value="{{$model->kabupaten}}">{{Kab($model->provinsi,$model->kabupaten)}}</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <select name="kecamatan" class="form-control col-12" id="kecamatan">
                <option value="{{$model->kecamatan}}">{{Kec($model->kabupaten,$model->kecamatan)}}</option>
            </select>
        </div>
         <div class="form-group">
           <label for="kategori">Icon</label>
           <select name="id_kategori" class="form-control col-12" id="kategori">
              <option value="{{ $model->id_kategori }}">{{kategori($model->id_kategori)}}</option>
               @foreach ($kategori as $kt)
               <option value="{{ $kt->id }}">{{  $kt->name }}</option>
               @endforeach
           </select>
       </div>
        </div>

      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="row text-center">
            <div class="col-md-12"> <label for="img-thumbnail">Gambar Thumbnail</label></div>
            <div class="col-md-12"><img src="{{ asset('deskripsi/'.$model->gambar)}}" alt="..." class="img-thumbnail"></div>
          </div>
           
        </div>
        <div class="col-md-6">
           <label for="summernote">Deskripsi</label>
        <div class="form-group">
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{$model->deskripsi}}</textarea>
        </div>
        </div>
      </div>

        <div class="row">
            <div class="form-group col-md-6">
              <label for="latitude" class="control-label">Latitude</label>
              <input id="latitude" type="text" class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{$model->latitude}}" required>
              {!! $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
            </div>
            <div class="form-group col-md-6">
              <label for="longitude" class="control-label">Longitude</label>
              <input id="longitude" type="text" class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{$model->longitude}}" required>
              {!! $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
            </div>
        </div>

=======
           <label for="kategori">Icon</label>
           <select name="type_id" class="form-control col-12" id="kategori">
               @foreach ($kategori as $kt)
               <option value="{{ $kt->id }}">{{  $kt->name }}</option>
               @endforeach
           </select>
       </div>
        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <select name="id_provinsi" class="form-control col-12" id="provinsi">
                <option value="{{$model->provinsi}}">{{ Prov($model->provinsi) }}</option>
            </select>
        </div>

        <div class="form-group"">
            <label for="kabupaten">Kabupaten</label>
            <select name="id_kabupaten" class="form-control col-12" id="kabupaten">
                <option value="{{$model->kabupaten}}">{{Kab($model->provinsi,$model->kabupaten)}}</option>
            </select>
        </div>

        <div class="form-group"">
            <label for="kecamatan">Kecamatan</label>
            <select name="id_kecamatan" class="form-control col-12" id="kecamatan">
                <option value="{{$model->kecamatan}}">{{Kec($model->kabupaten,$model->kecamatan)}}</option>
            </select>
        </div>
        <label for="summernote">Deskripsi</label>
        <div class="form-group">
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{$deskripsi->deskripsi}}</textarea>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
              <label for="latitude" class="control-label">Latitude</label>
              <input id="latitude" type="text" class="form-control{{ $errors->has('latitude') ? ' is-invalid' : '' }}" name="latitude" value="{{$model->latitude}}" required>
              {!! $errors->first('latitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
            </div>
            <div class="form-group col-md-6">
              <label for="longitude" class="control-label">Longitude</label>
              <input id="longitude" type="text" class="form-control{{ $errors->has('longitude') ? ' is-invalid' : '' }}" name="longitude" value="{{$model->longitude}}" required>
              {!! $errors->first('longitude', '<span class="invalid-feedback" role="alert">:message</span>') !!}
            </div>
        </div>

>>>>>>> c5347be0390e123dddf31ce7f9a17484f27acd73
        <div id="mapid"></div>
        <button type="submit" class="btn btn-primary col-12">Ubah</button>
    </form>

@endsection

{{-- Leaftlet JS --}}
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
    integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
    crossorigin=""></script>
<script type='text/javascript' src='https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js'>
</script>
<!-- Load Esri Leaflet from CDN -->
<script src="https://unpkg.com/esri-leaflet@2.2.4/dist/esri-leaflet.js"
    integrity="sha512-tyPum7h2h36X52O2gz+Pe8z/3l+Y9S1yEUscbVs5r5aEY5dFmP1WWRY/WLLElnFHa+k1JBQZSCDGwEAnm2IxAQ=="
    crossorigin=""></script>
<!-- Leaflet.FeatureGroup.SubGroup assets -->
<script src="https://unpkg.com/leaflet.featuregroup.subgroup@1.0.2/dist/leaflet.featuregroup.subgroup.js"></script>




<script>

{{-- Leaftlet JS --}}
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
    integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
    crossorigin=""></script>
<script type='text/javascript' src='https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js'>
</script>
<!-- Load Esri Leaflet from CDN -->
<script src="https://unpkg.com/esri-leaflet@2.2.4/dist/esri-leaflet.js"
    integrity="sha512-tyPum7h2h36X52O2gz+Pe8z/3l+Y9S1yEUscbVs5r5aEY5dFmP1WWRY/WLLElnFHa+k1JBQZSCDGwEAnm2IxAQ=="
    crossorigin=""></script>
<!-- Leaflet.FeatureGroup.SubGroup assets -->
<script src="https://unpkg.com/leaflet.featuregroup.subgroup@1.0.2/dist/leaflet.featuregroup.subgroup.js"></script>




<script>
$(document).ready(function() {

    var tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        }),
        latlng = L.latLng(-2.039833, 123.8244163);

    var map = L.map('mapid', {
        center: latlng,
        zoom: 4,
        layers: [tiles]
    });
    var popup = L.popup();

    function onMapClick(e) {
        popup
            .setLatLng(e.latlng)
            .setContent("Latitude dan Longitude " + e.latlng.toString())
            .openOn(map);
        $('#latitude').val(e.latlng.lat);
        $('#longitude').val(e.latlng.lng);
        console.log(e);
    }
    map.on('click', onMapClick);
    fetch('https://x.rajaapi.com/poe')
        .then(r => r.json())
        .then(r => {
            $.ajax({
                url: `https://x.rajaapi.com/MeP7c5ne${r.token}/m/wilayah/provinsi`,
                type: 'get',
                dataType: 'json',
                success: (re => {
                    let tes = re.data;
                    for (const i in tes) {
                        $('#provinsi').append(`
                  <option value="${tes[i].id}">${tes[i].name}</option>
                  `)
                    }
                })
            })
        })


    $('#provinsi').on('change', function() {
        const id = $(this).val();
        fetch('https://x.rajaapi.com/poe')
            .then(r => r.json())
            .then(r => {
                $.ajax({
                    url: `https://x.rajaapi.com/MeP7c5ne${r.token}/m/wilayah/kabupaten?idpropinsi=${id}`,
                    type: 'get',
                    dataType: 'json',
                    success: (re => {
                        let tes = re.data;
                        for (const i in tes) {
                            $('#kabupaten').append(`
                      <option value="${tes[i].id}">${tes[i].name}</option>
                      `)
                        }
                    })
                })
            })
    })

    $('#kabupaten').on('change', function() {
        const id = $(this).val();
        fetch('https://x.rajaapi.com/poe')
            .then(r => r.json())
            .then(r => {
                $.ajax({
                    url: `https://x.rajaapi.com/MeP7c5ne${r.token}/m/wilayah/kecamatan?idkabupaten=${id}`,
                    type: 'get',
                    dataType: 'json',
                    success: (re => {
                        let tes = re.data;
                        for (const i in tes) {
                            $('#kecamatan').append(`
                  <option value="${tes[i].id}">${tes[i].name}</option>
                  `)
                        }
                    })
                })
            })

    })

});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#deskripsi').summernote({
        // dialogsInBody: true,
        height: 300,
        // minHeight: null,
        // maxHeight: null,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture']]
        ]
    });
});

$(document).on("show.bs.modal", '.modal', function(event) {
    console.log("Global show.bs.modal fire");
    var zIndex = 100000 + (10 * $(".modal:visible").length);
    $(this).css("z-index", zIndex);
    setTimeout(function() {
        $(".modal-backdrop").not(".modal-stack").first().css("z-index", zIndex - 1).addClass(
            "modal-stack");
    }, 0);
}).on("hidden.bs.modal", '.modal', function(event) {
    console.log("Global hidden.bs.modal fire");
    $(".modal:visible").length && $("body").addClass("modal-open");
});
$(document).on('inserted.bs.tooltip', function(event) {
    console.log("Global show.bs.tooltip fire");
    var zIndex = 100000 + (10 * $(".modal:visible").length);
    var tooltipId = $(event.target).attr("aria-describedby");
    $("#" + tooltipId).css("z-index", zIndex);
});
$(document).on('inserted.bs.popover', function(event) {
    console.log("Global inserted.bs.popover fire");
    var zIndex = 100000 + (10 * $(".modal:visible").length);
    var popoverId = $(event.target).attr("aria-describedby");
    $("#" + popoverId).css("z-index", zIndex);
});
</script>
