<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Upload Download website</title>
</head>
<body>
    <form action="download.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile"><br><br>
        <input type="submit" name="upload" value="Upload File">
    </form>
</body>
</html>