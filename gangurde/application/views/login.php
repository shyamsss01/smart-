<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="col md-9" style="margin-top:10%;">
        <div >
           
            <Center><div class="col-md-5" style="border-style: solid;">
            <p class="bg-danger">
                            <?php if($this->session->flashdata('error')):?>
                            <?php  echo $this->session->flashdata('error'); ?>  
                            <?php endif ; ?> 
                            </p>
                            
                          
                   <Center><b><h2>Login</b></Center>
                <form action="<?php echo base_url('welcome/login_validation') ?>" method="post" >
                    <div class="col-md-4">
                    <lable>Username</lable>
                    <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <br>
                    <div class="col-md-4">
                    <lable>Password</lable>
                    <input type="password" name="password" id="password"  class="form-control" required>
                    </div>
                    <br>
                    <div class="col-md-3">
                    <button type="submit" class="btn btn-success btn-block margin-top-10">Submit</button>
                    <br>
                    <br>
                    </div>

                </form>
            </div> </Center>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>