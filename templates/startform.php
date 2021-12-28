<!doctype html>
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Test Task</title>
    <meta name="description" content="Form where when You give name for file You receive data">
    <meta name="keywords" content="form data">
    <style>
        html, body {
            display: flex;
            justify-content: center;
            height: 100%;
        }
        body, div, h1, form, input, p, select {
            padding: 0;
            margin: 10px;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 16px;
            color: #666;
        }
        h1 {
            padding: 10px 0;
            font-size: 32px;
            font-weight: 300;
            text-align: center;
        }
        p {
            font-size: 12px;
        }
        hr {
            color: #a9a9a9;
            opacity: 0.3;
        }
        .main-block {
            max-width: 340px;
            min-height: 260px;
            padding: 10px 0;
            margin: auto;
            border-radius: 5px;
            border: solid 1px #ccc;
            box-shadow: 1px 2px 5px rgba(0,0,0,.31);
            background: #ebebeb;
        }
        form {
            margin: 0 30px;
        }
        input[type=file], select {
            width: calc(100% - 57px);
            height: 42px;
            margin: 13px 0 0 -5px;
            padding-left: 10px;
            border-radius: 0 5px 5px 0;
            border: solid 1px #cbc9c9;
            box-shadow: 1px 2px 5px rgba(0,0,0,.09);
            background: #fff;
        }
        .btn-block {
            margin-top: 10px;
            text-align: center;
        }
        button {
            width: 100%;
            padding: 10px 0;
            margin: 10px auto;
            border-radius: 5px;
            border: none;
            background: #1c87c9;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
        }
        button:hover {
            background: #26a9e0;
        }
    </style>
</head>
<body>
<div class="main-block">
    <h1>Data form</h1>
    <form action="/testTask/index.php/display-data" method="POST" enctype="multipart/form-data">
        <hr>
        <label for="filename"><i class="fas"></i></label>
        <input type="file" name="filename" id="filename" placeholder="File Name" required/>
        <hr>
        <div class="btn-block">
            <button type="submit" href="/">Submit</button>
        </div>
    </form>
</div>
</body>
</html>