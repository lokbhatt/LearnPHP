<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 1 PHP session</title>
</head>
<style>
    .box {
        background-color: aqua;
        font-family: 'Times New Roman', Times, serif;
        font-size: 16px;
        color: black;
        text-align: justify;
        width: 800px;
    }
</style>

<body>
    <div class="box">
        <?php
        echo "Now starting PHP introduction from beginning.<br> this is my first session sense 2025/5/8";
        echo "PHP is server scripting language used to create dynamic and interactive web pages.<br>";
        echo "Like microsoft's ASP widely used and free.<br>";
        echo "Now break the sentense web page and websites:<br>";
        echo "Webpage: A single documentation on the internet, typically wtitten in html and accessable via unique URL.<br>
                Think like sigle page of bbok.<br";
        echo "Website: is a collection of webpages grouped under single domain name.<br>";
        echo "Website are two types:<br>
                1. static: means fixed or doesn't change any content instead developer code manually.<br>
                2. dynamic: means capable of action or change. content generated in real time and display <br>
                different content using same sources of code."
        ?>
    </div>
    <div>
        <h2>What can do PHP?</h2>
        <p>
            <?php
            echo "PHP can generate dynamic web page.<br>";
            echo "PHP can create read open write delete and close the file.<br>";
            echo "PHP collect form data.<br>";
            echo "PHP send and receive cookies.<br>";
            echo "PHP can used to control user access.<br>";
            echo "PHP can encrypt data.";
            ?>
        </p>
    </div>
</body>

</html>