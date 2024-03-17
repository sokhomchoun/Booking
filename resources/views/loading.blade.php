
<html lang="en">
<head>
</head>
<body>   
    <div class="reload_page">
        <img  src="{{asset('img/reload.gif')}}" alt=""/>
    </div>

    <style>
        .reload_page{
            position: fixed;
            top: 0;
            left: 0;
            z-index: 10000;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            width: 100%;
        }
        .reload_page.fade-out {
            top: -120%;
        }
    </style>


</body>
</html>

<script src="{{ asset('js/dashboard/jquery.js')}}"></script>
<script src="{{ asset('js/dashboard/second.js')}}"></script>
<script>

</script>














