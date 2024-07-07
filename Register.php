<?php 
    require './components/header.php'; 

    $name = $rePassword = $password = '';
    $name_error = $rePassword_error = $password_error = '';
    if(isset($_POST['submit'])){

        if(empty($_POST['name'])){
            $name_error = '<br> Name is required';
        }else{
            $name = htmlspecialchars($_POST['name']);
        }
        if(empty($_POST['rePassword'])){
            $rePassword_error = '<br> Repassword is required';
        }else{
            $rePassword = htmlspecialchars($_POST['rePassword']);
        }
        if(empty($_POST['password'])){
            $password_error = '<br> Password is required';
        }else{
            $password = htmlspecialchars($_POST['password']);
        }

        echo $name_error;
        echo $rePassword_error;
        echo $password_error;
        
        $validate_success = empty($name_error) && empty($rePassword_error) && empty($password_error);
        if($validate_success){
            $sql = "INSERT INTO USERS(UserName, Email, Password)
            VALUES(?,?,?)
            ";

            try{
                $statement = $connection->prepare($sql);
                $statement->bindParam(1, $name_error);
                $statement->bindParam(2, $name_error);
                $statement->bindParam(3, $password);
                $statement->execute();
                //echo "Inserted feedback";
                header("Location: index.php");
            }catch(PDOException $e){
                echo "Cannot insert feedback " .$e->getMessage();
            }
        }
            
    }else{
    }
?>

<link rel="stylesheet" href="assets/loginCss2.css" asp-append-version="true" />
<script src="https://kit.fontawesome.com/dcb7ffb312.js" crossorigin="anonymous"></script>

<div class="form-wrapper">
    <p><a href="Login.php"><i class="fa-solid fa-arrow-left" style="color: #f9f8fc;"></i> Trở lại</a></p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-control">
            <input name="name" type="text" required>
            <label>Tên đăng nhập</label>
        </div>
        <div class="form-control">
            <input name="password" type="password" minlength="6" required>
            <label>Mật khẩu</label>
        </div>
        <div class="form-control">
            <input name="rePassword" type="password" minlength="6" required>
            <label>Nhập lại mật khẩu</label>
        </div>
        <button name="submit" type="submit">Đăng ký</button>
        <!-- <div class="form-help">
            @if (error != "Ok" && error != "")
            {
                <span style="color: red;">@error</span>
            }
            else if (error == "Ok")
            {
                <span style="color: green;">Đăng ký thành công <a href="/Login"> Đăng nhập ngay</a></span>
            }

        </div> -->
    </form>
</div>