<?php

$dom = new DOMDocument;

$links = array(array("link" => "https://noticias.r7.com/educacao/feed.xml"),
array("link" => "https://noticias.r7.com/saude/feed.xml") 
);

$noticias = $dom->load("https://noticias.r7.com/educacao/feed.xml");

var_dump($noticias);
exit();

for ($i = 0; $i<count($links); $i++){
    $dom->load($links[$i]['link']);

    foreach($noticias as $noticia) {
        echo $categoria = $dom->getElementsByTagName("title")->item(0)->nodeValue . "VEIO A CATEGORIA" ."<BR><BR>";
        echo $descricao = $noticia->getElementsByTagName("title")->item(0)->nodeValue . "VEIO A DESCRIÇÃO" . "<BR><BR>";
        echo $imagem = $noticia->getElementsByTagName("mediaurl")->item(0)->nodeValue . "VEIO A IMAGEM DA NOTICIA" . "<BR><BR>";
 
     }

}

?>

<?php
/*
$dom = new DOMDocument;

$links = array(array("link" => "http://rss.uol.com.br/feed/tecnologia.xml"),
array("link" => "http://rss.uol.com.br/feed/cinema.xml") 
);

$noticias = $dom->getElementsByTagName("channel");

for ($i = 0; $i<count($links); $i++){

    $url = $links[$i]['link'];
    $teste = html_entity_decode($url);
    html_entity_decode($dom->loadXML($url));
 

    foreach($noticias as $noticia) {
        echo $categoria = $dom->getElementsByTagName("title")->item(0)->nodeValue . "VEIO A CATEGORIA" ."<BR><BR>";
        echo $descricao = $noticia->getElementsByTagName("title")->item(0)->nodeValue . "VEIO A DESCRIÇÃO" . "<BR><BR>";
        echo $imagem = $noticia->getElementsByTagName("mediaurl")->item(0)->nodeValue . "VEIO A IMAGEM DA NOTICIA" . "<BR><BR>";
 
     }

}
*/
?>
