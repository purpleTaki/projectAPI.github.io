<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-signin-client_id" content="349081291271-sgk4p4gbq53b08vs914j0e09lvmoiier.apps.googleusercontent.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <title>API Project</title>
</head>
<body>
    <h2 class="alert alert-primary"> Sign in With Google</h2>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
    <div class="data">
        <p> Name</p>
        <p id="name" class="alert alert-sucess"></p>
        <p> Profile Picture</p>
        <img class="rounded-circle" width="100" height="100">
        <p> Email</p>
        <p id="email"></p>
        <button type="button" class="btn btn-danger" onclick="signOut();"> Sign Out </button>
    </div>
    <script src="index.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
</body>
</html>