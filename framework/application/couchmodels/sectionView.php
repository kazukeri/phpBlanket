<?php 

class sectionView extends phpillowView
{
    protected $viewDefinitions = array(
        
        'all2' => 'function( doc )
{
    if ( doc.type == "section_entry" )
    {
		emit( doc.date, {title: doc.title,text: doc.text, id:doc._id, date:doc.date, rev:doc._rev} );
    }
}',
        'single' => 'function( doc )
{
    if ( doc.type == "section_entry" )
    {
		emit( doc._id, {title: doc.title,text: doc.text, id:doc._id, date:doc.date, rev:doc._rev} );
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
        return 'section_entry';
    }

}

?>