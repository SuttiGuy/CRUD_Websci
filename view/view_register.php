<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>หลักสูตรระยะสั้น - คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->

    <link href="../data/css/styles.css" rel="stylesheet" />
    <link href="../data/css/css.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6146da0840d29100191b272f&product=inline-share-buttons" async="async"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">

            <a class="navbar-brand " href="../index.php"><i class="fas fa-angle-left"></i> หลักสูตรระยะสั้น</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item "><a class="nav-link " aria-current="page" href="http://sc.npru.ac.th/">คณะวิทยาศาสตร์และเทคโนโลยี</a></li>
                    <li class="nav-item "><a class="nav-link " href="https://forms.gle/Gd6Yzdffsb83qpZw7" target="_blank">ยืนยันการชำระเงิน</a></li>
                    <!-- <li class="nav-item bg-or-3 rounded"><a class="nav-link text-light ms-2 ms-md-auto" href="../">หลักสูตรทั้งหมด</a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <div class="container-fluid px-4 px-lg-5 my-5">
        <div class="text-center orange-theme-4">
            <h1 class="display-4 fw-bolder">แบบฟอร์มลงทะเบียนหลักสูตรฝึกอบรมระยะสั้น</h1>
            <h2><?php echo $rs2['cs_name']; ?></h2>
            <p class="lead fw-normal text-50 mb-0">คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</p>
        </div>
    </div>
    <center>
        <div class="col-md-8">
            <form name="frmadd" method="post" action="con_register.php" enctype="multipart/form-data"><!-- ../controller/con_add_course.php -->

                <input name="RegisCID" type="hidden" id="ID" value="<?php echo $rs2['cs_id']; ?>"><!-- cs_id -->

                <!-- <input type="hidden" id="cs_year" name="cs_year" value="2566"> ปีปัจจุบันเท่านั้น ต้องมาเปลี่ยนตัวเลขปีทุกปี -->
                <!-- <input type="list" id="cs_year" name="cs_year">  -->

                <div class="form-group row">
                    <label for="staticEmail" class="col-sm col-form-label">ลงชื่อเข้าใช้ Google เพื่อบันทึกการแก้ไข ดูข้อมูลเพิ่มเติม*จำเป็น</label>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">อีเมล *</label>
                    <div class="col-sm-10">
                        <input type="text" name="Email" class="form-control" id="Email" placeholder="คำตอบของคุณ">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm col-form-label">1. ลงทะเบียนหลักสูตรฝึกอบรมระยะสั้น <?php echo $rs2['cs_name']; ?> ค่าลงทะเบียน <?php echo $rs2['cs_wallet']; ?> </label>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">ชื่อ นามสกุล *</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" placeholder="คำตอบของคุณ">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">หมายเลขโทรศัพท์ *</label>
                    <div class="col-sm-10">
                        <input type="text" name="Phonenumber" class="form-control" id="Phonenumber" placeholder="คำตอบของคุณ">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">เลขประจำตัวประชาชน *</label>
                    <div class="col-sm-10">
                        <input type="text" name="IDnumber" class="form-control" id="IDnumber" placeholder="คำตอบของคุณ">
                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">วุฒิการศึกษาสูงสุด (ที่ได้รับ)</label>
                    <div class="col-sm-10">

                        <input list="educational" id="re_educational" name="educational">
                        <datalist id="educational">
                            <option value="มัธยมต้น">
                            <option value="มัธยมปลาย">
                            <option value="ปวช.">
                            <option value="ปวส.">
                            <option value="ปริญญาตรี">
                            <option value="ปริญญาโท">
                            <option value="ปริญญาเอก">
                            <option value="อื่น ๆ">
                        </datalist>

                    </div>
                </div>
                <br>
                <div class="form-group row">
                    <p>2. การชำระเงินโอนผ่านธนาคาร ธนาคารไทยพาณิชย์ ประเภทกระแสรายวัน ชื่อบัญชี มหาวิทยาลัยราชภัฏนครปฐม</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;เลขที่บัญชี : 860-249-9555</p>
                </div>

                <div class="form-group row">
                    <label for="staticEmail" class="col-sm col-form-label">3. ยืนยันการชำระเงิน
                        แบบฟอร์มยืนยันการชำระเงิน
                        <p><a href="https://docs.google.com/forms/d/e/1FAIpQLScubDyU0NrSvlNwc-YiGaPtJkewjCdt6Rcyzi-PpxllY5gulQ/viewform" class="text-primary">https://forms.gle/1i1xJFEtwHXbESUU7</a></p>
                        <br>
                    </label>
                </div>



                <div class="form-group row">
                    <center>
                        <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary btn-block">&nbsp;&nbsp;<i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp;ส่งข้อมูล&nbsp;&nbsp;</button>
                        </div>
                        <!-- <button type="submit" class="btn btn-warning"><i class="fa fa-pencil-square" aria-hidden="true"></i>ส่งข้อมูล</button>     -->
                    </center>
                </div>


            </form>
    </center>
    <!-- Footer-->
    <footer class="py-5 bg-green">
        <div class="container-fluid">
            <p class="m-0 text-center text-dark">
                Copyright &copy; Faculty of Faculty of Science and Technology Nakhon Pathom Rajabhat University 2021
                <br>
                <!-- <a href="#">web'dev by Kingzlab | Illustration by SaNeKi | credit </a> -->
            </p>

        </div>

    </footer>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="data/js/scripts.js"></script>

</body>

</html>