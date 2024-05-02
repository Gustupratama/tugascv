<?

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="style.css">
<body>
    <div class="container">
        <div class="cv-side">
            <div class="identitas">
                 <h1 class="title">IDA BAGUS PUTU MEISA PRATAMA PUTRA</h1>
                <?php
            
                $name = "ida bagus putu meisa pratama putra";
                $email = "gustupratama123@gmail.com";
                $phone = "085-792-795-516";
                $address = "Penyabangan";
                
                echo "<h2>Personal Information</h2>";
                echo "<p><strong>Name:</strong> $name</p>";
                echo "<p><strong>Email:</strong> $email</p>";
                echo "<p><strong>Phone:</strong> $phone</p>";
                echo "<p><strong>Address:</strong> $address</p>";
                
                echo "<h2>Education</h2>";
                echo "<ul>";
                echo "<li>SD 1 PENYABANGAN</li>";
                echo "<li>SMP N 4 GEROKGAK</li>";
                echo "<li>SMA N 1 GEROKGAK</li>";
                echo "<li>INSTIKI</li>";
                echo "</ul>";
        
                echo "<h2>Experience</h2>";
                echo "<ul>";
                echo "<li>Freelancer Editor, 2020-2022</li>";
                echo "<li>Penjoki Game, 2019-2021</li>";
                echo "</ul>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
