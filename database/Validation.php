<?php
    class Validation{
        public $db = null;

        public function __construct(DBController $db){
            if (!isset($db->con)) return null;
            $this->db = $db;
        }

        public function logIn($email, $password){
            $result = $this->db->con->query("SELECT * FROM user WHERE email_id='".$email."' AND password='".$password."'");
                if (mysqli_num_rows($result) == 1){
                    // Reload Page PHP self returns the current page
                    $host  = $_SERVER['HTTP_HOST'];
                    $uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
                    $extra = 'index.php';
                    header("Location: http://$host$uri/$extra");
                }
        }

        public function signUp($name, $email,  $mobile, $password){
            $query = "INSERT INTO user(name, email_id, mobile, password) VALUES( '$name', '$email', '$mobile', '$password' );";
            $result = $this->db->con->query( $query );
                if ($result){
                    // Reload Page PHP self returns the current page
                   return $result;
                }
        }

        public function getLogs(){
            $query = "CALL `getUsers`()";
            $result = $this->db->con->query( $query );
            ?>
            <br>
            <div class ="p-2 m-auto w-75 container">
            <?php
            print_r($result->fetch_all());
            ?>
            </div>
            <br>
            <?php
        }
    }
?>