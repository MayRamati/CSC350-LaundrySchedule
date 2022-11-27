function check() {
  var apartment_number = document.getElementById("ATP").value;
  var password = document.getElementById("pword").value;
  if (apt == apartment_number && password == pword) {
    alert("logged in successfully");
  } else {

    alert("account doesnt exist");
  }
}

function test() {

  let time = Date.now()
  let user = document.getElementById("apt_number").value
  let pass = document.getElementById("password").value
  console.log({ time, user, pass })

}
