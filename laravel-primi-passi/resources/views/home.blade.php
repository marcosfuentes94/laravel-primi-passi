<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello World!</title>
</head>
<style>
    h1 {
  font-family: 'Helvetica Neue', sans-serif;
  font-size: 36px;
  font-weight: bold;
  color: #333;
  text-transform: uppercase;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  background: linear-gradient(45deg, #ff6b6b, #ffb88c);
  -webkit-background-clip: text;
  background-clip: text;
  display: inline-block;
  padding: 10px 20px;
  border: 2px solid #333;
  border-radius: 10px;
  box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
  transition: all 0.3s ease-in-out;
  cursor: pointer;
}

h1:hover {
  transform: scale(1.1);
  background: linear-gradient(45deg, #ff6b6b, #ffb88c);
  color: #fff;
}
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; 
    margin: 0;
    background-image: linear-gradient(135deg, #ff6b6b, #ffb88c, #f3d977, #4bd2d6, #57a8e9);
    background-size: 150% 150%;
    animation: gradient 10s linear infinite;
}
header {
    text-align: center;
    background-color: #333;
    padding: 10px 0;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 100;
    font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.menu {
    list-style: none;
    padding: 0;
    margin: 0;
    display: inline-block;
}

.menu-item {
    display: inline-block;
    margin: 0 15px;
}

.menu-link {
    text-decoration: none;
    color: #fff;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s ease-in-out;
}

.menu-link:hover {
    background-color: #555;
}


@keyframes gradient {
    0% {
        background-position: 0% 50%;
    }
    100% {
        background-position: 100% 50%;
    }
}
</style>
<body>
    <h1>
        Hello World!
    </h1>

    <header>
        <nav>
            <ul class="menu">
                <li class="menu-item"><a class="menu-link" href="/">Home</a></li>
                <li class="menu-item"><a class="menu-link" href="/about">About</a></li>
                <li class="menu-item"><a class="menu-link" href="/contact">Contacts</a></li>
            </ul>
        </nav>
    </header>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>