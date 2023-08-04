<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBS</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f1f1f1;
        margin: 0;
        padding: 0;
        background-image: url('cover.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }

    .alert-success{
        color:#0f5132;
        background-color:#d1e7dd;
        border-color:#badbcc
    }
    
    .container {
        max-width: 800px;
        margin: 100px auto;
        border-radius: 5px;
        padding: 20px;
        box-shadow: 10px 10px 10px 10px rgba(0, 0, 0, 1);
    }
    
    h1 {
        text-align: center;
        margin-bottom: 30px;
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    
    input {
        width: 90%;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }
    
    a {
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        text-align: center;
        background-color: #4CAF50;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        display: inline-flex;
    }
    
    a:hover {
        background-color: #45a049;
    }
    
</style>
<body>
    <div class="container">
        <h1 align="middle" style="color: rgb(42, 13, 6);">CMP 212 Semester Project</h1><br>
        <h3 align="middle">Click to register as any agency Below</h3>
        <br><br>
        <div align="middle">
            <a href="{{url('agency/frsc')}}">FRSC</a>
            <a href="{{url('agency/immigration')}}">IMMIGRATION</a>
            <a href="{{url('agency/nimc')}}">NIMC</a>
            <a href="{{url('agency/inec')}}">INEC</a>
        </div>
        <br><br>
        <h2 align="middle" style="color: rgb(42, 13, 6);">NBS Framework</h2>
    </div>
</body>
</html>
