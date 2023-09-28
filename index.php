<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: 'orange',
                    },
                    fontFamily: {
                        'primary': ['Poppins', 'sans-serif']
                    }
                }
            }
        }
    </script>
    <script src="login.js" type="text/javascript" defer></script>
</head>

<body>
    <div class="font-primary ">
        <?php require "login.php" ?>
    </div>
</body>

</html>