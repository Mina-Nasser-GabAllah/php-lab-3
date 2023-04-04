<style>
    .required {
        color: red;
    }
</style>
<html>

<body>
    <table>
        <form action="<?php $_PHP_SELF ?>" method="POST">
            <h1>Application name : class Regestraion</h1>
            <h4 class="required">* Required field </h4>
            <tr>
                <td><label>Name:</label></td>
                <td><input type="text" name="name"><label class="required">*
                        <?php 
                                if(isset($_POST["submit"])){
                                 if(empty($_POST["name"])){
                                    $errorName="Name is required";
                                    echo $errorName;
                                 }else{
                                    $errorName="";
                                 }
                                }
                                 ?>
                    </label></td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td><input type="email" name="email"><label class="required">*
                        <?php 
                        if(isset($_POST["submit"])){
                                 if(empty($_POST["email"])){
                                    $errorEmail="Email is required";
                                    echo $errorEmail;
                                 }else{
                                    $errorEmail="";
                                 }
                                }
                                 ?>
                    </label></td>
            </tr>
            <tr>
                <td>Group #</td>
                <td><input type="text" name="group"></td>
            </tr>
            <tr>
                <td>Class details: </td>
                <td><textarea cols="40" rows="5" name="text-area"></textarea></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td> <input type="radio" name="gender" value="Male" />Male
                    <input type="radio" name="gender" value="Female" />Female <label class="required">*
                        <?php if(isset($_POST["submit"])){
                                 if(empty($_POST["gender"])){
                                    $erroreGender="Gender is required";
                                    echo $erroreGender;
                                 }else{
                                    $erroreGender="";
                                 }
                                }
                                 ?>
                    </label>
                </td>
            </tr>
            <tr>
                <td>select Courses:</td>
                <td><select name="coursesName[]" multiple>
                        <option value="php">PHP</option>
                        <option value="javascript">Java Script</option>
                        <option value="mysql">MySQL</option>
                        <option value="html">HTML</option>
                        <option value="css">CSS</option>
                    </select></td>
            </tr>

            <tr>
                <td>Agree:</td>
                <td><input type="checkbox" name="agree"><label class="required">*
                        <?php 
                        if(isset($_POST["submit"])){
                                 if(empty($_POST["agree"])){
                                    $erroreAgree="You must agree at the terms";
                                    echo $erroreAgree;
                                 }else{
                                    $erroreAgree="";
                                 }
                                }
                                 ?>
                    </label></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit"></td>
            </tr>
        </form>

    </table>
</body>

</html>


<?php 
        if(isset($_POST["submit"])){
            if( isset($_POST["name"]) &&  isset($_POST["email"]) && isset($_POST["gender"]) && isset($_POST["agree"])) {
                echo "<h1>your given values are as :</h1>";
                echo "Name:".$_POST["name"]."<br>";
                echo "E-mail:".$_POST["email"]."<br>";
                echo "Group #:".$_POST["group"]."<br>";
                echo "Class:".$_POST["text-area"]."<br>";
                echo "Gender:".$_POST["gender"]."<br>";
                echo "your courses are :  ";
                if(isset($_POST["coursesName"])){
                    foreach($_POST["coursesName"] as $value){
                        echo $value . "     ";
                    }
                }
               
        }
           
        
    }

   
?>