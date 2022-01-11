<!-- Donates Page -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Donor.css">
    <title>Donating Information</title>
</head>
<body>
    <h1>DONATING INFORMATION</h1>
    <div class="signup">
        <h2>Fill in the details</h2>
        <form action="Donates_PHP.php" method="post">
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Donor-ID</label>
              <div class="col-sm-10">
                <input type="number" name="DonorID" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Blood Group</label>
              <div class="col-sm-10">
                <input type="text" name="bg" class="form-control" id="inputEmail3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Date of Donation</label>
              <div class="col-sm-10">
                <input type="date" name="dod" class="form-control" id="inputEmail3">
              </div>
            </div>
            <div class="row mb-3">
              <label for="inputEmail3"  class="col-sm-2 col-form-label">Amount Donated in Units(1 Unit=100ml)</label>
              <div class="col-sm-10">
                <input type="number" name="amtd" class="form-control" id="inputEmail3">
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>    
    </div>
</body>
</html>