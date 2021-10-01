<!DOCTYPE html>
<html>
    <head>
        <title>Malibu Calculator</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="calculator.js"></script>
    </head>
    <body>
        <?php
            class Calculator {
                private $_firstNum , $_secondNum;

                public function __construct($firstNum, $secondNum){
                    $this->_firstNum = $firstNum;
                    $this->_secondNum = $secondNum;
                }

                
                private function checkAnswer($result) {
                    if ($result == 1982) {
                        echo '<script type="text/javascript">showConfetti()</script>';
                    }  
                }

                public function add(){
                    $result = $this->_firstNum + $this->_secondNum;
                    checkAnswer($result);
                }

                public function subtract(){
                    $result = $this->_firstNum - $this->_secondNum;
                    checkAnswer($result);       
                }

                public function multiply (){
                    $result = $this->_firstNum * $this->_secondNum;
                    checkAnswer($result);
                }

                public function divide () {
                    $result = $this->_firstNum / $this->_secondNum;   
                    checkAnswer($result);           
                }

            }
            $first = 1000;
            $second = 982;
            $result = $first + $second;

            if ($result == 1982) {
                echo '<script type="text/javascript"> testFunction() </script>';
            }
        ?>
        <table>
            <input type="text" name="window" id="window" readonly="true" value=<?php echo $result?>>
            <tr>
                <td><button class="btn">(</button></td>
                <td><button class="btn">)</button></td>
                <td><button class="btn">%</button></td>
                <td><button class="btn">AC</button></td>
            </tr>
            <tr>
                <td><button class="btn btn-default">7</button></td>
                <td><button class="btn btn-default">8</button></td>
                <td><button class="btn btn-default">9</button></td>
                <td><button class="btn">/</button></td>
            </tr>
            <tr>
                <td><button class="btn btn-default">4</button></td>
                <td><button class="btn btn-default">5</button></td>
                <td><button class="btn btn-default">6</button></td>
                <td><button class="btn">x</button></td>
            </tr>
            <tr>
                <td><button class="btn btn-default">1</button></td>
                <td><button class="btn btn-default">2</button></td>
                <td><button class="btn btn-default">3</button></td>
                <td><button class="btn">-</button></td>
            </tr>
            <tr>
                <td><button class="btn btn-default">0</button></td>
                <td><button class="btn btn-default">.</button></td>
                <td><button class="btn btn-primary">=</button></td>
                <td><button class="btn">+</button></td>
            </tr>
        </table>
        <div id="celebration">

        </div>
    </body>
</html>