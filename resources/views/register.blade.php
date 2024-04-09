<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>
<body>


    <div class="form__login">

    <form action="{{route('createAccount')}}" method="POST" class="form-register" enctype="multipart/form-data">
        @csrf
        @method('post')
        <h1 class="txt__login">Register</h1>
        <div class="form-register-01">
            <label for="firstname">Firstname</label>
            <input class="txt__email" autocomplete="off" type="text" id="firstname" name="firstname"/>
        </div>
        <div class="form-register-01">
            <label for="lastname">Lastname</label>
            <input class="txt__email" autocomplete="off" type="text" id="lastname" name="lastname" />
        </div>
        <div class="form-register-01">
            <label for="sex">Sex :</label>
            <div class="form-register-02">
                <input type="radio" value="Male" name="sex" id="sex"/> Male
                <input type="radio" value="Female" name="sex" id="sex" /> Female
                <input type="radio" value="Other" name="sex" id="sex"/> Other
            </div>
        </div>
        <div class="form-register-01">
            <label for="age">Age</label>
            <input class="txt__email" autocomplete="off" type="text" id="age" name="age" />
        </div>
        <div class="form-register-01">
            <label for="email">Email</label>
            <input class="txt__email" autocomplete="off" type="text" id="email" name="email" />
        </div>
        <div class="form-register-01">
            <label for="password">Password</label>
            <div class="form-register-02" style="width: 100%">
                <input class="txt__password"  type="password" id="password" name="password" />
                <input autocomplete="off" type="checkbox" id="checkPassword"/>
            </div>
        </div>
        <div class="form-register-01">
            <label for="confirm_password">Confirm Password</label>
            <div class="form-register-02" style="width: 100%">
                <input class="txt__password" type="password" id="confirm_password" name="confirm_password" />
                <input autocomplete="off" type="checkbox"  id="checkConfirmPassword"/>
            </div>
        </div>
        <button class="btn-save" type="submit">Register</button>
        
    </form>

    </div>
    

    <script src="{{asset('js/main.js')}}"></script>
</body>
</html>