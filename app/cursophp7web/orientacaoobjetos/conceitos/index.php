<?php

namespace cursophp7web\orientacaoobjetos\conceitosOO;
class Post
{
    public int $likes = 0;
    public array $comment = [];
    public string $author;

    private string $title;

    public function __construct(string $author = '')
    {
        $this->author = $author;
    }

    public function aumentarLike()
    {
        $this->likes++;
    }

    public function setTitle($title)
    {
        if (strlen($title) > 2) {
            $this->title = ucfirst($title);
        }
    }

    public function getTitle()
    {
        return $this->title ?? 'Sem titulo';
    }
}

$post = new Post('Henrique');
$post->likes = 0;
$post->aumentarLike();
$post->setTitle('node');

$post2 = new Post('Jneiffer');
$post2->comment = ["Estou lindo"];


echo "Post: " . $post->likes . " Autor: " . $post->author . " Titulo: " . $post->getTitle() . "</br>";
echo "Post: " . $post2->likes . " e" . " comentatios: " . $post2->comment[0] . " Autor: " . $post2->author . " Titulo: " . $post2->getTitle() . "</br>";
