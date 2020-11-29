<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<div class="row">

<form>
<div class="card">
  <div class="card-header">
    Customer Details
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
  <div class="form-row">
  <div class="form-group col-sm-6">
    <label for="inputAddress">Aadhaar</label>
    <input type="text" class="form-control" id="aadhaar" placeholder="1234 5678 9870">
  </div>
  <div class="form-group col-sm-6">
    <label for="inputAddress2">Mobile Number</label>
    <input type="text" class="form-control" id="mobile" placeholder="9876543210">
  </div>
  </div>
  <div class="form-row">
  <div class="form-group col-sm-6">
    <label for="inputAddress2 ">House Name</label>
    <input type="text" class="form-control" id="address" placeholder="Apartment, or floor">
  </div>
  <div class="form-group col-sm-6">
    <label for="inputAddress2 ">City</label>
    <input type="text" class="form-control" id="city" placeholder="......">
  </div>
  <div>
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
      <input type="text" class="form-control" id="venuename" placeholder="Name">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="venuecity" placeholder="City">
    </div>

    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="firstname" placeholder="Max Capacity">
    </div>
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="lastname" placeholder="Cost per hour">
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
    <div class="form-group col-sm-6">
      <input type="text" class="form-control" id="dcost" placeholder="Cost">
    </div>

    <div class="form-group col-6">
      <input type="text" class="form-control" id="fcost" placeholder="Flower Cost">
    </div>
</div>
</div>
</div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</div>
</body>
</html>