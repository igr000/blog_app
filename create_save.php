<?php
   include('db_connection.php');

   try {
       $sqlstr = 'INSERT INTO blogger (username, password, first_name, last_name, age) VALUES ' .
                    '(:username, :password, :first_name, :last_name, :age)';
       $contact = $conn->prepare($sqlstr);

       $contact->bindParam(':username', $_POST['username']);
       $contact->bindParam(':password', $_POST['password']);
       $contact->bindParam(':first_name', $_POST['first_name']);
       $contact->bindParam(':last_name', $_POST['last_name']);
       $contact->bindParam(':age', $_POST['age']);
       $contact->execute();

       header('Location: list.php');
       
   } catch (PDOException $e) {
       echo "Error: " . $e->getMessage();
   }

?>