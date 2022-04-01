<?php

require_once('config.php');



?>


<!DOCTYPE html>
<html>
    <head>
        <title>User Registration</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    </head>

    <body>

    <div>
        <?php
        
        ?>
    </div>

    <div>
        <form action="registration.php" method="post">
            <div class="container"> 
                
                <div class="row">
                    <div class="col-sm-3">

                        <h1>registration</h1>
                        <p>fill out the form with correct values</p>
                        <hr class="mb-3">
                        <label for="firstname"><b>First Name</b></label>
                        <input class="form-control" id="firstname" type="text" name="firstname" required>
                        
                        <label for="lastname"><b>Last Name</b></label>
                        <input class="form-control" id="lastname" type="text" name="lastname" required>

                        <label for="email"><b>Email Address</b></label>
                        <input class="form-control" id="email" type="email" name="email" required>

                        <label for="Password"><b>Password</b></label>
                        <input class="form-control" id="password" type="password" name="password" required>
                        <hr class="mb-3">
                        <input class="btn btn-primary" type="submit" id="register" name="create" value="sign up">
                    </div>
                </div>
            </div>
        </form>
    </div>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        $(function(){
            $('#register').click(function(e){
                
                var valid = this.form.checkValidity();
                if(valid){
                   
                var firstname       = $('#firstname').val();
                var lastname       = $('#lastname').val();
                var email           = $('#email').val();
                var password      = $('#password').val();
                   

                   
                   
                    e.preventDefault();
                
                    $.ajax({
                        type:'POST',
                        url: 'process.php' ,
                        data: {firstname: firstname, lastname: lastname, email: email, password: password},
                        success: function(data){
                        swal.fire({
                                'title': "Successfull" ,
                                'text':  data,
                                'icon' : "success"    
                                })
                        },

                        error: function(data){
                            swal.fire({
                                'title': "error" ,
                                'text':  "error registering user",
                                'icon' : "error"   
                            })
                        }
                    });

                    
                }else{
                    
                }

                
            });
                

            });
        
        </script>
    </body>
</html>
        