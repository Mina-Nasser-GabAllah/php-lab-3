<html>
    <body>
        <h1>Application name:php class registration</h1>
        
        <?php 
        $students = [
            ['name' => 'Alaa', 'email' => 'ahmed@test.com', 'status' => 'CMS'],
            ['name' => 'Shamy', 'email' => 'ali@test.com', 'status' => 'OS'],
            ['name' => 'Youssef', 'email' => 'basem@test.com', 'status' => 'OS'],
            ['name' => 'Waleid', 'email' => 'farouk@test.com', 'status' => 'CMS'],
            ['name' => 'Rahma', 'email' => 'hany@test.com', 'status' => 'OS'],
        ];

        echo "<table>";
        echo '<tr>' 
        ."<th><h3>Name</h3></th>".
        "<th><h3>Email</h3></th>".
        "<th><h3>Status</h3></th>".
         '</tr>';
        foreach ($students as $studentArr) {
            echo '<tr >';
            if($studentArr['status']=='CMS'){
                echo '<tr style="color:red;">';
            }
            foreach($studentArr as $value){
                echo '<td >' . "<h4>$value</h4>" . '</td>';
            }
        }
            echo '</tr>';      
    
    echo "</table>";
?>
            
</body>
</html>
