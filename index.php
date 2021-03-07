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
    document.converter.asd.value = document.converter.euro.value * 1.55
    document.converter.dollar.value = document.converter.euro.value * 1.19
    document.converter.franc.value = document.converter.euro.value * 1.11
    document.converter.peso.value = document.converter.euro.value * 24.50
    document.converter.pound.value = document.converter.euro.value * 0.86
    document.converter.ringgit.value = document.converter.euro.value * 4.85
    document.converter.ruble.value = document.converter.euro.value * 88.59
    document.converter.rupee.value = document.converter.euro.value * 87.20
    document.converter.won.value = document.converter.euro.value * 1344.40
    document.converter.yen.value = document.converter.euro.value * 129.18
    document.converter.yuan.value = document.converter.euro.value * 7.74
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
    document.converter.asd.value = document.converter.pound.value * 1.80
    document.converter.dollar.value = document.converter.pound.value * 1.38
    document.converter.euro.value = document.converter.pound.value * 1.16
    document.converter.franc.value = document.converter.pound.value * 1.29
    document.converter.peso.value = document.converter.pound.value * 29.30
    document.converter.ringgit.value = document.converter.pound.value * 5.64
    document.converter.ruble.value = document.converter.pound.value * 102.89
    document.converter.rupee.value = document.converter.pound.value * 101.28
    document.converter.won.value = document.converter.pound.value * 1561.46
    document.converter.yen.value = document.converter.pound.value * 150.03
    document.converter.yuan.value = document.converter.pound.value * 8.99
}

function yenConverter(){
    document.converter.asd.value = document.converter.yen.value * 0.012
    document.converter.dollar.value = document.converter.yen.value * 0.0092
    document.converter.euro.value = document.converter.yen.value * 0.0077
    document.converter.franc.value = document.converter.yen.value * 0.0086
    document.converter.peso.value = document.converter.yen.value * 0.20
    document.converter.pound.value = document.converter.yen.value * 0.0067
    document.converter.ringgit.value = document.converter.yen.value * 0.038
    document.converter.ruble.value = document.converter.yen.value * 0.69
    document.converter.rupee.value = document.converter.yen.value * 0.68
    document.converter.won.value = document.converter.yen.value * 10.41
    document.converter.yuan.value = document.converter.yen.value * 0.060
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
    document.converter.ruble.value = document.converter.asd.value * 57.16
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
    document.converter.asd.value = document.converter.ruble.value * 0.017
    document.converter.dollar.value = document.converter.ruble.value * 0.013
    document.converter.euro.value = document.converter.ruble.value * 0.011
    document.converter.franc.value = document.converter.ruble.value * 0.013
    document.converter.peso.value = document.converter.ruble.value * 0.29
    document.converter.pound.value = document.converter.ruble.value * 0.0097
    document.converter.ringgit.value = document.converter.ruble.value * 0.055
    document.converter.rupee.value = document.converter.ruble.value * 0.98
    document.converter.won.value = document.converter.ruble.value * 15.17
    document.converter.yen.value = document.converter.ruble.value * 1.46
    document.converter.yuan.value = document.converter.ruble.value * 0.087
}

function yuanConverter(){
    document.converter.asd.value = document.converter.yuan.value * 0.20
    document.converter.dollar.value = document.converter.yuan.value * 0.15
    document.converter.euro.value = document.converter.yuan.value * 0.13
    document.converter.franc.value = document.converter.yuan.value * 0.14
    document.converter.peso.value = document.converter.yuan.value * 3.28
    document.converter.pound.value = document.converter.yuan.value * 0.11
    document.converter.ringgit.value = document.converter.yuan.value * 0.63
    document.converter.ruble.value = document.converter.yuan.value * 11.44
    document.converter.rupee.value = document.converter.yuan.value * 11.26
    document.converter.won.value = document.converter.yuan.value * 173.66
    document.converter.yen.value = document.converter.yuan.value * 16.69
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
    document.converter.asd.value = document.converter.ringgit.value * 0.32
    document.converter.dollar.value = document.converter.ringgit.value * 0.25
    document.converter.euro.value = document.converter.ringgit.value * 0.21
    document.converter.franc.value = document.converter.ringgit.value * 0.23
    document.converter.peso.value = document.converter.ringgit.value * 5.23
    document.converter.pound.value = document.converter.ringgit.value * 0.18
    document.converter.ruble.value = document.converter.ringgit.value * 18.25
    document.converter.rupee.value = document.converter.ringgit.value * 17.96
    document.converter.won.value = document.converter.ringgit.value * 276.93
    document.converter.yen.value = document.converter.ringgit.value * 26.56
    document.converter.yuan.value = document.converter.ringgit.value * 1.59
}


function pesoConverter(){
    document.converter.asd.value = document.converter.peso.value * 0.061
    document.converter.dollar.value = document.converter.peso.value * 0.047
    document.converter.euro.value = document.converter.peso.value * 0.039
    document.converter.franc.value = document.converter.peso.value * 0.044
    document.converter.pound.value = document.converter.peso.value * 0.034
    document.converter.ringgit.value = document.converter.peso.value * 0.19
    document.converter.ruble.value = document.converter.peso.value * 3.49
    document.converter.rupee.value = document.converter.peso.value * 3.43
    document.converter.won.value = document.converter.peso.value * 52.93
    document.converter.yen.value = document.converter.peso.value * 5.09
    document.converter.yuan.value = document.converter.peso.value * 0.30
}

    </script>
</html>
