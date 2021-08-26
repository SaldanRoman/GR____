
<meta charset="utf-8"> 
<?php
$urok="Урок 22";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['name']))			{$name			= $_POST['name'];		if ($name == '')	{unset($name);}}
if (isset($_POST['phone']))			{$name			= $_POST['phone'];		if ($phone == '')	{unset($phone);}}
if (isset($_POST['email']))		{$email		= $_POST['email'];		if ($email == '')	{unset($email);}}
if (isset($_POST['text']))			{$text			= $_POST['text'];		if ($text == '')	{unset($text);}}
if (isset($_POST['sab']))			{$submit			= $_POST['sab'];		if ($submit == '')		{unset($submit);}}
//стирание треугольных скобок из полей формы
/* комментарий */
if (isset($name) ) {
$name=stripslashes($name);
$name=htmlspecialchars($name);
}
if (isset($phone) ) {
$phone=stripslashes($phone);
$phone=htmlspecialchars($phone);
}
if (isset($email) ) {
$email=stripslashes($email);
$email=htmlspecialchars($email);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
// адрес почты куда придет письмо
$address="saldanroman@gmail.com";
// текст письма 
$note_text="Theme : $urok \r\nName : $name \r\n Phone : $phone \r\n Email : $email \r\n message : $text";

if (isset($name)  &&  isset ($submit) ) {
mail($address,$urok,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
    
echo "<p style='color:green;'>Уважаемый(ая) <b style='color:red;'>$name</b> Ваше письмо отправленно успешно. <br> Спасибо. <br>Вам скоро ответят на почту <b style='color:red;'> $email</b>.</p>";
}

?>
