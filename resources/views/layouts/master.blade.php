<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/master.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        @yield('head')
    </head>
    <body>
    <div class="header">
        <a href="#default" class="logo">Project Management</a>
        <div class="header-right">
        <a class="active"></a>
        <a href="/">Home</a>
        <a href="about">About</a>
        <a href="contact">Contact</a>
</div>
    </div>
    
<div>
    @yield('content')
</div>
    <div class="footer">
        <p> 2022 Finals | Mary Myra Bunag, Clark Salonga & Gabriel Salangsang Production </p>
    </div>
    </body>
</html>


