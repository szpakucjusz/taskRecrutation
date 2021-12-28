<!doctype html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Test Task</title>
    <meta name="description" content="Form where when You give name for file You receive data">
    <meta name="keywords" content="form data">

</head>
<body>
<div class="main-block">
    <a href="/testTask/index.php">Back to form</a>
    <?php
    foreach ($parsedFileData as $data) {
            print_r("<pre>");
            print_r($data);
            print_r("</pre>");
            print_r("\r\n");
    }
    ?>
</div>
</body>
</html>