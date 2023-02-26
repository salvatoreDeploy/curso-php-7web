<?php

namespace cursophp7web\orientacaoobjetos\heranca;
class Posts
{
    private int $id;
    private int $likes;

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setLikes($likes)
    {
        $this->likes = $likes;
    }

    public function getLike()
    {
        return $this->likes;
    }
}

class Foto extends \Posts
{
    private $url;

    public function __construct($id)
    {
        $this->setId($id);
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getUrl()
    {
        return $this->url;
    }
}

$foto = new Foto(20);
$foto->setLikes(12);
$foto->setUrl('http://localhost/foto');

echo "Foto: #" . $foto->getId() . " - " . $foto->getLike() . " likes " . $foto->getUrl();