<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>หลักสูตรระยะสั้น - คณะมนุษยศาสตร์และสังคมศาสตร์ มหาวิทยาลัยราชภัฏนครปฐม</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="data/css/styles.css" rel="stylesheet" />
    <link href="data/css/css.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/c150442d6f.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid px-4 px-lg-5">
            <a class="navbar-brand" href="http://sc.npru.ac.th/"><i class="fas fa-atom"></i> SC Short Courses</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="http://sc.npru.ac.th/">คณะวิทยาศาสตร์และเทคโนโลยี</a></li>
                    <li class="nav-item"><a class="nav-link" href="https://forms.gle/Gd6Yzdffsb83qpZw7" target="_blank">ยืนยันการชำระเงิน</a></li>
                    <li class="nav-item"><a class="nav-link" href="../view/forn_add_course.php" target="_blank">เพิ่มคอร์ส</a></li>
                </ul>
                <form class="d-flex" action="view/view_search.php" method="GET">
                    <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search"
                        name="keywords" autocomplete="off">
                    <button class="btn btn-outline-dark" type="submit" value="Search"> <i
                            class="fas fa-search"></i></button>
                </form>
            </div>
        </div>
    </nav>
    
    <!-- Header-->
    <header class="bg-or-5 py-1 bg-header-img">
        <div class="container-fluid px-4 px-lg-5 my-5">
            <div class="text-center orange-theme-4">
                <h1 class="display-4 fw-bolder">หลักสูตรระยะสั้น</h1>
                <p class="lead fw-normal text-50 mb-0">คณะวิทยาศาสตร์และเทคโนโลยี มหาวิทยาลัยราชภัฏนครปฐม</p>
            </div>
        </div>
    </header>
    <br>
    <br>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid px-4 px-lg-5">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 me-lg-4">
                    <form action="view/view_chick_year.php" method="POST" class="d-flex">
                        <select class="form-control me-2" name="cs_year" id="cs_year" onchange="this.form.submit();">
                            <option disabled selected hidden><i class="fas fa-search">กรองหลักสูตรตามปี</i></option>
                            <option value="2021">หลักสูตรปี 2021</option>
                            <option value="2022">หลักสูตรปี 2022</option>
                            <option value="2023">หลักสูตรปี 2023</option>
                        </select>
                    </form>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Section-->
    <section class="py-2">
        <div class="container-fluid px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                include "controller/controller_card.php";
                ?>
            </div>
        </div>
    </section>
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