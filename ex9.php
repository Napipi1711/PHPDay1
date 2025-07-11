<html> 
   <head> 
      <title>PHP Form</title> 
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
   </head> 
   <body> 
  <h1>PHP Form</h1> 
    <form method='POST'>  
      <h2>Your name:</h2> 
      <input type="text" name="name">  
      <input type="submit" value="Submit">  
    </form> 
    <?php   
      $name = $_POST['name'];         echo "<h3>Welcome $name logged in successully!</h3>";   
    ?>    
   </body> 
</html> 
