<?php

/**
 * post.php
 *
 * Bu betik direk olarak erişilebilir. functions.php'de yaptığınız gibi bir
 * kontrol eklemenize gerek yok.
 *
 * > Dikkat: Bu dosya hem direk çalıştırılabilir hem de `posts.php` dosyasında
 * > 1+ kez içe aktarılmış olabilir.
 *
 * Bu betik dosyası içerisinde functions.php'de yer alan fonksiyonları da kullanarak
 * aşağıdaki işlemleri gerçekleştirmenizi bekliyoruz.
 *
 * - $id değişkeni yoksa "1" değeri ile tanımlanmalı, daha önceden bu değişken
 * tanımlanmışsa değeri değiştirilmemeli. (Kontrol etmek için `isset`
 * (https://www.php.net/manual/en/function.isset.php) kullanılabilir.)
 * - $id için yapılan işlemin aynısı $title ve $type için de yapılmalı. (İstediğiniz
 * değerleri verebilirsiniz)
 * - Bir sonraki adımda ilgili içerik gösterilmeden önce bir div oluşturulmalı ve
 * bu div $type değerine göre arkaplan rengi almalıdır. (urgent=kırmızı,
 * warning=sarı, normal=arkaplan yok)
 * - `getPostDetails` fonksiyonu tetiklenerek ilgili içeriğin çıktısı gösterilmeli.
 */

require_once 'functions.php';

//$id değişkeni yoksa "1" değeri tanımlandı.
if(!isset($id))  
{
    $id=1;
}
//$title değişkeni yoksa değer tanımlandı.
if(!isset($value["title"]))
{
    $title="Test Yazısı";
}
else
{
    $title=$value["title"];
}
//$type değişkeni yoksa değer tanımlandı.
if(!isset($value["type"]))
{
    $type="normal";
}
else
{
    $type=$value["type"];
}
//$type değişkenine göre renk kararı bölümü
if($type=="warning")
{
    $bgcolor="background-color:yellow;";
}
elseif($type=="urgent")
{
    $bgcolor="background-color:red;";
}
elseif($type=="normal")
{
    $bgcolor="background-color:default;";
}

// getPostDetails fonksiyonu ile içeriğin ekrana bastırılması
echo "<div style='".$bgcolor. "'>";
getPostDetails($id,$title);
echo "</div>";