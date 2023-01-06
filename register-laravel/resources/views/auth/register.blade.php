<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="bg-dark text-warning" style="hover">
    <div class="container pt-5">
        <center><h1 class="mt-5">Registration form</h1></center>
        <form method="post" action="http://127.0.0.1:8000/register">
            <!-- Name input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Name</label>
                <input type="name" id="form3Example3" class="form-control" />
              </div>
          
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Email address</label>
                <input type="email" id="form3Example3" class="form-control" />
            </div>
          
            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Password</label>
                <input type="password" id="form3Example4" class="form-control" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example4">Comfirm Password</label>
                <input type="password" id="form3Example4" class="form-control" />
            </div>
          
            <!-- Submit button -->
            <button type="submit" class="btn btn-warning btn-block mb-4">Register</button>
          
          </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>