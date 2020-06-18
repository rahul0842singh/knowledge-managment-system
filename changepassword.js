function checkForm(form)
{
  
  

  if(form.newpassword.value != "" && form.newpassword.value == form.cpassword.value) {
    if(form.newpassword.value.length < 6) {
      alert("Error: Password must contain at least six characters!");
      form.newpassword.focus();
      return false;
    }

    re = /[0-9]/;
    if(!re.test(form.newpassword.value)) {
      alert("Error: password must contain at least one number (0-9)!");
      form.newpassword.focus();
      return false;
    }
    re = /[a-z]/;
    if(!re.test(form.newpassword.value)) {
      alert("Error: password must contain at least one lowercase letter (a-z)!");
      form.newpassword.focus();
      return false;
    }
    re = /[A-Z]/;
    if(!re.test(form.newpassword.value)) {
      alert("Error: password must contain at least one uppercase letter (A-Z)!");
      form.newpassword.focus();
      return false;
    }
  } else {
    alert("Error: Please check that you've entered and confirmed your password!");
    form.newpassword.focus();
    return false;
  }

  alert("You entered a valid password: " + form.newpassword.value);
  return true;
}