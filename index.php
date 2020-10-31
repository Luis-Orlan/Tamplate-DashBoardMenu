<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar Dashboard Template With Submenu</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" type="text/css">
</head>
<body>

    <div class="wrapper">
        <div class="header">
            <div class="header-menu">
                <div class="title">Coding <span>Snow</span></div>
                <div class="sidebar_btn">
                    <i class="fas fa-bars"></i>
                </div>
                <ul>
                    <li><a href=""><i class="fas fa-search"></i></a></li>
                    <li><a href=""><i class="fas fa-bell"></i></a></li>
                    <li><a href=""><i class="fas fa-power-off"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="sidebar">
        <div class="sidebar-menu">
            <center>
                <img src="Zoro-Final-1.jpg" alt="">
                <p>Zoro Sola</p>
            </center>
            <li class="item">
                <a href="#" class="menu-btn">
                    <i class="fas fa-desktop">Dashboard</i>
                </a>
            </li>
            <li class="item" id="profile">
                <a href="#profile" class="menu-btn">
                    <i class="fas fa-user-circle">Profile <i class="fas fa-chevron-down drop-down"></i></i>
                </a>
                <div class="sub-menu">
                <a href="#"><i class="fas fa-image"></i><span>Picture</span></a>
                <a href="#"><i class="fas fa-address-card"></i><span>Info</span></a>
                </div>
            </li>
            <li class="item" id="messages">
                <a href="#profile" class="menu-btn">
                    <i class="fas fa-user-circle">Messages <i class="fas fa-chevron-down drop-down"></i></i>
                </a>
                <div class="sub-menu">
                    <a href="#"><i class="fas fa-envelope"></i><span>New</span></a>
                    <a href="#"><i class="fas fa-envelope-square"></i><span>Sent</span></a>
                    <a href="#"><i class="fas fa-exclamation-circle"></i><span>Spam</span></a>
                </div>
            </li>
            <li class="item" id="settings">
                <a href="#profile" class="menu-btn">
                    <i class="fas fa-user-circle">Settings <i class="fas fa-chevron-down drop-down"></i></i>
                </a>
                <div class="sub-menu">
                    <a href="#"><i class="fas fa-lock"></i><span>Password</span></a>
                    <a href="#"><i class="fas fa-lock"></i><span>Language</span></a>
                </div>
            </li>
            <li class="item">
                <a href="#" class="menu-btn">
                    <i class="fas fa-info-circle"></i><span>About</span>
                </a>
            </li>
        </div>
    </div>
    
</body>
</html>