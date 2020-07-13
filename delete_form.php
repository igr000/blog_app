<?php
   include('db_connection.php');

   try {
   
    $sqlstr = 'DELETE FROM blogger WHERE id=:id';
  
    // Prepare statement
    $contact = $conn->prepare($sqlstr);

    //bind
    $contact->bindParam(':id', $_GET['id']);
  
    // execute the query
    $contact->execute();
    
    //go back to list.php when done deleting
    header('Location: list.php');
  
  } catch(PDOException $e) {
    echo "Error: ". $e->getMessage();
  }
  
?>