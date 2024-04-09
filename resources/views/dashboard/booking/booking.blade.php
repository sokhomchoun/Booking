
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
    <link rel="stylesheet" href="{{ asset('css/dashboard.css')}}"/>
    <link rel="stylesheet" href="{{ asset('css/dashboard/second.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/boostrap5.css')}}">
    <link rel="stylesheet" href="{{ asset('css/dashboard/font-awesome.css')}}">

    <title>View Booking</title>
</head>
<body>

    {{-- header  --}}
    @include('dashboard/component/header');
    {{-- end header  --}}

    {{-- menu --}}
    @include('dashboard/component/menu');
    {{-- end menu  --}}

     <main id="main" class="main">
      <div class="d-flex justify-content-between mb-3">
        <h3 id="add_cate"><span class="icon_save"><i class="bi bi-house-add"></i></span>View Booking</h3>
        {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="add_category">
          <i class="bi bi-plus-lg"></i>
          ADD
        </button> --}}
      </div>

        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>{{session('status')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <form action="">
          <div class="input-group mb-3">
              <div class="form-outline" data-mdb-input-init>
                <input type="search" id="searchCate" class="form-control" placeholder="Search..." />
              </div>
              <button id="search-button" type="button" class="btn btn-primary">
                <i class="bi bi-search"></i>
              </button>
          </div>
        </form>

          <table class="table table-striped" >
            <thead>
              <tr>
                <th class="head_table" scope="col">RoomNo.</th>
                <th class="head_table" scope="col">Bed</th>
                <th class="head_table" scope="col">Guest</th>
                <th class="head_table" scope="col">Email</th>
                <th class="head_table" scope="col">Phone Number</th>
                <th class="head_table" scope="col">Check in Date</th>
                <th class="head_table" scope="col">Check out Date</th>
                <th class="head_table" scope="col">Payment</th>
                <th class="head_table" scope="col">Status</th>
              </tr>
            </thead>  
            <tbody id="search_table">
              @foreach ($booking as $item)
              <tr>
                <td>{{ $item->room_no }}</td>
                <td>{{ $item->bed }}</td>
                <td>{{ $item->guest }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone_number }}</td>
                <td>{{ $item->check_in_date }}</td>
                <td>{{ $item->check_out_date }}</td>
                <td>{{ $item->payment }}</td>
                <td>{{ $item->status }}</td>
              </tr>
              @endforeach

            </tbody>
          </table>
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
    
</body>
</html>