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
        <div>
            <label for="username"></label>
            <input class="form-field" type="text" name="username" id="username" placeholder="JhoneDOE" value="<?php if(isset($name)) echo $name;?>">
            <span class="error"> 
                <?php
                    if(isset($nameErr)) echo $nameErr;
                ?>
            </span>
        </div>
        <div>
            <label for="phone"></label>
            <input class="form-field" type="tel" name="phone" id="phone" placeholder="+212 65 095 5743" value="<?php if(isset($phone)) echo $phone;?>">
            <span class="error">
                <?php
                    if(isset($phoneErr)) echo $phoneErr;
                ?>
            </span>
        </div>
        <div>
            <label for="email"></label>
            <input class="form-field" type="email" name="email" id="email" placeholder="JhoneDOE@example.uk" value="<?php  if(isset($email)) echo $email; ?>">
            <span class="error">
                <?php
                    if(isset($emailErr)) echo $emailErr;
                ?>   
            </span>
        </div>
        <div class="btns">
            <input class="form-btn" type="submit" name="SendBTN" value="Send">
            <input class="form-btn" type="reset" name="clearBTN" value="clear">
        </div>
    </form>

    <a href="https://github.com/achrafLR" target="_blank" rel="noopener noreferrer"><img src="img/whats-app-1.png" alt="" class="whats"></a>

    <footer>
        <p>Developed by <a href="https://github.com/achrafLR" target="_blank" rel="noopener noreferrer">Ashraf LR</a></p>
        <p>?? <?php echo date("Y"); ?> Copyright.</p>
    </footer>
</body>

</html>