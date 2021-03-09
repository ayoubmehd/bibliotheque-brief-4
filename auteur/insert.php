
<?php
    include 'connectdb.php';    

    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $DDN=$_POST['date_de_naissance'];
        $photo=$_POST['photo'];

        $result=$connectdb->query("INSERT into auteur( name, DDN, photo) values('$name','$DDN','$photo')");
        
        header("location: index.php");
    }

             

    

    
 
    
    