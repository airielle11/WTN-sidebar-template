<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WTN Time Tracker</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/4.0/lineicons.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-wrap">
        <div class="body-overlay"></div>
        <div class="sidebar">
            <div class="logo">
                <h3 class="ms-3 mt-4 mb-4"><img src="logo.png" class="img-fluid ms-2" /><a><span class="ms-2" style="letter-spacing:0.05em; font-size: 20px; color: #5B5C70; font-weight: 600;">WhereTo</span><span style="letter-spacing:0.05em;font-size: 20px; color: #299FF5; font-weight: 600;">Med</span></a>
                </h3>
            </div>
            <ul class="list-unstyled component m-0">
                <span class="nav-item-title mt-5 px-4" style="color: #64748B;">Menu</span>
                <li class="nav-item mb-2" style="width: 270px; margin-left: 14px;">
                    <a href="#" class="nav-link text-dark rounded mt-1" style="height: 50px;">
                        <i class="lni lni-grid-alt mt-2" style="margin-left: 4px;"></i>
                        <span class="nav-item-title ms-2">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item mb-2" style="width: 270px; margin-left: 14px;">
                    <a href="#" class="nav-link text-dark rounded" style="height: 50px;">
                        <i class="lni lni-book mt-2" style="margin-left: 4px;"></i>
                        <span class="nav-item-title ms-2" style="margin-top: -32px;">Reports</span>
                    </a>
                </li>
                <li class="nav-item mb-2" style="width: 270px; margin-left: 14px;">
                    <a href="#" class="nav-link text-dark rounded" style="height: 50px;">
                        <i class="lni lni-alarm mt-2" style="margin-left: 4px;"></i>
                        <span class="nav-item-title ms-2">Notifications</span>
                        <div class="notification-status container-fluid rounded-3 bg-danger align-items-center d-flex" style="width: 40px; height: 30px; margin-top: -26px; margin-left: 200px;">
                            <span class="text-white text-center">10</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-4" style="width: 270px; margin-left: 14px;">
                    <a href="#" class="nav-link text-dark rounded" style="height: 50px;">
                        <i class="lni lni-cog style mt-2" style="margin-left: 4px;"></i>
                        <span class="nav-item-title ms-2" style="margin-top: -32px;">Settings</span>
                    </a>
                </li>
                <div class="bottom-items">
                    <div style="margin-left: 15px;"><hr></div>
                    <span class="nav-item-title mt-2 fs-6 px-4" style="color: #64748B;">Profile</span>
                    <div class="d-flex mt-3">
                        <img src="profile.svg" class="img-fluid rounded ms-3" width="50px" alt="">
                        <span class="nav-item-title">
                            <h6 class="mt-1 mb-0 ms-2">Jenny Wilson</h6>
                            <small class="ms-2 text-secondary">jen.wilson@example.com</small>
                        </span>
                    </div>
                    <li class="nav-item mt-3 rounded" style="background: #F6F7F8; width: 270px; margin-left: 14px;">
                        <a href="#" class="nav-link text-center text-dark rounded" style="height: 50px;">
                            <i class="lni lni-exit mt-2" style="margin-left: -15px;"></i>
                            <span class="nav-item-title ms-2">Logout</span>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
        <div id="content-area">
            <div class="menu-navbar">
                <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                    <div class="menu-btn">
                        <i class="lni lni-menu text-dark"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
