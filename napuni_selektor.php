   <?php
           /* $file = 'modeli.xml';
            if(!$xml = simplexml_load_file($file))
            exit('Failed to open '.$file);

            for ($i=0; $i<=$xml->count()-1; $i++)
            {
                echo '<option value="'.$i.'" >'.$xml->model[$i]->title.'</option>';
                
            }
*/

            $servername = $_SERVER['HTTP_HOST'];
            $username = "root";
            $password = "password";
            $dbname = "myDB1";
            $i=0;
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 

            $sql = "SELECT id, tekst, podtekst, link FROM modelibaza";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
            while($row = $result->fetch_assoc()) {
                
                $i++;
                echo '<option value="'.$i.'" >'.$row["tekst"].'</option>';
                
                
            }
                
            }






?>