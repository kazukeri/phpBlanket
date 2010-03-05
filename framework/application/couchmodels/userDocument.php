<?php 
class userDocument extends phpillowDocument
{
    protected static $type = 'user';

    protected $requiredProperties = array(
        'title',
        'text',
    );

    public function __construct()
    {
        $this->properties = array(
            'login'     => new phpillowStringValidator(),
            'password'      => new phpillowStringValidator(),

        );

        parent::__construct();
    }

    protected function generateId()
    {
        return $this->stringToId( $this->storage->title );
    }

    protected function getType()
    {
        return self::$type;
    }
}
?>