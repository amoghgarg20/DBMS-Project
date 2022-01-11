<!-- Patient Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Donor.css">
    <title>Patient Information</title>
</head>
<body>
    <h1>PATIENT INFORMATION</h1>
    <div class="signup">
        <h2>Fill in the details</h2>
        <form action="Patient_Reg.php" method="post">
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Patient-ID</label>
              <div class="col-sm-10">
                <input type="number" name="PatientID" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label"> First Name</label>
              <div class="col-sm-10">
                <input type="text" name="Fname" class="form-control" id="inputEmail3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Last Name</label>
              <div class="col-sm-10">
                <input type="text" name="Lname" class="form-control" id="inputEmail3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Contact Number</label>
              <div class="col-sm-10">
                <input type="number" name="Pnumber" class="form-control" id="inputEmail3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Date of Birth</label>
              <div class="col-sm-10">
                <input type="date" name="Pdob" class="form-control" id="inputEmail3">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>    
    </div>
    <div class="redirect">
        Already have a Patient-ID?
        <a href="Receives.php">Click Here</a>
    </div>
</body>
</html>