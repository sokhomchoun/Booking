
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
      <div class="d-flex justify-content-between mb-3">
        <h3 id="add_cate"><span class="icon_save"><i class="bi bi-house-add"></i></span>Province</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="add_category">
          <i class="bi bi-plus-lg"></i>
          ADD
        </button>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="frm_input_modal">
          <form action="{{route('dashboard.province.addprovince')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="header_modal"><span class="icon_save"><i class="bi bi-plus-lg"></i></span>Added Province</h3>
            <div class="category_header">
              <div class="mb-3">
                <label class="form-label">Province</label><br>
                <select name="province" class="select_province">
                  <option value="">Selected Province</option>
                    @foreach ($cambodia as $row)
                      <option id="clearData" value="{{$row->province}}" name="province">{{ $row->province }}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Village</label>
                <input type="text" class="form-control" name="village">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Disctrict</label>
                <input type="text" class="form-control" name="district">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control" name="image_province">
              </div>
            </div>

            <div class="btn_hotel d-flex justify-content-center">
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal" id="btn_save"><span class="icon_save"><i class="bi bi-floppy2"></i></span>Save</button>
              <button type="button" class="btn btn-danger btn-sm" data-bs-dismiss="modal"><span class="icon_save"><i class="bi bi-trash3"></i></span>Close</button>
            </div>
          </form>
          <div class="modal-dialog">
          </div>
        </div>
       
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
                <input type="search" id="searchPro" class="form-control" placeholder="Search..." />
              </div>
              <button id="search-button" type="button" class="btn btn-primary">
                <i class="bi bi-search"></i>
              </button>
          </div>
        </form>

          <table class="table table-striped" >
            <thead>
              <tr>
                <th class="head_table" scope="col">No.</th>
                <th class="head_table" scope="col">Image</th>
                <th class="head_table" scope="col">Province</th>
                <th class="head_table" scope="col">Village</th>
                <th class="head_table" scope="col">District</th>
                <th class="head_table" scope="col">Action</th>
              </tr>
            </thead>  
            <tbody id="search_table">
              @foreach($province as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td><img src="{{ asset('uploads/photos/'.$item->image_province) }}"  width="30px"></td>
                <td>{{$item->province}}</td>
                <td>{{$item->village}}</td>
                <td>{{$item->district}}</td>
                <td>
                  <a href="{{ url('editpro/'.$item->id) }}" class="btn btn-success btn-sm" id="edit_btn"><span class="icon_save"><i class="bi bi-pencil-square"></i></span>Edit</a>
                  <a href="{{ url('deleteProvince/'.$item->id) }}" class="btn btn-danger btn-sm"><span class="icon_save"><i class="bi bi-trash3"></i></span>Delete</a>
                </td>
              </tr>
              @endforeach
            </tbody>
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

      
      {{-- <script>
        $('#searchPro').on('keyup', function(){
          var query = $(this).val();
          $.ajax({
            url:'/searchpro',
            method:'GET',
            data:{query: query},
            success:function(data){
              // empty data in table
              $('#search_table').empty();
              $.each(data, function(index, item) {
                    $('#search_table').append(
                        '<tr>'
                          +
                          '<td>' + item.id + '</td>' +
                          '<td>' + item.province + '</td>' +
                          '<td><img src="/uploads/photos/' + item.image_province + '" alt="" width="30px"></td>' +
                          '<td>' + item.village + '</td>' +
                          '<td>' + item.district + '</td>' +
        
                          '<td><a href="{{ url('editpro/'.$item->id) }}" class="btn btn-success btn-sm" id="edit_btn"><span class="icon_save"><i class="bi bi-pencil-square"></i></span>Edit</a><a href="{{ url('deleteProvince/'.$item->id) }}" class="btn btn-danger btn-sm" id="search_edit"><span class="icon_save"><i class="bi bi-trash3"></i></span>Delete</a></td>'
                          +
                        '</tr>'
                    );
                });
            }
          });
        });
      </script> --}}


    
</body>
</html>