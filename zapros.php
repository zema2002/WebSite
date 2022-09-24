<?php 
$strt="Имя: ".$_POST["name"]."";
$str="Фамилия: ".$_POST["lastname"]."";
echo $strt."<br/> ". $str;
echo "<br/>";
echo"Любимый сезон:";
if (!$_POST['browser'])
            {
               echo 'Пользователь не выбрал ни одну из радиокнопок';
               echo "<br/>";
            }
            else if ($_POST['browser']==1)
            {
               echo 'Выбран 1 сезон';
               echo "<br/>";
            }
            else if ($_POST['browser']==2)
            {
               echo 'Выбран 2 сезон';
               echo "<br/>";
            }
            else if ($_POST['browser']==3)
            {
               echo 'Выбран 3 сезон';
               echo "<br/>";
            }
            else  if ($_POST['browser']==4)
            {
               echo 'Выбран 4 сезон';
               echo "<br/>";
            }
            else if ($_POST['browser']==5)
            {
               echo 'Выбран 5 сезон';
               echo "<br/>";
            }
            else if ($_POST['browser']==6)
            {
               echo 'Не нравится сериал!';
               echo "<br/>";
            }


echo "Какой любимый актер?:";
            if (!$_POST['actor'])
            {
               echo 'Пользователь не выбрал ни один вариант';
               echo "<br/>";
            }
            else if ($_POST['actor']==1)
            {
               echo 'Густаф Скарсгард /Floki';
               echo "<br/>";
            }
            else if ($_POST['actor']==2)
            {
               echo 'Кэтрин Уинник/Lagertha';
               echo "<br/>";
            }
            else if ($_POST['actor']==3)
            {
               echo 'Александр Людвиг/Bjorn Lothbrok';
               echo "<br/>";
            }
            else  if ($_POST['actor']==4)
            {
               echo 'Трэвис Фиммел/Ragnar Lothbrok';
               echo "<br/>";
            }
            else if ($_POST['actor']==5)
            {
               echo 'Клайв Стэнден/Rollo';
               echo "<br/>";
            }
            
            else if ($_POST['actor']==6)
            {
               echo 'Джорджия Херст /Torvi';
               echo "<br/>";
            }
            
            else if ($_POST['actor']==7)
            {
               echo 'Алекс Хег Андерсен/Ivar';
               echo "<br/>";
            }

echo "Ждете новый сезон?:";
            if (!$_POST['quest'])
            {
               echo 'Пользователь не выбрал ни одну из радиокнопок';
               echo "<br/>";
            }
            else if ($_POST['quest']==1)
            {
               echo 'Вариант ДА';
               echo "<br/>";
            }
            else if ($_POST['quest']==2)
            {
               echo 'Вариант НЕТ';
               echo "<br/>";
            }

            $comment="Комментарий: ".$_POST["comment"]."";
            echo $comment;

?>