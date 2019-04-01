function validateform() {
  var uname = document.myform.name.value;
  console.log(uname);
  var password = document.myform.password.value;
  var repassword = document.myform.repassword.value;
  var email = document.myform.email.value;
  var atposition = email.indexOf("@");
  var dotposition = email.lastIndexOf(".");
  if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= x.length) {
    alert("Please enter a valid e-mail address \n atpostion:" + atposition + "\n dotposition:" + dotposition);
    email.focus();
    return false;
  }

  if (uname == null || uname == "") {
    alert("Name can't be blank");
    uname.focus();
    return false;
  }
  if (password.length < 6) {
    alert("Password must be at least 6 characters long.");
    password.focus();
    return false;
  }
  if (password != repassword) {
    alert("password must be same!");
    repassword.focus();
    return false;
  }
  return true;
}  