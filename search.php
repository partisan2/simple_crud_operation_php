<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Search</title>
</head>
<body>
    <form method="post" action="search_query.php">
        <table>
            <tr>
                <td><label>Student Number</label></td>
                <td><input type="text" name="search_text" placeholder="Search Field"></td>
                <td><input type="submit" value="Search" name="search"></td>
            </tr>
            <tr>
                <td><label>Show All Records</label></td>
                <td><input type="submit" value="Show Records" name="show_records"></td>
            </tr>
        </table>
    </form>
</body>
</html>