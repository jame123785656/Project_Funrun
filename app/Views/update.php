<?php $session = session(); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    <title>Edit Profile</title>

    <!------ Include the above in your HEAD tag ---------->

    <style>
.nav-link{
 
  color:black;
}
</style>
</head>
<body >
      
<nav class="navbar navbar-expand-lg navbar-drak fixed-top" style=" background-image: linear-gradient(45deg, #ffd800, #ff5520, #750cf2, #0cbcf2);; height:65px;">
        <a class="navbar-brand" href="/userindex">
          <img src="https://race.thai.run/logonews.png"   height="46" alt="logo">
          </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav justify-content-center">

            
            <li class="nav-item">
            <a class="btn btn-primary" href="/search" role="button">ค้นหาการลงทะเบียนวิ่ง</a>
                <a class="btn btn-danger mr-2" href="/run" role="button" >ลงทะเบียนวิ่ง</a>
            </li>
          </ul>
      
        </div>
        <?php $session = session(); ?>
        <img src="https://iconape.com/wp-content/png_logo_vector/user-circle.png" width="40" height="40" class="rounded-circle">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black"><?php echo  $session->get('name'); ?></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/profile">Profile</a>
                    <a class="dropdown-item" href="/update">Edit Profile</a>
                    <a class="dropdown-item" href="/logout" style="color:red">Logout</a>
                </div>
            </li>             
        </nav>

<br><br><br>
            <div class="container">
                <center><h1 class="wellt">แก้ไขข้อมูลส่วนตัว</h1></center>
                <div class="col-lg-12 well">
                <div class="row">
                
                <form action="/Update/update" method="post">
                <div class="col-sm-12">
                        <div class="row">
                        <div class="col-sm-6 form-group">
                                <label for="inputid_card" class="form-lable">บัตรประชาชน</label>
                                <input type="text" name="id_card" class="form-control"  value= "<?php echo  $session->get('id_card'); ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="inputname" class="form-lable">ชื่อ</label>
                                <input type="text" name="name" class="form-control"  value= "<?php echo  $session->get('name'); ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="inputage" class="form-lable">อายุ</label>
                                <input type="text"  name="age" class="form-control"  value= "<?php echo  $session->get('age'); ?>">
                            </div>
                        </div>                            
                    <div class="form-group">
                        <label for="inputemail" class="form-lable">อีเมล์</label>
                        <input type="text"  name="email" class="form-control"  value= "<?php echo  $session->get('email'); ?>">
                    </div>    
                         <button type="submit" class="btn btn-success" style=width:20%>ยืนยัน</button>        
                         <a href="/profile" class="btn btn-danger" >ยกเลิก</a>
                </form> 
                </div>
    </div>
    </div>
           
        
                                


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>