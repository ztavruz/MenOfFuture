<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo $this->libsCss();?>
    <?php echo $this->fileCss();?>
    <title>Document</title>
</head>
<body>
    
    <?php echo $page;?>

    <?php echo $this->libsJs();?>
    <?php echo $this->fileJs();?>
</body>
</html>