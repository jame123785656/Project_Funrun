<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <!------ Include the above in your HEAD tag ---------->

    <style>
            body {
                padding-top: 20px;
                padding-bottom: 20px;
                }

                .header,
                .marketing,
                .footer {
                padding-right: 15px;
                padding-left: 15px;
                }


                .header {
                border-bottom: 1px solid #e5e5e5;
                }

                .header h3 {
                padding-bottom: 19px;
                margin-top: 0;
                margin-bottom: 0;
                line-height: 40px;
                }


                .footer {
                padding-top: 19px;
                color: #777;
                border-top: 1px solid #e5e5e5;
                }


                @media (min-width: 768px) {
                .container {
                    max-width: 730px;
                }
                }
                .container-narrow > hr {
                margin: 30px 0;
                }


                .jumbotron {
                text-align: center;
                border-bottom: 1px solid #e5e5e5;
                }
                .jumbotron .btn {
                padding: 14px 24px;
                font-size: 21px;
                }


                .marketing {
                margin: 40px 0;
                }
                .marketing p + h4 {
                margin-top: 28px;
                }


                @media screen and (min-width: 768px) {
                
                .header,
                .marketing,
                .footer {
                    padding-right: 0;
                    padding-left: 0;
                }

                .header {
                    margin-bottom: 30px;
                }

                .jumbotron {
                    border-bottom: 0;
                }
            }

            /* ส่วน navbar */
            ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li{
                float: right;
            }

            li a{
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #111;
            }

            li {
                border-right: 1px solid #bbb;
                }

    </style>
</head>
<body style="background-image :url(https://online.pubhtml5.com/xccw/bannerlogo.jpg); 
background-repeat: no-repeat;  
  background-size: cover;background-size: 100% 100%;  background-attachment: fixed;">

<nav class="navbar navbar-expand-lg navbar-drak fixed-top" style="background-image: linear-gradient(45deg, #ffd800, #ff5520, #750cf2, #0cbc);; height:65px;">
        <a class="navbar-brand" href="/index">
          <img src="https://race.thai.run/logonews.png"   height="46" alt="logo">
          </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="nav justify-content-center">

            
          
          </ul>
      
        </div>
        
        <a class="btn btn-outline-light " href="/login">Login</a>
        
      </nav>

<br><br>
          <div class="container">
                <br><br><center> <h1 class="wellt">สมัครสมาชิก</h1></center>
                <div class="col-lg-12 well">
                <div class="row">
                
                <?php if(isset($validation)): ?>
                    <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                <?php endif; ?>
                
                <form action="/register/save" id method="post">
                    <div class="col-sm-12">
                        <div class="row">
                        <div class="col-sm-6 form-group">
                                <label for="inputid_card" class="form-lable">บัตรประชาชน</label>
                                <input type="text" name="id_card" placeholder="กรุณาใส่เลขบัตรประชาชน" class="form-control" id="inputforid_card" value="<?= set_value('id_card'); ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="inputname" class="form-lable">ชื่อ</label>
                                <input type="text" name="name" placeholder="กรุณาใส่ชื่อ" class="form-control" id="inputforname" value="<?= set_value('name'); ?>">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="inputage" class="form-lable">อายุ</label>
                                <input type="text" name="age" placeholder="กรุณาใส่อายุ" class="form-control" id="inputforage" value="<?= set_value('age'); ?>">
                            </div>
                        </div>                            
                    <div class="form-group">
                        <label for="inputemail" class="form-lable">อีเมล์</label>
                        <input type="email" name="email" placeholder="กรุณาใส่อีเมล์" class="form-control" id="inputforemail" value="<?= set_value('email');?>">
                    </div>    
                    <div class="form-group">
                    <label for="inputpassword" class="form-lable">รหัสผ่าน</label>
                        <input type="password" name="password" placeholder="กรุณาใส่รหัสผ่าน" class="form-control" id="inputforpassword">
                    </div>     
                    <div class="form-group">
                    <label for="inputconfpassword" class="form-lable">รหัสผ่านอีกครั้ง</label>
                    <input type="password" name="confpassword" placeholder="กรุณาใส่รหัสผ่านอีกครั้ง" class="form-control" id="inputforconfpassword" >
                    </div>           
                     
                    </div>
                         <button type="submit" class="btn btn-success" style=width:20%>ยืนยัน</button>        
                         <a href="/index" class="btn btn-danger" >ยกเลิก</a>
                </form> 
                </div>
    </div>
    </div>
           
                                






</body>
</html>