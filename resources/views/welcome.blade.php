<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
      body {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(to bottom, #2980b9, #6dd5fa);
    background-repeat: no-repeat;
    background-size: cover;
}


.container {
    text-align: center;
}

h1 {
    font-size: 48px;
    color: white;
}

span {
    background: linear-gradient(to right, #4c3721, #ff00ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
.button {
    display: inline-block;
    padding: 12px 24px;
    margin-top: 20px;
    background-color: #3498db;
    color: white;
    font-size: 18px;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #2980b9;
}
    </style>
</head>
<body>
    <div class="container">
        <h1><span>Selamat</span><span>Datang</span></h1>
        <a href="{{ route('home') }}" class="button">Go to Biodata</a>
    </div>
</body>
</html>
