<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="col-md-12">
        <h1 class='text-center'>Login </h1>
        <?php if(isset($_GET["error"])){
            echo "<h3 style='color:red'>Invalid username or password</h3>";
        }
        ?>
            <form action=""method="post"> 
            <div>
                <Label for ="username">UserName:</Label>
                <input name="username" id ="username">
            </div>

        <div>
        <Label for ="password">PassWord:</Label>
        <input type="password" name="password" id="password">

                
         <div>
        <input type="submit" name="btnLogin" value="Login" class="btn btn-primary mt-3">
            </div>
        </form>
        <?php 
        if(isset($_POST['btnLogin'])){
            $u = $_POST['username'];
            $p = $_POST['password'];
        if($u =="Hutech" && $p == "123"){
            header('Location: hello.php');
        }else{
            header("Location: Login.php?error=1");
        }    
        }
    ?>
    </div>
    </div>

        </div>
    </div>
</body>
</html>