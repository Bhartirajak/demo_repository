<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Track Your LT Application</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript">
        function validateSearchParam(search, mobNumber) {
            if (search.value.trim() != '' && mobNumber.value.trim() != '') {
                alert("Please Enter Only Application ID or Mobile No.");
                return false;
            } else if (search.value.trim() == '' && mobNumber.value.trim() == '') {
                alert("Please Enter Application ID or Mobile No.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<form action="trackLT.php" method="post" onsubmit="return validateSearchParam(this.search, this.mobNumber);">
    <table align="center" border="0" cellspacing="0">
        <tr>
            <td colspan="2" align="center">
                <h3>Track Your LT Application</h3>
            </td>
        </tr>
        <tr>
            <td align='center' style='vertical-align:text-top' width='200px'>
                <label for="search">Enter Application ID</label>
            </td>
            <td><input type="text" id="search" name="search"></td>
        </tr>
        <tr>
            <td align='center' style='vertical-align:text-top' width='200px'>
                <label for="mobNumber">Enter Mobile Number</label>
            </td>
            <td><input type="text" id="mobNumber" name="mobNumber"></td>
        </tr>
        <tr>
            <td align='center' style='vertical-align:text-top' width='200px'></td>
            <td>
                <br>
                <input type="submit" name="save" value="Submit" style="background-color: green; color: white;">
            </td>
        </tr>
    </table>
</form>
</body>
</html>
