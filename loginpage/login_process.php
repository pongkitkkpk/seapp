 <?php
// session_start();
// if (isset($_SESSION["id"])) {
//     header("location:index.php");
//     die();
// }
?> 

        <?php
        $e = $_POST['email'];
        $p=$_POST['password'];
        $u=&$_POST['username'];
        $conn = new PDO("mysql:host=localhost;dbname=dbpigpig;charset=utf8","root","");
        $sql = "SELECT * FROM user where email ='$e' and password = sha1('$p') ";
        $result = $conn->query($sql);      
        if($result->rowCount()==1){
            $data=$result->fetch(PDO::FETCH_ASSOC);
            $_SESSION["username"]=$data["login"];
            $_SESSION["role"]=$data["role"];
            $_SESSION["user_id"]=$data["id"];
            $_SESSION["id"]=session_id();
            header("Location:index.php");
            die();
        }else{
            $_SESSION["error"]=1;
            header("Location:login.php");
            die();
        }
        $conn=null;