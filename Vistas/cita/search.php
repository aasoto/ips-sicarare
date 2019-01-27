<?php  
 $connect = mysqli_connect("localhost", "root", "", "ipsbd");  
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM pacientes WHERE numdoc LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($connect, $query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["numdoc"].' - '.$row["nom1"].' '.$row["nom2"].' '.$row["apellido1"].' '.$row["apellido2"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>paciente no encontrado</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  