<!DOCTYPE html>
<html lang = "ru">
<head>
<meta charset = "utf-8">
<title>Расскажите немного о себе...</title>
<style>
.fontweight {
  font-weight: bold;
}
.ital1k {
  font-style: italic;
}
</style>
</head>
<body>

<form action = "get.php" method = "post">
<fieldset>
<legend class = "fontweight">
  Коротко о себе
</legend>
<label for = "last_name">
Фамилия:
<input id = "last_name" type = "text" name = "lastName" value = "" style = "width:235px" required>
</label>
<p></p>
<label for="first_name">
  Имя:
  <input id = "first_name" type = "text" name = "firstName" value = "" style = "width:235px" required>
</label>
<p></p>
<label for = "middle_name">
  Отчество:
<input id = "middle_name" type = "text" name = "middleName" value = "" style = "width:235px" required>
</label>
<p></p>
<label>
  Пол:
</label>
<input id = "Sex1" type = "radio" name = "sex" value = "man" required>
<label for = "Sex1">мужской</label>
<input id = "Sex2" type = "radio" name = "sex" value = "woman" required>
<label for = "Sex2">женский</label>
<p></p>
<label for = "age">
Возраст:
<input id = "age" type="number" name="age" value="" style = "width:40px" required>лет
</label>
</fieldset>
<br>
<fieldset>
<legend class = "fontweight">
Подробнее о себе
</legend>
<label></label>
<input id = "dob" type = "text" name = "dob" value = "" required>
<label for = "dob">Дата рождения</label>
<br>
<input id = "fam" type = "text" name = "fam" value = "" required>
<label for = "fam">Семейное положение</label>
<br>
<input id = "ob" type = "text" name = "ob" value = "" required>
<label for = "ob">Образование</label>
<br>
<input id = "ss" type = "text" name = "socialStatus" value = "" required>
<label for = "ss">Социальный статус</label>
<br>
<input id = "live" type = "text" name = "placeOfResidence" value = "" required>
<label for = "live">Местожительство</label>
<p class = "fontweight">Что вы обычно делаете на выходных:</p>
<input id = "sl" type = "checkbox" name = "activities" value = "Сплю">
<label for = "sl">Сплю</label>
<br>
<input id = "wwf" type = "checkbox" name = "activities" value = "Гуляю с друзьями">
<label for = "wwf">Гуляю с друзьями</label>
<br>
<input id = "gtf" type = "checkbox" name = "activities" value = "Хожу на рыбалку">
<label for = "gtf">Хожу на рыбалку</label>
<br>
<input id = "pg" type = "checkbox" name = "activities" value = "Играю в игры">
<label for = "pg">Играю в игры</label>
<br>
<input id = "pr" type = "checkbox" name = "activities" value = "Программирую">
<label for = "pr">Программирую</label>
<p class = "fontweight">Рассказать о формах в книге, посвященной HTML:</p>
<select name="sf">
<option value="Site frequency">Site frequency:</option>
<option value="Site frequency 2">Site frequency 2:</option>
<option value="Site frequency 3">Site frequency 3:</option>
<option value="Site frequency 4">Site frequency 4:</option>
<option value="Site frequency 5">Site frequency 5:</option>
</select>
<p class = "fontweight">Сколько книг вы прочитали за свою жизнь:</p>
<input id = "books0_10" type = "radio" name = "books" value = "0-10" required>
<label for = "books0_10">0-10</label>
<br>
<input id = "books11_20" type = "radio" name = "books" value = "11-20" required>
<label for = "books11_20">11-20</label>
<br>
<input id = "books21_50" type = "radio" name = "books" value = "21-50" required>
<label for = "books21_50">21-50</label>
<br>
<input id = "books50" type = "radio" name = "books" value = "50" required>
<label for = "books50">50+</label>
<p class = "fontweight">Ваши комментарии:</p>
<textarea id = "comments" name="comments" rows="12" cols="68"></textarea>
<p></p>
<select name = "Position">
<option value="Pos1">Первая позиция</option>
<option value="Pos2">Вторая позиция</option>
<option value="Pos3">Третья позиция</option>
</select>
</fieldset>
<p></p>
<fieldset>
<legend class = "fontweight">
  И в заключении
</legend>
<input type="text" name="already" value="" placeholder = "Это поле было введено до вас" style = "width:235px" readonly>
<p></p>
<label for = "email" class = "fontweight">Email:</label>
<input id = "email" type="email" name="email" value="" style = "width:235px" required>
<p class = "fontweight">Хотите подписаться на самую модную рассыллку спама?</p>
<p class = "ital1k">Выберите категории</p>
<input id = "bo" type = "checkbox" name = "spam" value = "Сломанное оборудование">
<label for = "bo">Сломанное оборудование</label>
<br>
<input id = "hcd" type = "checkbox" name = "spam" value = "Как приготовить плохие обеды">
<label for = "hcd">Как приготовить плохие обеды</label>
<br>
<input id = "m2" type = "checkbox" name = "spam" value = "НЕзаработай миллион за 2 дня!">
<label for = "m2">НЕзаработай миллион за 2 дня!</label>
<p></p>
<p class = "fontweight">На сколько сложная задача:</p>
<input id = "es" type = "radio" name = "compl" value = "Совсем нет" required>
<label for = "es">Совсем нет</label>
<br>
<input id = "sss" type = "radio" name = "compl" value = "Так себе" required>
<label for = "sss">Так себе</label>
<br>
<input id = "h" type = "radio" name = "compl" value = "Сложно" required>
<label for = "h">Сложно</label>
<br>
<input id = "vh" type = "radio" name = "compl" value = "Еле справился" required>
<label for = "vh">Еле справился</label>
</fieldset>
<br>
<button>Отправить</button>
</form>

</body>
</html>
