<?php
    require_once "Caculator.php";
    require_once "AddOperator.php";
    require_once "SubOperator.php";

    $firstNumber = 0;
    $secondNumber = 0;
    $result = null;

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $operator = $_POST["operator"];
        $firstNumber = $_POST["firstNumber"];
        $secondNumber = $_POST["secondNumber"];
        switch ($operator){
            case '+':
                $caculator = new Caculator(new AddOperator());
                break;
            case '-':
                $caculator = new Caculator(new SubOperator());
                break;
        }

        $result = $caculator->execute($firstNumber, $secondNumber);
    }
?>

<form method="post" >
    <fieldset>
        <legend>Simple Calculator</legend>
        <label>First number: </label>
        <input type="text" value="<?php echo $firstNumber; ?>" name="firstNumber"><br>
        <label>Operator: </label>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
        </select><br>
        <label>Second number: </label>
        <input type="text" value="<?php echo $secondNumber; ?>" name="secondNumber"><br>
        <label>Result: </label>
        <input type="text" value="<?php echo $result;?>" name="result"><br>
        <button name="calculate" value="caculate">Calculate</button>
    </fieldset>
</form>