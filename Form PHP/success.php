<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form with PHP JS</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!--Design-->
    <img src="img/bg.png" class="bg-design">
    <svg class="blobmaker" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path fill="#24A148" d="M56.9,-18.9C65.2,7.1,57.5,37.8,38.6,51C19.7,64.2,-10.4,60,-31.6,44.3C-52.8,28.7,-65.1,1.8,-58.4,-22C-51.6,-45.8,-25.8,-66.4,-0.8,-66.2C24.3,-65.9,48.6,-44.8,56.9,-18.9Z" transform="translate(100 100)" />
    </svg>
    <svg class="blobmaker1" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
        <path fill="#008F4A" d="M56.9,-18.9C65.2,7.1,57.5,37.8,38.6,51C19.7,64.2,-10.4,60,-31.6,44.3C-52.8,28.7,-65.1,1.8,-58.4,-22C-51.6,-45.8,-25.8,-66.4,-0.8,-66.2C24.3,-65.9,48.6,-44.8,56.9,-18.9Z" transform="translate(100 100)" />
    </svg>


    <!--form-->
    <form method="POST" action="result.php">
            <p style="color: #fff;
    font-size: 2.4rem;
    text-shadow: 3px 2px 3px #f1f1f1;"> Hello <?= $name ?> </p>
    </form>


    <footer>
        <p>Developed by Ashraf LR</p>
        <p>© <?php echo date("Y"); ?> Copyright.</p>
    </footer>
</body>

</html>