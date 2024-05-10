<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Website</title>
    <link rel="stylesheet" type="text/css" href="<?=ROOT?>/assets/css/styles.css">
</head>
<body>
    <header>
        <div class="logo-holder">
            <img class="logo" src="<?=ROOT?>/assets/images/MainIcon.png" alt="logo">
        </div>
        <div class="header-div">
            <div class="main-title">
                MARBLE MUSIC
                <div class="searching">
                    <form class="search-bar">
                        <div class="form-group">
                            <input class="search-field" type="text" placeholder="Tìm kiếm tên bài hát, nghệ sĩ, ..." name="search">
                            <button class="btn">Tìm kiếm</button>             
                        </div>
                    </form>
                </div>  
            </div>
        </div>
            <div class="main-nav">
                <div class="nav-item"><a href="<?=ROOT?>">Trang chủ</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/music">Bài hát</a></div>
                <div class="nav-item dropdown">
                    <a href="#">Danh mục</a>
                    <div class="drop-list">
                        <div class="nav-item"><a href="">House</a></div>
                        <div class="nav-item"><a href="">Pop</a></div>
                        <div class="nav-item"><a href="">Bass</a></div>
                        <div class="nav-item"><a href="">Dubstep</a></div>
                        <div class="nav-item"><a href="">RnB</a></div>
                    </div>
                </div>
                <div class="nav-item"><a href="<?=ROOT?>/artist">Nghệ sĩ</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/about">Về chúng tôi</a></div>
                <div class="nav-item"><a href="<?=ROOT?>/contact">Liên hệ</a></div>
                <div class="nav-item dropdown">
                    <a href="#">Xin chào, User</a>
                    <div class="drop-list">
                        <div class="nav-item"><a href="<?=ROOT?>/profile">Thông tin</a></div>
                        <div class="nav-item"><a href="<?=ROOT?>/logout">Đăng xuất</a></div>
                </div>
            </div>
        </div>
    </header>
