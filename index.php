<!DOCTYPE html>
<html>
    <head>
        <title>Malibu Calculator</title>
        <link rel="stylesheet" href="style.css">
        <script src="calculator.js"></script>
    </head>
    <body>
        <?php
            $first = 1000;
            $second = 982;
            $result = $first + $second;
            // if ($result == 1982) {
            //     # code...
            // }
            
        ?>
        <table>
            <input type="text" name="window" id="window" readonly="true" value=<?php echo $result?>>
            <tr>
                <td><button class="operator">(</button></td>
                <td><button class="operator">)</button></td>
                <td><button class="operator">%</button></td>
                <td><button class="operator">AC</button></td>
            </tr>
            <tr>
                <td><button class="number">7</button></td>
                <td><button class="number">8</button></td>
                <td><button class="number">9</button></td>
                <td><button class="operator">/</button></td>
            </tr>
            <tr>
                <td><button class="number">4</button></td>
                <td><button class="number">5</button></td>
                <td><button class="number">6</button></td>
                <td><button class="operator">x</button></td>
            </tr>
            <tr>
                <td><button class="number">1</button></td>
                <td><button class="number">2</button></td>
                <td><button class="number">3</button></td>
                <td><button class="operator">-</button></td>
            </tr>
            <tr>
                <td><button class="number">0</button></td>
                <td><button class="number">.</button></td>
                <td><button class="equals">=</button></td>
                <td><button class="operator">+</button></td>
            </tr>
        </table>

        <!-- <iframe src="https://giphy.com/embed/lPoOHG39XAlV4it61H" width="1000" height="600" frameBorder="0" class="giphy-embed" allowFullScreen></iframe> -->

    </body>
</html>