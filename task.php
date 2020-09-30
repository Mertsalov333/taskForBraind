<?php
$articleText = "Sed ut perspiciatis unde omnis iste natus error
sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
 sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam,
  nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate 
  velit esse quam nihil molestiae consequatur, vel illum qui
dolorem eum fugiat quo voluptas nulla pariatur?";

$articleLink = "https://yandex.ru";

$shortText = substr($articleText, 0, 200);//обрезаем
$wordsArr = explode(" ", $shortText );//разбиваем на слова предлгоги по разделитилю (пробелу)
$wordsCount = count($wordsArr) - 1;// считаем количество слов предлогов со сдвигом на указатель

$endText = implode(' ', array_slice($wordsArr ,$wordsCount - 3, 3));
//получаем финальные 3 слова/огрызка слова/предлога

$wordsArr = array_slice($wordsArr, 0, $wordsCount - 3);
//избавляемся от 3 последних слов/огрызков слов/предлогов

$endText ="<a href='{$articleLink}'>{$endText}...</a>";//делаем ссылку из этих слов с добавлением ...

$wordsArr[] = $endText;// помещаем финальную фразу

print implode(' ', $wordsArr);//вывод

