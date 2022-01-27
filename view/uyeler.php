<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     Üyeler sayfası !

     <form action="" method= "post">
        <input type="text" name="username" placeholder= "Üyelerde arayın..">
        <button type="submit" >  GÖNDER  </button>
     </form>

    <ul>
            <?php foreach ($users as $user): ?>
                <li>
                    <?= $user['name'] ?>
                </li>
             <?php endforeach ?>
    </ul>


</body>
</html>