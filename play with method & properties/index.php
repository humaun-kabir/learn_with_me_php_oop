
<form action="" method="POST">
    <table>
        <tr>
            <td>Enter the first number :</td>
            <td><input type="number" name="num1"></td>
        </tr>
        <tr>
            <td>Enter the second number :</td>
            <td><input type="number" name="num2"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="calculation" value="Calculate"></td>
        </tr>
    </table>
</form>

<?php
    include "function.php";
    
    if(isset($_POST['calculation'])){
        $numOne = $_POST['num1'];
        $numTwo = $_POST['num2'];

        if(empty($numOne) or empty($numTwo)){
            echo "Field must not be empty";
        }else{

            echo "First number is :".$numOne. " Second number is :".$numTwo. "<br>";

        $cal = new Calculation();
        $cal->sum($numOne,$numTwo);
        $cal->sub($numOne,$numTwo);
        $cal->mul($numOne,$numTwo);
        $cal->div($numOne,$numTwo);
        }
    }
?>