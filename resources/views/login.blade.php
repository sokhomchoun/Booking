<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>
<body>




    <div class="form__login">

        <form action="{{route('user.login')}}" method="POST" class="form-register" enctype="multipart/form-data">
            @csrf
            @method('post')
            <h1 class="txt__login">Login</h1>
            <div class="form-register-01">
                <label for="email">Email</label>
                <input autocomplete="off" type="text" id="email" name="email" class="txt__email" />
            </div>
            <div class="form-register-01">
                <label for="password">Password</label>
                <div class="form-register-02" style="width: 100%">
                    <input type="password" id="password" name="password" class="txt__password" />
                    <input autocomplete="off" type="checkbox" id="checkPassword"/>
                </div>
            </div>
        
            <button class="btn-save" type="submit">Login</button>
    
            <p id="txt__details">Haven't any account?</p>
            <a href="{{route('register')}}" style="color:white"  id="txt__details">Register</a>

            
        </form>

    </div>











    {{-- <div class="header-login">
        <h1>Welcome back guys!</h1>
    </div>
    <form action="{{route('user.login')}}" method="POST" class="form-register" enctype="multipart/form-data">
        @csrf
        @method('post')
        <div class="form-register-01">
            <label for="email">Email</label>
            <input autocomplete="off" type="text" id="email" name="email" />
        </div>
        <div class="form-register-01">
            <label for="password">Password</label>
            <div class="form-register-02">
                <input type="password" id="password" name="password" />
                <input autocomplete="off" type="checkbox" id="checkPassword"/>
            </div>
        </div>
    
        <button class="btn-save" type="submit">Login</button>

        <p>Haven't any account?</p>
        <a href="{{route('register')}}" style="color:yellow">Register</a>

        <p>Login with google</p>
        <a href="{{route('login-google')}}" style="color:yellow">google</a>
        <p>Login with facebook</p>
        <a href="{{route('login-facebook')}}" style="color:blue">Facebook</a>
        
    </form> --}}





    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>