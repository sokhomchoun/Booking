
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/remixicon/remixicon.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/simple-datatables/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/dashboard/second.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard/boostrap5.css')}}">
    <link rel="stylesheet" href="{{asset('css/dashboard/font-awesome.css')}}">

    <title>EditCategory</title>
</head>
<body>

    {{-- header  --}}
    @include('dashboard/component/header');
    {{-- end header  --}}

    {{-- menu --}}
    @include('dashboard/component/menu');
    {{-- end menu  --}}

     <main id="main" class="main">
        <h3 id="add_cate" class="mb-3"><span class="icon_save"><i class="bi bi-house-add"></i></span>Province</h3>
          <form action="{{url('updatepro/'.$item->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="category_header">
              <div class="mb-3">
                <label for="" class="form-label">No.</label>
                <input type="text" class="form-control" id="clearId" name="id" value="{{$item->id}}" disabled>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Province</label>
                <input type="text" class="form-control" id="clearName" name="province" value="{{$item->province}}">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Village</label>
                <input type="text" class="form-control" id="clearVillage" name="village" value="{{$item->village}}">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Village</label>
                <input type="text" class="form-control" id="clearDistrict" name="district" value="{{$item->district}}">
              </div>
    
              <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control" name="image_province">
                <img src="{{ asset('uploads/photos/'.$item->image_province) }}" alt="" id="size_image">
              </div>
            </div>

            <div class="btn_hotel d-flex justify-content-center">
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="btn_save"><span class="icon_save"><i class="bi bi-floppy2"></i></span>Update</button>
              <button onclick="clearText()" type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><span class="icon_save"><i class="bi bi-trash3"></i></span>Clear</button>
            </div>
          </form>



      </main><!-- End #main -->

      @include('dashboard/component/footer');

      <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
      <script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
      <script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
      <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
      <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
      <script src="{{ asset('vendor/php-email-form/validate.js"') }}"></script>
      <script src="{{ asset('js/dashboard/ajax.js')}}"></script>
      <script src="{{ asset('js/dashboard/second.js')}}"></script>

      <script>
        function clearText(){
          document.getElementById('clearId').value = '';
          document.getElementById('clearName').value = '';
          document.getElementById('clearVillage').value = '';
          document.getElementById('clearDistrict').value = '';
          document.getElementById('size_image').value = '';
        }
      </script>

    
</body>
</html>