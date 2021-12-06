function confirmPass(){
    let password = document.getElementById("password").value;
    let cpassword =  document.getElementById("cpassword").value;
    console.log(password, cpassword);
    let message = document.getElementById("message");

    if(password.length != 0){
        if(password == cpassword){
            // message.textContent = "Password Match";
        }else{
            message.textContent = "Password doesn't match";
           
        }
    }
}