<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get PHP</title>
    <link rel="stylesheet" href="../KalaydaVadim_HW14/get.css">
</head>
<body>
    <?php
        $last_name = $_REQUEST['lastName'];
        $first_name = $_REQUEST['firstName'];
        $middle_name = $_REQUEST['middleName'];
        $sex = $_REQUEST['sex'];
    
        if ($sex == 'man') {
            $choose_sex = 'Мужской';
        } elseif ($sex == 'woman') {
            $choose_sex = 'Женский';
        }
        
        $age = $_REQUEST['age'];
        $date_of_birth = $_REQUEST['dob'];
        $fam = $_REQUEST['fam'];
        $obrazovanie = $_REQUEST['ob'];
        $soc_status = $_REQUEST['socialStatus'];
        $place_of_residence = $_REQUEST['placeOfResidence'];
    
        $activities = $_REQUEST['activities'];
    
        $frequency = $_REQUEST['sf'];
        $books = $_REQUEST['books'];
        $comments = $_REQUEST['comments'];
        $email = $_REQUEST['email'];
    
        $spam = $_REQUEST['spam'];
    
        $complexety = $_REQUEST['compl'];
    
        //MYSQL
    
        $mysqlcon = mysqli_connect('localhost', 'root', '', 'mysitedatabase');
        $mysqlcon->set_charset("utf8");
        $last_name = mysqli_real_escape_string($mysqlcon, $last_name);
        $first_name = mysqli_real_escape_string($mysqlcon, $first_name);
        $middle_name = mysqli_real_escape_string($mysqlcon, $middle_name);
        $sex = mysqli_real_escape_string($mysqlcon, $sex);
        $age = mysqli_real_escape_string($mysqlcon, $age);
        $date_of_birth = mysqli_real_escape_string($mysqlcon, $date_of_birth);
        $fam = mysqli_real_escape_string($mysqlcon, $fam);
        $obrazovanie = mysqli_real_escape_string($mysqlcon, $obrazovanie);
        $soc_status = mysqli_real_escape_string($mysqlcon, $soc_status);
        $place_of_residence = mysqli_real_escape_string($mysqlcon, $place_of_residence);
        $activities = mysqli_real_escape_string($mysqlcon, $activities);
        $frequency = mysqli_real_escape_string($mysqlcon, $frequency);
        $books = mysqli_real_escape_string($mysqlcon, $books);
        $comments = mysqli_real_escape_string($mysqlcon, $comments);
        $email = mysqli_real_escape_string($mysqlcon, $email);
        $spam = mysqli_real_escape_string($mysqlcon, $spam);
        $complexety = mysqli_real_escape_string($mysqlcon, $complexety);
    
        $mysql = "INSERT INTO form (lastname, firstname, middlename, Sex, age, date_of_birth, family_status, education, soc_status, place_of_residence, activities, frequency, books, comments, email, spam, complexety)"." VALUES ('$last_name', '$first_name', '$middle_name', '$sex', '$age', '$date_of_birth', '$fam', '$obrazovanie', '$soc_status', '$place_of_residence', '$activities', '$frequency', '$books', '$comments', '$email', '$spam', '$complexety');";
    
        $res = $mysqlcon->query($mysql);
        if ($res) {
            echo "";
        } else {
            echo "Произошла ошибка".$mysqlcon->error;
        }
    ?>
    
   <h1>Спасибо за заполненную форму!</h1>
    <h2>Ваши ответы:</h2>
    
    <ul class="submit-form">
        <li>
            <p>Ваше имя:</p>
            <?php echo $last_name.' '.$first_name.' '.$middle_name; ?>
        </li>
        <hr>
        <li>
            <p>Ваш пол:</p>
            <?php echo $choose_sex; ?>
        </li>
        <hr>
        <li>
            <p>Ваш возраст:</p>
            <?php echo $age; ?>
        </li>
        <hr>
        <li>
            <p>Ваша дата рождения:</p>
            <?php echo $date_of_birth; ?>
        </li>
        <hr>
        <li>
            <p>Ваше семейное положение:</p>
            <?php echo $fam; ?>
        </li>
        <hr>
        <li>
            <p>Ваше образование:</p>
            <?php echo $obrazovanie; ?>
        </li>
        <hr>
        <li>
            <p>Ваш социальный статус:</p>
            <?php echo $soc_status; ?>
        </li>
        <hr>
        <li>
            <p>Ваше место жительства:</p>
            <?php echo $place_of_residence; ?>
        </li>
        <hr>
        <li>
            <p>Чем вы обычно занимаетесь на выходных:</p>
            <?php echo $activities; ?>
        </li>
        <hr>
        <li>
            <p>Какой Site frequency вы выбрали:</p>
            <?php echo $frequency; ?>
        </li>
        <hr>
        <li>
            <p>Вы прочитали <?php echo $books; ?> книг.</p>
        </li>
        <hr>
        <li>
            <p>Ваши комментарии:</p>
            <textarea name="comments" class="comments" rows="12" cols="68" readonly>
                <?php echo $comments; ?>
            </textarea>
        </li>
        <hr>
        <li>
            <p>Ваш email:</p>
            <?php echo $email; ?>
        </li>
        <hr>
        <li>
            <p>На какую категорию спама вы подписались: </p>
            <?php echo $spam; ?>
        </li>
        <hr>
        <li>
            <p>На сколько сложная задача:</p>
            <?php echo $complexety; ?>
        </li>
    </ul>
</body>
</html>