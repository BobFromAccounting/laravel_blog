<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Calculator">
        <meta name="author" contents="Tarek S Hafez">
        <title>Calculator!!!</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/custom.css">
        <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    </head>
    <body>
        <div class="calculatorinput">
            <form>
                <input type="text" name="Initial Input Operand" class="input" id="initialdisplay" readonly>
                <input type="text" name="Mathematical Operator" class="input" id="operator" readonly>
                <input type="text" name="Secondary Input Operand" class="input" id="secondaryinput" readonly>
            </form>
            <a class="btn btn-default btn-width numeral" id="one" href="#" role="button">1</a>
            <a class="btn btn-default btn-width numeral" id="two" href="#" role="button">2</a>
            <a class="btn btn-default btn-width numeral" id="three" href="#" role="button">3</a>
            <a class="btn btn-warning btn-width operator" id="plus" href="#" role="button">+</a>
            <a class="btn btn-default btn-width numeral" id="four" href="#" role="button">4</a>
            <a class="btn btn-default btn-width numeral" id="five" href="#" role="button">5</a>
            <a class="btn btn-default btn-width numeral" id="six" href="#" role="button">6</a>
            <a class="btn btn-warning btn-width operator" id="minus" href="#" role="button">-</a>
            <a class="btn btn-default btn-width numeral" id="seven" href="#" role="button">7</a>
            <a class="btn btn-default btn-width numeral" id="eight" href="#" role="button">8</a>
            <a class="btn btn-default btn-width numeral" id="nine" href="#" role="button">9</a>
            <a class="btn btn-warning btn-width operator" id="times" href="#" role="button">*</a>
            <a class="btn btn-danger btn-width" id="clear" href="#" role="button">C</a>
            <a class="btn btn-default btn-width numeral" id="zero" href="#" role="button">0</a>
            <a class="btn btn-success btn-width" id="equal" href="#" role="button">=</a>
            <a class="btn btn-warning btn-width operator" id="divide" href="#" role="button">/</a>
        </div>
        <script type="text/javascript" src="/js/calculator_js.js"></script>
    </body>
</html>