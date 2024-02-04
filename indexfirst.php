<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <title>Document</title>
</head>
<body>
    <div class="first">
        <div class="second">
            <h2>Calculator</h2>
            <form action="handleRequest.php" method="POST">
                <div class="mr "><input type="text" name="no_one" id="" class="" placeholder="Number_One"></div>
                <div class="mr "><input type="text" name="no_two" id="" placeholder="Number_Two"></div>
                <div class="mr">Select Math Operation
                    <select name="options">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
            </select>
        </div>
        <div class="mr"><button type="submit" class="btn btn-primary">Calculate</button></div>
    </form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>