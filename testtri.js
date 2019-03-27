function emptyForm() {
    var x = document.getElementsByClassName("form-control");
  
    for (i = 0; i < x.length-2; i++) {
      x[i].value="";
    } 
      x[4].value = document.getElementById("tapahtumavalinta").value;
      x[5].value = document.getElementById("matkavalinta").value;
  } 

  function oletus3() {
    document.getElementById("eventlist").selectedIndex = "3";
  }

  function myFunction() {
    document.getElementById("empty").style.display="block";
    document.getElementsByName("fname").disabled = true;
    document.getElementsByName("lname").style.display="none";
    document.getElementsByName("email").style.display="none";
    document.getElementsByName("phone").style.display="none";
  }