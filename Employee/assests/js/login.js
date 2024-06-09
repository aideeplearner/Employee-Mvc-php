function login(action) {
    if (checkCredentials()) {
        let form = document.getElementById("loginform");
        form.action = action;
        form.submit();
    }
    event.preventDefault();
 
}
function checkCredentials(message) {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let errorDiv = document.getElementById("cred");

    if (email === "") {
        errorDiv.innerText = "Email is required";
        errorDiv.style.display='block';
        return false;
    }

    if (password === "") {
        errorDiv.innerText = "Password is required";
        errorDiv.style.display='block';
        return false;
    }
    
    errorDiv.innerText = "";
    return true;
}