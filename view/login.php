<!Doctype html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script> 
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    

	</head>
	<body>


<div>
<center>
<div class="alert alert-success">
	<strong><h2>Event Management</h2></strong>
</div>
    <div class="container">
            	<div class="row">
                    <div class="col-md-6 col-md-offset-3">

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Login</a></li>
    <li><a data-toggle="tab" href="#menu1">Register</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     <form class="form-signin">
        <h2 class="form-signin-heading">Login</h2>
        <div class="form-group">
        <input name="username" type="text"  tabindex="1" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
       </div>
        <div class="form-group">

        <input name="password" type="password"  tabindex="1" id="inputPassword" class="form-control" placeholder="Password" required>
</div>
        <button class="btn btn-lg btn-primary btn-block" onclick="Usercheck()" >Submit</button>
      </form>
    </div>
      



      
    <div id="menu1" class="tab-pane fade">

</div>






                    </div>
                    </div>


</div>
    </div>
    <script>
function Usercheck(e)
     {
            e.preventDefault();
             var name = document.getElementById("username").value;
             var pass = document.getElementById("password").value;
             var Req;
             try{
                 Req = new XMLHttpRequest();
             }catch (e){

                 alert("ERROR (AJAX)");
                 return false;
             }
         
         Req.open("GET","/controller/loginController.php?name="+name+"&pass="+pass,true);
         Req.send();
         Req.onreadystatechange = function() {
             if(this.readyState == 4 && this.status == 200){
                 if(this.responseText==1)
                     {
                         // window.location = "home.php";
                     }
                 else{
					 // sweet alert
		swal({
  title: "Oops!",
  text: "Seems like you have entered a wrong username or password, Please review your credentials",
  icon: "warning",
  dangerMode: true,
})
             } 
         }
     }
     }

</script>
</body>

</html>