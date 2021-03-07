<html>
    <!-- <meta http-equiv="refresh" content="20"> -->
    <title>
        Currency convertor
    </title>
    <link href="style.css" rel="stylesheet">
    <!-- <script src="cconvertor.js"></script> -->
    <!-- <script src="sample.js"></script> -->
    <!-- <link href="style2.css" rel="stylesheet"> -->
    <body>
        </div>
        <div class="top-bar">
            <h1 class="header">Currency Convertor</h1>
        </div>
        <div class="frosted">
	<div class = "right tooltip">
                How to use?
                <span class="tooltiptext">
                    Enter a number in the field opposite to the value you want to convert, and click the convert button. For a reuse, erase the field you want to use and repeat the above step.
                </span>
            </div>   
	 <form name="converter">
                <table border="0">
                <tr>
                <td>Australian Dollar: </td><td><input type="text" name="asd" onChange="asdConverter()" /></td>
		 <td>Indian Rupee: </td><td><input type="text" name="rupee" onChange="rupeeConverter()" /></td>
		 <td>Russian Ruble: </td><td><input type="text" name="ruble" onChange="rubleConverter()" /></td>
                </tr>
                <tr>
                <td>British Pound: </td><td><input type="text" name="pound" onChange="poundConverter()" /></td>
                <td>Japanese Yen: </td><td><input type="text" name="yen" onChange="yenConverter()" /></td>
                <td>South Korean Won: </td><td><input type="text" name="won" onChange="skwConverter()" /></td>
                <tr>
                <td>Chinese Yuan: </td><td><input type="text" name="yuan" onChange="yuanConverter()" /></td>
                <td>Mexican Peso: </td><td><input type="text" name="peso" onChange="pesoConverter()" /></td>
              	<td>Swiss Franc:</td><td><input type="text" name="franc" onChange="francConverter()" /></td>
                </tr>
                <tr>
                <td>Euro: </td><td><input type="text" name="euro" onChange="euroConverter()" /></td>
                <td>Malaysian Ringgit: </td><td><input type="text" name="ringgit" onChange="ringgitConverter()" /></td>
                <td>US Dollar: </td><td><input type="text" name="dollar" onChange="dollarConverter()" /></td>
                </tr>
                <tr>
                <td colspan="6" align="center"><input type="button" value="Convert!" /></td>
                </tr>
                </table>
		</form>
		<!-- <p>
                    How to use the converter:<br>
                    <ul type = "none"> 
                        <li>
                            Enter a number in the field opposite to the value you want to convert, and click the convert button
                        </li>
                        <li>
                            For a reuse, erase the field you want to use and repeat the above step.
                        </li>
                    </ul>
                </p>`-->
        </div>
    </body>
<script>
        function euroConverter(){
    document.converter.asd.value = document.converter.euro.value * 0.65
    document.converter.dollar.value = document.converter.euro.value * 0.84
    document.converter.franc.value = document.converter.euro.value * 0.90
    document.converter.peso.value = document.converter.euro.value * 0.039
    document.converter.pound.value = document.converter.euro.value * 1.16
    document.converter.ringgit.value = document.converter.euro.value * 0.21
    document.converter.ruble.value = document.converter.euro.value * 0.011
    document.converter.rupee.value = document.converter.euro.value * 0.011
    document.converter.won.value = document.converter.euro.value * 0.00074
    document.converter.yen.value = document.converter.euro.value * 0.0077
    document.converter.yuan.value = document.converter.euro.value * 0.13
    }

function dollarConverter(){
    document.converter.asd.value = document.converter.dollar.value * 0.77
    document.converter.euro.value = document.converter.dollar.value * 1.19
    document.converter.franc.value = document.converter.dollar.value * 1.07
    document.converter.peso.value = document.converter.dollar.value * 0.047
    document.converter.pound.value = document.converter.dollar.value * 1.38
    document.converter.ringgit.value = document.converter.dollar.value * 0.25
    document.converter.ruble.value = document.converter.dollar.value * 0.013
    document.converter.rupee.value = document.converter.dollar.value * 0.014
    document.converter.won.value = document.converter.dollar.value * 0.00089
    document.converter.yen.value = document.converter.dollar.value * 0.0092
    document.converter.yuan.value = document.converter.dollar.value * 0.15
    }

function poundConverter(){
    document.converter.asd.value = document.converter.pound.value * 0.56
    document.converter.dollar.value = document.converter.pound.value * 0.72
    document.converter.euro.value = document.converter.pound.value * 0.86
    document.converter.franc.value = document.converter.pound.value * 0.78
    document.converter.peso.value = document.converter.pound.value * 0.034
    document.converter.ringgit.value = document.converter.pound.value * 0.18
    document.converter.ruble.value = document.converter.pound.value * 0.0097
    document.converter.rupee.value = document.converter.pound.value * 0.0099
    document.converter.won.value = document.converter.pound.value * 0.00064
    document.converter.yen.value = document.converter.pound.value * 0.0067
    document.converter.yuan.value = document.converter.pound.value * 0.11
}

function yenConverter(){
    document.converter.asd.value = document.converter.yen.value * 83.29
    document.converter.dollar.value = document.converter.yen.value * 108.40
    document.converter.euro.value = document.converter.yen.value * 129.12
    document.converter.franc.value = document.converter.yen.value * 116.44
    document.converter.peso.value = document.converter.yen.value * 149.89
    document.converter.ringgit.value = document.converter.yen.value * 26.56
    document.converter.ruble.value = document.converter.yen.value * 1.46
    document.converter.rupee.value = document.converter.yen.value * 1.48
    document.converter.won.value = document.converter.yen.value * 0.096
    document.converter.yuan.value = document.converter.yen.value * 16.69
    }

function rupeeConverter(){
    document.converter.asd.value = document.converter.rupee.value * 0.018;
    document.converter.euro.value = document.converter.rupee.value * 0.011;
    document.converter.dollar.value = document.converter.rupee.value * 0.014;
    document.converter.franc.value = document.converter.rupee.value * 0.013
    document.converter.peso.value = document.converter.rupee.value * 0.29
    document.converter.pound.value = document.converter.rupee.value * 0.0099;
    document.converter.ringgit.value = document.converter.rupee.value * 0.056
    document.converter.ruble.value = document.converter.rupee.value * 1.02
    document.converter.won.value = document.converter.rupee.value * 15.42
    document.converter.yen.value = document.converter.rupee.value * 1.48;
    document.converter.yuan.value = document.converter.rupee.value * 0.089
}

function asdConverter(){
    document.converter.euro.value = document.converter.asd.value * 0.65
    document.converter.dollar.value = document.converter.asd.value * 0.77;
    document.converter.franc.value = document.converter.asd.value * 0.72
    document.converter.peso.value = document.converter.asd.value * 16.38
    document.converter.pound.value = document.converter.asd.value * 0.56
    document.converter.ringgit.value = document.converter.asd.value * 3.13
    document.converter.ruble.value = document.converter.asd.value * 0.017
    document.converter.rupee.value = document.converter.asd.value * 56.25;
    document.converter.won.value = document.converter.asd.value * 867.27
    document.converter.yen.value = document.converter.asd.value * 86.29
    document.converter.yuan.value = document.converter.asd.value * 4.99
}

function skwConverter(){
    document.converter.asd.value = document.converter.won.value * 867.27
    document.converter.dollar.value = document.converter.won.value * 1128.23
    document.converter.euro.value = document.converter.won.value * 1344.40
    document.converter.franc.value = document.converter.won.value * 1211.88
    document.converter.peso.value = document.converter.won.value * 52.93
    document.converter.pound.value = document.converter.won.value * 1561.46
    document.converter.ringgit.value = document.converter.won.value * 276.93
    document.converter.ruble.value = document.converter.won.value * 15.17
    document.converter.rupee.value = document.converter.won.value * 15.42
    document.converter.yen.value = document.converter.won.value * 10.41
    document.converter.yuan.value = document.converter.won.value * 173.66
}

function rubleConverter(){
    document.converter.asd.value = document.converter.ruble.value * 57.16
    document.converter.dollar.value = document.converter.ruble.value * 74.35
    document.converter.euro.value = document.converter.ruble.value * 88.59
    document.converter.franc.value = document.converter.ruble.value * 79.86
    document.converter.peso.value = document.converter.ruble.value * 3.49
    document.converter.pound.value = document.converter.ruble.value * 102.89
    document.converter.ringgit.value = document.converter.ruble.value * 18.25
    document.converter.rupee.value = document.converter.ruble.value * 1.02
    document.converter.won.value = document.converter.ruble.value * 0.066
    document.converter.yen.value = document.converter.ruble.value * 0.69
    document.converter.yuan.value = document.converter.ruble.value * 11.42
}

function yuanConverter(){
    document.converter.asd.value = document.converter.yuan.value * 4.99
    document.converter.dollar.value = document.converter.yuan.value * 6.50
    document.converter.euro.value = document.converter.yuan.value * 7.74
    document.converter.franc.value = document.converter.yuan.value * 6.98
    document.converter.peso.value = document.converter.yuan.value * 0.30
    document.converter.pound.value = document.converter.yuan.value * 8.99
    document.converter.ringgit.value = document.converter.yuan.value * 1.59
    document.converter.ruble.value = document.converter.yuan.value * 0.087
    document.converter.rupee.value = document.converter.yuan.value * 0.089
    document.converter.won.value = document.converter.yuan.value * 0.0058
    document.converter.yen.value = document.converter.yuan.value * 0.060
}

function francConverter(){
    document.converter.asd.value = document.converter.franc.value * 0.72
    document.converter.dollar.value = document.converter.franc.value * 0.93
    document.converter.euro.value = document.converter.franc.value * 1.11
    document.converter.peso.value = document.converter.franc.value * 0.044
    document.converter.pound.value = document.converter.franc.value * 1.29
    document.converter.ringgit.value = document.converter.franc.value * 0.23
    document.converter.ruble.value = document.converter.franc.value * 0.013
    document.converter.rupee.value = document.converter.franc.value * 0.013
    document.converter.won.value = document.converter.franc.value * 0.00083
    document.converter.yen.value = document.converter.franc.value * 0.0086
    document.converter.yuan.value = document.converter.franc.value * 0.14
}

function ringgitConverter(){
    document.converter.asd.value = document.converter.ringgit.value * 3.13
    document.converter.dollar.value = document.converter.ringgit.value * 4.07
    document.converter.euro.value = document.converter.ringgit.value * 4.85
    document.converter.franc.value = document.converter.ringgit.value * 4.38
    document.converter.peso.value = document.converter.ringgit.value * 0.19
    document.converter.pound.value = document.converter.ringgit.value * 5.64
    document.converter.ruble.value = document.converter.ringgit.value * 0.055
    document.converter.rupee.value = document.converter.ringgit.value * 0.056
    document.converter.won.value = document.converter.ringgit.value * 0.0036
    document.converter.yen.value = document.converter.ringgit.value * 0.038
    document.converter.yuan.value = document.converter.ringgit.value * 0.63
}


function pesoConverter(){
    document.converter.asd.value = document.converter.peso.value * 16.38
    document.converter.dollar.value = document.converter.peso.value * 21.32
    document.converter.euro.value = document.converter.peso.value * 25.40
    document.converter.franc.value = document.converter.peso.value * 22.90
    document.converter.pound.value = document.converter.peso.value * 29.50
    document.converter.ringgit.value = document.converter.peso.value * 5.23
    document.converter.ruble.value = document.converter.peso.value * 0.29
    document.converter.rupee.value = document.converter.peso.value * 0.29
    document.converter.won.value = document.converter.peso.value * 0.019
    document.converter.yen.value = document.converter.peso.value * 0.20
    document.converter.yuan.value = document.converter.peso.value * 3.28
}

    </script>
</html>
