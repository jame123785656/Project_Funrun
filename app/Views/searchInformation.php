<?php $session = session(); ?>
<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<title>ค้นหาการลงทะเบียนวิ่ง</title>


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
  background-size: cover;background-size: 100% 100%;  background-attachment: fixed;">
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
        
<!-- Latest compiled and minified CSS -->
    <div class="container mt-4">
    <center><h1>Search In formation</h1></center> <br><br>
   
            <div class="mt-3">
                <table class="table table-bordered" id="Search">
                <thead>
                    <tr>
                        <th>ลำดับเลขวิ่ง</th>
                        <th>เลขบัตรประชาชน</th>
                        <th>ชื่อ</th>
                        <th>รายละเอียด</th>
                        <th>ระยะทาง</th>
                        <th>ราคา</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                     
                    <?php foreach($regis as $data): ?>
                    <tr>
                        <td><?php echo $data['ID']; ?></td>
                        <td><?php echo $data['member']; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['category_name']; ?></td>
                        <td><?php echo $data['length']; ?></td>
                        <td><?php echo $data['price']; ?>$</td>
                    </tr>
                    <?php endforeach; ?>
                   
                </tbody>
                
                </table>
            </div>
            </div>

            
 
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
        <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready( function () {
                $('#Search').DataTable();
            } );
            </script>
            


               
</body>
</html>