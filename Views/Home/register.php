<div id="register-container">
    <form action="?page=register" enctype="multipart/form-data" method="POST">
        <h1>Đăng ký thông tin của bạn</h1>
        <h3>Email của bạn</h3>
        <input type="email" name="email-register" placeholder="Your Email ...">
        <h3>Mật khẩu của ứng dụng mail</h3>
        <a href="?page=guide" style="font-size: 14px;">Xem cách lấy mật khẩu ứng dụng mail</a>
        <input type="text" name="password-app" placeholder="Your password app mail ..." autocomplete="on">

        <button type="submit" class="btn btn-primary">Gửi</button>
    </form>
</div>

<style>
    #register-container{
        border: 1px solid #999;
        border-radius: 20px;
        padding: 20px 40px;
    }
</style>