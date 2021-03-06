<?php 

class itemView extends phpillowView
{// Index blog entries by their title, and list all comments
    protected $viewDefinitions = array(
        
        'all2' => 'function( doc )
{
    if ( doc.type == "news_entry" )
    {
		emit( doc.date, {title: doc.title,text: doc.text, date:doc.date, id:doc._id, rev:doc._rev} );
    }
}',
        'single' => 'function( doc )
{
    if ( doc.type == "news_entry" )
    {
		emit( doc._id, {title: doc.title,text: doc.text, date:doc.date, id:doc._id, rev:doc._rev} );
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
        return 'news_entry';
    }

}

?>