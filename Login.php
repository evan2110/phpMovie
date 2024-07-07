<link rel="stylesheet" href="assets/loginCss2.css" asp-append-version="true" />
<script src="https://kit.fontawesome.com/dcb7ffb312.js" crossorigin="anonymous"></script>

<div class="form-wrapper">
    <p><a href="index.php"><i class="fa-solid fa-arrow-left" style="color: #f9f8fc;"></i> Trở lại</a></p>
    <form asp-action="Login" asp-controller="Login" method="post">
        <div class="form-control">
            <input name="username" type="text" required>
            <label>Tên đăng nhập</label>
        </div>
        <div class="form-control">
            <input name="password" type="password" minlength="6" required>
            <label>Mật khẩu</label>
        </div>
        <button type="submit">Đăng nhập</button>
        <!-- @*<div class="form-help">
            <div class="remember-me">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>
            <a href="#">Need help?</a>

        </div>*@ -->
        <!-- @if (error != "")
        {
            <div style="margin-top: 16px;">
                <p style="color: red;">@error</p>
            </div>
        } -->
    </form>
    <p>Thành viên mới ?<a href="Register.php"> Đăng ký ngay</a></p>
</div>