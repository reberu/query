<!DOCTYPE html>
<html>
 <head>
   <title>Электронная очередь</title>
   <link href="style.css" rel="stylesheet">
 </head>
 <body>

   <div class="block" style="height: 600px;">    
    <div class="centered">
     <h1 align="center">Выберите услугу</h1> 
	 <form method="POST" action="">
		<input name="its" type="text" placeholder="Интехстрой"/>
		<input type=submit value="Отправить"/>
	 </form>
    </div>
   </div>
   
   <?php
   // Переменные с формы
   if(isset($_POST['its']))
   $its = $_POST['its'];
   //$mk = $_POST['mk'];
   
   // Параметры для подключения
   $db_host = "localhost";
   $db_user = "root";
   $db_password = "";
   $db_name = "ochered";
   $db_table = "queryID";
   
   // Подключение к базе данных
   $db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение");
   
   // Выборка базы
   mysql_select_db("ochered",$db);
   
   // Установка кодировки соединения
   //mysql_query("SET NAMES 'utf8'",$db);
   
   $result = mysql_query ("INSERT INTO ochered.".$db_table." (id,kod) VALUES (1,123)");
   ?>
 </body>
</html>
