<?php 
class itemDocument extends phpillowDocument
{
    protected static $type = 'news_entry';

    protected $requiredProperties = array(
        'title',
        'text',
    );

    public function __construct()
    {
        $this->properties = array(
        	'_id'     => new phpillowStringValidator(),      
            'title'     => new phpillowStringValidator(),
            'text'      => new phpillowTextValidator(),
        	'date'      => new phpillowTextValidator(),
            'comments'  => new phpillowDocumentArrayValidator(
                'myNewsComments'
            ),
        );

        parent::__construct();
    }

    protected function generateId()
    {
        //return $this->stringToId( $this->storage->title );
        return null;
    }

    protected function getType()
    {
        return self::$type;
    }
}
?>