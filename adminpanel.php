
<!DOCTYPE html>
<html>
<head>
<title>Личный кабинет</title>
<meta charset="utf-8">
<link rel="stylesheet"  href="style2.css">
</head>
<body>
<div class="container">
  <h2>Личный кабинет</h2>
  <!-- <form action="index.php">
    <div class="vx">
    <button  type ="submit">Войти</button>
    </div>
    
  </form> -->

  <a href="https://clck.ru/36BRKe">Привязать карту</a>
  <form action="submit.php" method="post">
    <div class="form-group">
      <label for="video">Выберите видеофайл:</label>
      <input type="file" id="video" name="video">
    </div>
    <div class="form-group">
      <label for="transcription">Текстовый набор:</label>
      <textarea rows="40" cols="45" id="transcription" name="transcription" required></textarea>
    </div>
    <button type="submit">Отправить</button>
  </form>
</div>
</body>
</html>
