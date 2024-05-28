<?php require_once("include/header.php"); ?>
<?php require_once("include/navbar.php"); ?>
<style>
    @import url('https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap');


h1{
    font-weight: 700;
    font-size: 45px;
    font-family: 'Roboto', sans-serif;
}

 
#description{
    font-size: 24px;
}

.form-wrap{
    background: rgba(255,255,255,1);
    width: 100%;
    max-width: 850px;
    padding: 50px;
    margin: 0 auto;
    position: relative;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
}
.form-wrap:before{
    content: "";
    width: 90%;
    height: calc(100% + 60px);
    left: 0;
    right: 0;
    margin: 0 auto;
    position: absolute;
    top: -30px;
    background: #00bcd9;
    z-index: -1;
    opacity: 0.8;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    -webkit-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
    -moz-box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
    box-shadow: 0px 0px 40px rgba(0, 0, 0, 0.15);
}
.form-group{
    margin-bottom: 25px;
}
.form-group > label{
    display: block;
    font-size: 18px;    
    color: #000;
}
.custom-control-label{
    color: #000;
    font-size: 16px;
}
.form-control{
    height: 50px;
    background: #ecf0f4;
    border-color: transparent;
    padding: 0 15px;
    font-size: 16px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}
.form-control:focus{
    border-color: #00bcd9;
    -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
}
textarea.form-control{
    height: 160px;
    padding-top: 15px;
    resize: none;
}

.btn{
    padding: .657rem .75rem;
    font-size: 18px;
    letter-spacing: 0.050em;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.btn-primary {
  color: #fff;
  background-color: #00bcd9;
  border-color: #00bcd9;
}

.btn-primary:hover {
  color: #00bcd9;
  background-color: #ffffff;
  border-color: #00bcd9;
    -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
}

.btn-primary:focus, .btn-primary.focus {
  color: #00bcd9;
  background-color: #ffffff;
  border-color: #00bcd9;
  -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
}

.btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
.show > .btn-primary.dropdown-toggle {
  color: #00bcd9;
  background-color: #ffffff;
  border-color: #00bcd9;
}

.btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
.show > .btn-primary.dropdown-toggle:focus {
  -webkit-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    -moz-box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
    box-shadow: 0px 0px 20px rgba(0, 0, 0, .1);
}
</style>

  <div class="container mt-5">
     
    <div class="form-wrap"> 
        <form id="survey-form">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label id="name-label" for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label id="email-label" for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control" required>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label id="number-label" for="number">Phone <small></small></label>
                        <input type="number" name="age" id="number" min="10" max="99" class="form-control" placeholder="number" >
                    </div>
                </div>
                 
            </div>
            
          
 
            
            <div class="row">
                <div class="col-md-4">
                    <button type="submit" id="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </div>

        </form>
    </div>  
</div>
</div>
 
 
 
 
 
 
 
<?php require_once("include/footer.php"); ?>