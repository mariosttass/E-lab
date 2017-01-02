    <?php
    $host="localhost"; // Host name
    $username="root"; // username
    $password="12345"; // password
    $db_name="e-labdb"; // Database name
    $tbl_name="users"; // Table name
     $salt = "Hello world";
    if(!isset($_POST['txt_aem'],$_POST['txt_password'])){
     die('Please enter credentials, both username and password');
    }
    if(is_null($aem = filter_input(INPUT_POST,'txt_aem',FILTER_SANITIZE_STRING,array(FILTER_FLAG_STRIP_LOW,FILTER_FLAG_STRIP_HIGH))) || is_null($password =filter_var($_POST["txt_password"]))
    ){
     die("Invalid values for username and password");
    }
    $encryptedpass =hash("sha512",$password.$salt);
    try{
    $con = new PDO("mysql:dbname={$db_name};host={$host}",$username,$password) or die('Error connecting to database');
    }catch(PDOException $e){
     die("Error connecting to database : ".$e->getMessage());
    }
    $query=$con->prepare("SELECT * FROM `users` WHERE aem=:user AND password=:pwd");
    $query->bindParam(":user",$aem,PDO::PARAM_STR);
    $query->bindParam(":pwd",$encryptedpass,PDO::PARAM_STR);
    if($query->execute()){
     if($query->rowCount()==1){
            die("Found ya!");
     }else{
            die("Invalid username or password");
     }
    }else{
     die("Unable to query database");
    }
    ?>
