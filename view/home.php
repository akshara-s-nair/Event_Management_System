<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
      <title>Home</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
  <center>  WELCOME </center>
  <a href="logout.php" class="btn btn-danger">
Logout  </a>


<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#home">Add Customer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">Search</a>
  </li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
  <div class="tab-pane active container" id="home">
  <div>
        <div class="card">
          <div class="card-header">
            Customer Details
          </div>
          <div class="card-body">
            <div class="form-row">
              <div class="form-group col-6">
                <input type="text" class="form-control" id="firstname" placeholder="First Name">
              </div>
              <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="lastname" placeholder="Last Name">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="aadhaar" placeholder="Aadhar No.">
              </div>
              <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="mobile" placeholder="9876543210">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="address" placeholder="Apartment, or floor">
              </div>
              <div class="form-group col-sm-6">
                <input type="text" class="form-control" id="city" placeholder="City">
              </div>
              <div>

              </div>
            </div>

            <!-- booking -->
            <div class="card">
              <div class="card-header">
                Booking
              </div>
              <div class="card-body">
                <div class="form-row">
                  <div class="form-group col-6">
                    <input type="date" class="form-control" id="date">
                  </div>
                  <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="time" placeholder="Time">
                  </div>
                </div>
              </div>
            </div>


            <!-- venue -->
            <div class="card">
              <div class="card-header">
                Venue
              </div>
              <div class="card-body">
                <div class="form-row">
                  <div class="form-group col-6">
                    <input type="text" class="form-control" id="venueName" placeholder="Name">
                  </div>
                  <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="venueCity" placeholder="City">
                  </div>

                  <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="venueMax" placeholder="Max Capacity">
                  </div>
                  <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="venueCPH" placeholder="Cost per hour">
                  </div>
                </div>
              </div>
            </div>
                        <!-- cater -->

            <div class="card">
              <div class="card-header">
                Catering
              </div>
              <div class="card-body">
                <div class="form-row">
                  <div class="form-group col-12">
                    <div class="form-group col-sm-3">
                     <input type="text" class="form-control" id="T_no" placeholder="Total no. of people">
                   </div>
                  </div>
                  <div class="form-group col-6">
                  
                    <input type="text" class="form-control" id="Non_veg" placeholder="No. of non veg">
                  </div>
                  <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="C_non_veg" placeholder="Cost per plate">
                  </div>
                  <div class="form-group col-6">
                    <input type="text" class="form-control" id="veg" placeholder="No. of veg">
                  </div>
                  <div class="form-group col-sm-6">
                    <input type="text" class="form-control" id="C_veg" placeholder="Cost per plate">
                  </div>
                  
                </div>
              </div>
            </div>
            <!-- decoration -->
            <div class="card">
              <div class="card-header">
                Decoration
              </div>
              <div class="card-body">
                <div class="form-row">
                  <div class="form-group col-6">
                    <input type="text" class="form-control" id="dectype" placeholder="Decoration Type">
                  </div>
                  <div class="form-group col-6" >
                   <div class="form-group col-sm-6">
                     <input type="text" class="form-control" id="flwrType" placeholder="Flower type">
                    </div>
                    <div class="form-group col-sm-6">
                      <input type="text" class="form-control" id="dcost" placeholder="Cost">
                  </div>

                  
                </div>
              </div>
            </div>
            <!-- photography -->
            <div class="card">
              <div class="card-header">
                photography
              </div>
              <div class="card-body">
                <div class="form-row">
                  <div class="form-group col-6">
                    <input type="text" class="form-control" id="photoNo" placeholder="No. of photographers">
                  </div>
                  <div class="form-group col-6" >
                   <div class="form-group col-sm-6">
                     <input type="text" class="form-control" id="photoCost" placeholder="Cost">
                    </div>               
                </div>
              </div>
            </div>
            <button id="submit" class="btn btn-primary">Submit</button>
        </div>
      </div>
  </div>


  <div class="tab-pane container " id="menu1">
  <div class="card text-center ">
  <div class="card-header">
  Please fill the following details to search for your event...
  </div>
  <div class="card-body">
  <div class="form-row">
    <div class="form-group col-6">
      <label for="fname">First Name</label>
      <input type="text" class="form-control" id="firstname" placeholder="First Name">
    </div>
    <div class="form-group col-sm-6">
      <label for="lname">Last Name</label>
      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Search</button>
  </div>

</div>
  </div>
</div>
</body>
</html>