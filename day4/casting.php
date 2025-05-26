<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting Day 5</title>
</head>
<body>
    <h2>Casting</h2>
    <p>
        to change variables one datatype into another datatype which is caled Casting. <br>
        there are following types of Casting: <br>
    </p>
    <ul>
        <li>(string) convert datatype string</li>
        <li>(int) converts datatype integer.</li>
        <li>(float) converts datatype float.</li>
        <li>(bool) converts datatype boolean.</li>
        <li>(array) converts to datatype Array.</li>
        <li>(object) converts to datatype object.</li>
        <li>(unset) convert to datatype NUll.</li>
    </ul>
    <div>
        <h3>cast to string</h3>
        <?php
            $a= 5;
            $a= (string) $a;
            echo "(string) $a = ";
            var_dump($a); 
        ?>
        <h3>caste to integer</h3>
        <?php
            $b= '4.5';
            $b= (int)$b;
             echo "(int)$b = ";
             var_dump($b);
        ?>
        <p>like that..............</p>
    </div>
</body>
</html>