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
   $db_user = "id459119_its";
   $db_password = "3teexQnEW*LhL12#E3OM";
   $db_name = "id459119_ochered";
   $db_table = "queryID";
   
   // Подключение к базе данных
   try {
		$conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		echo "Connected successfully";
		} catch(PDOException $e) {
		echo "Connection failed: ". $e->getMessage();
		}
	//	$db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Не могу создать соединение");
   
   // Выборка базы
   //mysql_select_db("id459119_ochered",$db);
   
   // Установка кодировки соединения
   //mysql_query("SET NAMES 'utf8'",$db);
   
   $query = 'INSERT INTO id459119_ochered.queryID (kod) VALUES (123)';
   $result = $conn->query($query);
   print_r($result);
   $conn = NULL;

   ?>
 </body>
</html>
