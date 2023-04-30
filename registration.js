const submit_button = document.querySelector(".button");
submit_button.onclick = (e) => {
    e.preventDefault();
    const fname = document.getElementById("fname").value;
    const lname = document.getElementById("lname").value;
    const email = document.getElementById("email").value;
    const pass = document.getElementById("pass").value;
    const cpass = document.getElementById("cpass").value;

    localStorage.setItem('FirstName', fname);
    localStorage.setItem('LastName', lname);
    localStorage.setItem('Email', email);
    localStorage.setItem('Password', pass);
    localStorage.setItem('Cpassword', cpass);
    if(fname == "" && lname == "" && email == "" && pass == "" && cpass == ""){
        swal(
            'Opps..!',
            'input field has no value!',
            'error'
        );
    }
    else
    {
        if(pass.length >= 6 && pass.length <= 20)
    {
        if( pass !== cpass){
            swal(
                'Opps..!',
                'Password not matching!',
                'error'
            );
        }
        else
        {
            swal(
                'Good job!',
                'Register successful!',
                'success'
            );
            
        }
    }
    else
    {
        swal(
            'Opps..!',
            'Input mim six digit password!',
            'error'
        );
    }
    };


};