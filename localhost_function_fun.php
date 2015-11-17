<?php
/*ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);*/

//подключение к базе данных
function msc()
{
   $connect= mysqli_connect('localhost', 'root', '','test') or die("Не удалось подключиться к базе: ". mysqli_connect_errno());
    }
   
//получить список всех новостей
function newsAll()
{
    $query = mysqli_query('SELECT * FROM news ') or die("Запрос не выполнен: " . mysqli_error());
    echo $query;
}

//добавить новость в базу данных
function newsone()
{
mysqli_query('SELECT * FROM news WHERE id = "1" ');
    }

