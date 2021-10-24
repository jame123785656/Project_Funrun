<?php $session = session(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ลงทะเบียนวิ่ง</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!------ Include the above in your HEAD tag ---------->

    
<style>
  .b1 {
  position: absolute;
  left: 555px;
  margin-top: 300px;
}
.b2 {
  position: absolute;
  left: 820px;
  margin-top: 300px;
}
.n1 {
  position: absolute;
  left: 550px;
  margin-top: 100px;
}
.n2 {
  position: absolute;
  left: 800px;
  margin-top: 100px;
}
.username{
  margin-left:-10%;
  color:black;
}
</style>
</head>
<body style="background-image : url(https://online.pubhtml5.com/xccw/bannerlogo.jpg);
background-repeat: no-repeat;  
  background-size: cover;background-size: 100% 185%">
      
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

<br><br><br><br>
            <div class="container">
                <center><h1 class="wellt">ลงทะเบียนวิ่ง</h1></center>
                <div class="col-lg-12 well">
                <div class="row">
                
                <?php if(isset($validation)): ?>
                    <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                <?php endif; ?>
                
                <form action="/Run/regisRun" id method="post">
                
                <div class="col-sm-12">
                <div class="row">
                <div class="col-sm-12">
                        <div class="row">
                        <div class="col-sm-6 form-group">
                                <center><label for="inputid_card" class="form-lable">บัตรประชาชน</label>
                                <input type="text" name="id_card"  disabled class="form-control" id="inputforid_card"  value="<?php echo  $session->get('id_card'); ?>"></center>
                            </div>
                            <div class="col-sm-6 form-group">
                               <center> <label for="inputname" class="form-lable">ชื่อ</label>
                                <input type="text" name="name"  disabled class="form-control" id="inputforname" value="<?php echo  $session->get('name'); ?>"></center>
                            </div>
                          
                        </div>         
                  
                    <div class="col-sm-12">
                        <div class="row">
                        <div class="form-group">
                <label for="">ประเภท</label>
                <br><input type="radio" name="category" value="1"> FUN RUN ระยะทาง 3กิโลเมตร ราคา 550$ 
                <br><input type="radio" name="category" value="2"> MINI MARATHON ระยะทาง 10กิโลเมตร ราคา 550$ 
                <br><input type="radio" name="category" value="3"> VIP ระยะทาง 3/10กิโลเมตร ราคา 1000$ 
                <br><input type="radio" name="category" value="5"> Super VIP ระยะทาง 15กิโลเมตร ราคา 1200$ 
                </div>          
                     
                    </div>
                         <button type="submit" class="btn btn-success" style=width:20%>ยืนยัน</button>        
                         <a href="/userindex" class="btn btn-danger" >ยกเลิก</a>
                </form> 
                </div>
    </div>
    </div>
           
                                






</body>
</html>