
<?php
        

        $user = 'root';   // the user to connect 
        $pass = '';  // password of user   
        $dsn = 'mysql: host=localhost;dbname=bibliotheque';  //data source name

        try{ 
    
            $connectdb = new PDO($dsn,$user,$pass);   // start a new connection with pdo class
   
        }
    
        catch (PDOExeption $e) {
            echo 'failed' . $e -> getMessage();
        }


        return ['connectdb' => $connectdb];
    
 
    
    