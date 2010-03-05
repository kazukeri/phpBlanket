<?php 

class itemView extends phpillowView
{// Index blog entries by their title, and list all comments
    protected $viewDefinitions = array(
        
        'all2' => 'function( doc )
{
    if ( doc.type == "blog_entry" )
    {
		emit( doc.title, {title: doc.title,text: doc.text, id:doc._id} );
    }
}',
    );
/* 
 
         emit( doc.title, doc._id );

        emit( [doc._id, 0], doc._id );

        if ( doc.comments )
        {
            for ( var i = 0; i < doc.comments.length; ++i )
            {
                emit( [doc._id, 1], doc.comments[i] );
            }
        }
 
 */
    protected function getViewName()
    {
        return 'blog_entries';
    }

}

?>