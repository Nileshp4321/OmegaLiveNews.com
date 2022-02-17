<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="ajax.css"/>
    <script src="ajax.js"></script>
    <title>Document</title>
</head>
<body>
    <div>
        <form action="ajax.php" method="GET">
    <h1>Select State</h1><br>
    <label>Name</label>
    <input type="text"/>
    <select onchange="fetchCities(this.value)" name="state">
        <option>Select</option>
        <option>Rajasthan</option>
        <option>Gujrat</option>
        <option>Uttar Pradesh</option>
    </select>
    <select id="ajax">
        <option>First select state</option>
    </select>
    <button type="submit">Submit</button>
</form>
</div>
</body>
</html>