<html>
    <!-- <meta http-equiv="refresh" content="20"> -->
    <title>
        Currency convertor
    </title>
    <link href="style.css" rel="stylesheet">
    <!-- <script src="cconvertor.js"></script> -->
    <script src="sample.js"></script>
    <!-- <link href="style2.css" rel="stylesheet"> -->
    <body>
        </div>
        <div class="top-bar">
            <h1 class="header">Currency Convertor</h1>
        </div>
        <div class="frosted">
            <form name="converter">
                <table border="0">
                <tr>
                <td>Australian Dollar: </td><td><input type="text" name="asd" onChange="asdConverter()" /></td>
                <td>Japanese Yen: </td><td><input type="text" name="yen" onChange="yenConverter()" /></td>
                <td>Swiss Franc:</td><td><input type="text" name="franc" onChange="francConverter()" /></td>
                </tr>
                <tr>
                <td>British Pound: </td><td><input type="text" name="pound" onChange="poundConverter()" /></td>
                <td>Indian Rupee: </td><td><input type="text" name="rupee" onChange="rupeeConverter()" /></td>
                <td>South Korean Won: </td><td><input type="text" name="won" onChange="skwConverter()" /></td>
                <tr>
                <td>Chinese Yuan: </td><td><input type="text" name="yuan" onChange="yuanConverter()" /></td>
                <td>Mexican Peso: </td><td><input type="text" name="peso" onChange="pesoConverter()" /></td>
                <td>Russian Ruble: </td><td><input type="text" name="ruble" onChange="rubleConverter()" /></td>
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
        </div>
    </body>
</html>
