<?php
// Код PHP для обработки формы и создания проекта
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$projectName = $_POST['project-name'];
	$projectDescription = $_POST['project-description'];

	// Код для создания проекта в базе данных или файловой системе
	// ...

	// Перенаправление пользователя на страницу с информацией о созданном проекте
	header('Location: project.php?id=123');
	exit;
}
?>