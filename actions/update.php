<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<form method="POST" action="../actions/customer_actions.php" class="row g-3">
   <div class="col-md-6">
     <label for="fname" class="form-label">Full Name</label>
     <input type="text" class="form-control" id="fname" name="name">
   </div>
   <div class="col-md-6">
     <label for="tel" class="form-label">Contact</label>
     <input type="tel" class="form-control" id="tel"  name="contact">
   </div>
   <div class="col-12">
     <label for="Email" class="form-label">Email</label>
     <input type="email" class="form-control" id="Email" name="mail">
   </div>
   <div class="col-12">
   <label for="pass" class="form-label">Password</label>
   <input type="password" class="form-control" id="pass" name="pass">
   </div>
   <div class="col-md-6">
     <label for="city" class="form-label">City</label>
     <input type="text" class="form-control" id="city" name="city">
   </div>
   <div class="col-md-4">
     <label for="country" class="form-label">Country</label>
     <input type="text" class="form-control" id="country" name="country">
   </div>
   <div class="col-md-2">
     <label for="userrole" class="form-label">Role</label>
     <input readonly type="tel" class="form-control" id="userrole" value="2" name="role">
   </div>

   <div>
   <button type="submit" class="btn btn-primary" name= "addCust">Add</button>
   </div>
   
   </form>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>