<?php require page('includes/header')?>

    <section class="content login-content">     
        <div class="login-holder">
            <h1>Âm nhạc dành cho bạn !</h1>
            <form class="login-form" method="post">
                <h2>Đăng nhập</h2>
                <label class="login-label">Email: </label>
                <br>
                <input class="my-1 form-control" type="email" name="email" placeholder="example@email.com">
                <br>
                <label class="login-label">Mật khẩu: </label>
                <br>
                <input class="my-1 form-control" type="password" name="pasword">
                <br>
                <button class="my-1 btn bg-blue login-btn">Đăng nhập</button>
            </form>
        </div>
    </section>

<?php require page('includes/footer')?>