
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

    <title>AddProperties</title>
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
        <h3 id="add_cate"><span class="icon_save"><i class="bi bi-house-add"></i></span>Properties</h3>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="add_category">
          <i class="bi bi-plus-lg"></i>
          ADD
        </button>
      </div>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="frm_input_modal">
          <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <h3 class="header_modal"><span class="icon_save"><i class="bi bi-plus-lg"></i></span>Added Properties</h3>
            <div class="category_header">
              
              <div class="mb-3">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" id="clearData" name="hotel_name">
              </div>
              <div class="mb-3">
                <label class="form-label">Province</label><br>
                <select name="province" class="select_province">
                  <option value="">Selected Province</option>
                    @foreach ($province as $provinces)
                      <option id="clearData" value="{{$provinces->province}}" name="province">{{ $provinces->province }}</option>
                    @endforeach
                </select>
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Cateogry</label><br>
                <select name="category" class="select_province">
                  <option value="">Selected Cateogry</option>
                  @foreach ($category as $categorys)
                      <option id="clearData" value="{{$categorys->category_name}}" name="category">{{ $categorys->category_name }}</option>
                  @endforeach
                </select>
              </div>
              {{-- <div class="mb-3">
                <label for="" class="form-label">RoomType</label><br>
                <select name="roomtype" class="select_province">
                  <option value="">Selected RoomType</option>
                  @foreach ($room as $rooms)
                      <option id="clearData" value="{{$rooms->type_no}}" name="roomtype">{{ $rooms->type_no }}</option>
                  @endforeach
                </select>
              </div> --}}
              <div class="mb-3">
                <label for="" class="form-label">Price</label>
                <input type="text" class="form-control" name="price">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Image</label>
                <input type="file" class="form-control" name="image_hotel">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Description</label>
                <textarea class="form-control" id="" rows="3" name="description"></textarea>
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
                <input type="search" id="searchProperties" class="form-control" placeholder="Search..." />
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
                <th class="head_table" scope="col">Name</th>
                <th class="head_table" scope="col">Province</th>
                <th class="head_table" scope="col">Category</th>
                <th class="head_table" scope="col">Description</th>
                <th class="head_table" scope="col">Price ($)</th>
                <th class="head_table" scope="col">Action</th>
              </tr>
            </thead>  
            <tbody id="search_table">
              @foreach($hotel as $item)
              <tr>
                <th scope="row">{{$item->id}}</th>
                <td><img src="{{ asset('uploads/photos/'.$item->image_hotel) }}"  width="30px"></td>
                <td>{{$item->hotel_name}}</td>
                <td>{{$item->province}}</td>
                <td>{{$item->category}}</td>
                <td>{{$item->description}}</td>
                <td>{{$item->price}}</td>

                <td>
                  <a href="{{ url('/edithotel/'.$item->id) }}" class="btn btn-success btn-sm" id="edit_btn"><span class="icon_save"><i class="bi bi-pencil-square"></i></span>Edit</a>
                  <a href="{{ url('/deletehotel/'.$item->id) }}" class="btn btn-danger btn-sm"><span class="icon_save"><i class="bi bi-trash3"></i></span>Delete</a>
                </td>
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

      
      <script>
        $('#searchProperties').on('keyup', function(){
          var query = $(this).val();
          $.ajax({
            url:'/searchproperties',
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
                          '<td><img src="/uploads/photos/' + item.image_hotel + '" alt="" width="30px"></td>' +
                          '<td>' + item.hotel_name + '</td>' +
                          '<td>' + item.province + '</td>' +
                          '<td>' + item.category + '</td>' +
                          '<td>' + item.description + '</td>' +
                          '<td>' + item.price + '</td>' +
                          '<td><a href="{{ url('editpro/'.$item->id) }}" class="btn btn-success btn-sm" id="edit_btn"><span class="icon_save"><i class="bi bi-pencil-square"></i></span>Edit</a><a href="{{ url('deleteProvince/'.$item->id) }}" class="btn btn-danger btn-sm" id="search_edit"><span class="icon_save"><i class="bi bi-trash3"></i></span>Delete</a></td>'
                          +
                        '</tr>'
                    );
                });
            }
          });
        });
        
      </script>


    
</body>
</html>