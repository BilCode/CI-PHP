<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$page_title?></title>
</head>
<body>
    <?php foreach( (array) $result as $row):?>
    <h3><?=$row->title?></h3>
    <p><?=$row->text?></p>
    <br />
    <?php endforeach;?>
</body>
</html>