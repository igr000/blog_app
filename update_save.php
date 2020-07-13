<?php
   include('db_connection.php');

   try {
   
    $sqlstr = 'UPDATE blogger SET '.'username= :username, '.' password= :password, '.' first_name= :first_name, '.' last_name= :last_name, '.'age= :age '.'WHERE id=:id';
  
    // Prepare statement
    $contact = $conn->prepare($sqlstr);

    //bind
    $contact->bindParam(':id', $_POST['id']);
    $contact->bindParam(':username', $_POST['username']);
    $contact->bindParam(':password', $_POST['password']);
    $contact->bindParam(':first_name', $_POST['firstName']);
    $contact->bindParam(':last_name', $_POST['lastName']);
    $contact->bindParam(':age', $_POST['age']);
    
  
    // execute the query
    $contact->execute();

    header('Location: list.php');
  
  } catch(PDOException $e) {
    echo "Error: ". $e->getMessage();
  }
  
?>