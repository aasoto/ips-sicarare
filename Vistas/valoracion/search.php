<?php  
 $connect = mysqli_connect("localhost", "root", "", "ipsbd");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM enfermedades WHERE descripcion LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["codigo"].' - '.$row["descripcion"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>enfermedad no encontrada</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>