<!DOCTYPE html>
<html lang="ru">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
   <title>Форма обратной связи</title>
</head>

<body>
   <form action="sandmail.php" method="POST">
      <select name="subject">
         <option disabled selected>Тема письма</option>
         <option value="1">Вопрос о продукте</option>
         <option value="2">Личный вопрос</option>
         <option value="3">Консультация</option>
         <option value="4">Благодарность</option>
         <option value="5">Жалоба</option>
      </select>
      <input type="email" name="email" placeholder="Ввидите ваш email" maxlength=50 required>
      <textarea name="message" placeholder="Ввидите сообщение" maxlength="150" required></textarea>
      <img src="capcha.jpg">
      <input type="number" name="capcha" placeholder="Ввидите ответ" maxlenght=3 required>
      <input type="submit" value="Отправить письмо">
   </form>
</body>

</html>