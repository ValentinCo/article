<?php
   
    
?>
<div class="container">
<div class="row">
    <div class="col-md-12"></div>
    <div class="col-md-12"></div>
    <div class="col-md-12"></div>
    <div class="col-md-12"></div>
    <div class="col-md-12"></div>
</div>
<div class="col-md-4 col-md-offset-4">
    <div class="panel panel-primary">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
        
        <!-- Login Form -->
        <form role="form">
        
        <!-- Username Field -->
            <div class="row">
                <div class="form-group col-xs-12">
                <label for="username"><span class="text-danger">*</span>Username:</label>
                    <div class="input-group">
                        <input class="form-control" id="username" type="text" name="username" placeholder="Username" required/>
                        <span class="input-group-btn">
                            <label class="btn btn-primary"><span class="glyphicon glyphicon-user" aria-hidden="true"></label>
                        </span>
                        </span>
                    </div>
                </div>  
            </div>
            
            <!-- Content Field -->
            <div class="row">
                <div class="form-group col-xs-12">
                    <label for="password"><span class="text-danger">*</span>Password:</label>
                    <div class="input-group">
                        <input class="form-control" id="password" type="password" name="password" placeholder="Password" required/>
                        <span class="input-group-btn">
                            <label class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></label>
                        </span>
                        </span>
                    </div>
                </div>
            </div>
            
            <!-- Login Button -->
            <div class="row">
                <div class="form-group col-xs-4">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
            
        </form>
        <!-- End of Login Form -->
        
    </div>
</div>
</div>