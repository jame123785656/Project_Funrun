<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="css/login.css">

   
</head>
<body style="background-image :url(https://online.pubhtml5.com/xccw/bannerlogo.jpg); 
background-repeat: no-repeat;  
  background-size: cover;background-size: 100% 100%;  background-attachment: fixed;">
        
<nav class="navbar navbar-expand-lg navbar-drak fixed-top" style=" background-image: linear-gradient(45deg, #ffd800, #ff5520, #750cf2, #0cbcf2);; height:65px;">
        <a class="navbar-brand" href="/index">
          <img src="https://race.thai.run/logonews.png"   height="46" alt="logo">
          </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav justify-content-center">

            
          
          </ul>
      
        </div>
        
       
        <a class="btn btn-outline-danger" href="/register">Register</a>
      </nav>


<br><br>
             <div class="box-login">
                <div class="container mt-4">
                    <div class="row justify-content-md-center">
                        <div class="col-md-6">
                            <br><center><h1>เข้าสู่ระบบ</h1></center>
                            <hr>
                            <?php if(session()->getFlashdata('msg')): ?>
                                <div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
                            <?php endif; ?>
                            <form action="/login/auth" method="post">
                                <div class="mb-3">
                                    <label for="inputid_card" class="form-label">เลขบัตรประชาชน</label>
                                    <input type="text" name="id_card" class="form-control" id="inputforid_card" value="<?= set_value('id_card'); ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="inputpassword" class="form-label">รหัสผ่าน</label>
                                    <input type="password" name="password" class="form-control" id="inputforpassword">
                                </div>
                               <center> <button type="submit" class="btn btn-success" >ยืนยัน</button>
                                <a href="/index" class="btn btn-danger" >ยกเลิก</a></center>
                            </form>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>



</body>
</html>