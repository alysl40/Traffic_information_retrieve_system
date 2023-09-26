<?php
?>
<! Doctype html>
    <html>
        <head>

            <!-- references -->
            <meta charset = "UTF-8">
            <meta http_equic = "X-UA-Compatible" content = "Ie=edge">
            <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
            <title>Reset your password</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
        
        
        
        
        </head>
        <body>


            <!-- references -->
            <div class="container d-flex justify-content-center align-items-center"
            style="min-height: 100vh" >
            <form class="border shadow p-3 rounded"
            action="Reset_password(2).php" 
            method="post" 
            style="width: 450px;">
                <div class = "main">





                <h1 class="text-center p-3">Reset password system </h1>
                    <div class = "content">
                        <div class="mb-3">
                            <label for="password" 
                                class="form-label">Please enter your original passwaord:</label>
                            <input type="password" 
                                name="original_password" 
                                class="form-control" 
                                id="password">
                        </div>
                        <div class="mb-3">
                            <label for="password" 
                                class="form-label">Please enter your new passwaord:</label>
                            <input type="password" 
                                name="new_password" 
                                class="form-control" 
                                id="password">
                        </div>

                        <div class="mb-3">
                            <label for="password" 
                                class="form-label">Please confirm your new passwaord:</label>
                            <input type="password" 
                                name="confirm_new_password" 
                                class="form-control" 
                                id="password">
                        </div>

                        <button style = "text-align:center,color:black;"  type = "submit" class="btn btn-primary">submit</button>

                    </div>
                </div>
            </form>
            </div>
            
        </body>>
        
    </html>>