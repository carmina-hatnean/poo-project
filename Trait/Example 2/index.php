<?php
trait SharableTrait
{
    public function share()
    {
       // echo "It is shared!".PHP_EOL;
        echo self::class . " Shared with ID" . $this->id . PHP_EOL;
    }
}
class Post
{
    public $id=1;
    use SharableTrait;
}

class Photo
{
    public $id=1;
    use SharableTrait;
}

class Comment
{
    public $id=1;
    use SharableTrait;
}

$a= new Post();
$a->share();

$b= new Photo();
$b->share();

$c= new Comment();
$c->share();