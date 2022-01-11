<!-- Receives Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Donor.css">
    <title>Receiving Information</title>
</head>
<body>
    <h1>RECEIVING INFORMATION</h1>
    <div class="signup">
        <h2>Fill in the details</h2>
        <form action="Receives_PHP.php" method="post">
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Patient-ID</label>
              <div class="col-sm-10">
                <input type="number" name="PatientID" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Blood Group</label>
              <div class="col-sm-10">
                <input type="text" name="bg" class="form-control" id="inputEmail3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Date of Receiving</label>
              <div class="col-sm-10">
                <input type="date" name="dor" class="form-control" id="inputEmail3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Amount to be Received(in Units)</label>
              <div class="col-sm-10">
                <input type="number" name="amtp" class="form-control" id="inputEmail3">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>    
    </div>
</body>
</html>