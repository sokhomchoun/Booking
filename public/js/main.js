console.log('hello world form public folder js')

function clickMe(){
    console.log('click me')
    alert("you click me")
}

let button = document.getElementById("btn-click")
if(button){
    button.addEventListener('click', clickMe)
}

let password = document.getElementById('password')
let confirmPassword = document.getElementById("confirm_password")

let checkPassword = document.getElementById("checkPassword")
let checkConfirmPassword = document.getElementById("checkConfirmPassword")
//check for show password
if(checkPassword && password){
    checkPassword.addEventListener('change', function(){
        checkPassword.checked ? password.type = "text" : password.type = "password"
    })
}
//check for show confirm password
if(confirmPassword && checkConfirmPassword){
    checkConfirmPassword.addEventListener('change', function(){
        checkConfirmPassword.checked ? confirmPassword.type = "text" : confirmPassword.type = "password"
    })
    
}