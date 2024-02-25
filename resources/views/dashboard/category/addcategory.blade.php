
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

    <title>AddedCategory</title>
</head>
<body>

    {{-- header  --}}
    @include('dashboard/component/header');
    {{-- end header  --}}

    {{-- menu --}}
    @include('dashboard/component/menu');
    {{-- end menu  --}}

     <main id="main" class="main">

        <h3>AddedCategory</h3>
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('status')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="{{route('dashboard.category.addcategory')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="" class="form-label">Category No</label>
            <input type="text" class="form-control" name="category_no">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Category Name</label>
            <input type="text" class="form-control" name="category_name">
          </div>

          <div class="mb-3">
            <label for="" class="form-label">Category Image</label>
            <input type="file" class="form-control" placeholder="Hotel Name" name="category_image">
          </div>

          <div class="btn_hotel d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" id="btn_save">Save</button>
            <button type="submit" class="btn btn-primary">Cancel</button>
          </div>
         
        </form>
        
    
      </main><!-- End #main -->
    
      <!-- ======= Footer ======= -->
      <footer id="footer" class="footer">
        <div class="copyright">
          &copy; Copyright <strong><span>Hayden</span></strong>. All Rights Reserved
        </div>
    
      </footer><!-- End Footer -->  


      <script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
      <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
      <script src="{{ asset('vendor/echarts/echarts.min.js') }}"></script>
      <script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
      <script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
      <script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
      <script src="{{ asset('vendor/php-email-form/validate.js"') }}"></script>
  
  
      <script src="{{asset('js/dashboard/second.js')}}"></script>
    
</body>
</html>