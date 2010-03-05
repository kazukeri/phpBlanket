<?php 

class userView extends phpillowView
{
    protected $viewDefinitions = array(
        
        'all' => 'function( doc )
{
    if ( doc.type == "user" )
    {
		emit( doc._id, {login: doc.login,password: doc.password, id:doc._id} );
    }
}',
        'login' => 'function( doc )
{
    if ( doc.type == "user" )
    {
		emit( [doc.login,doc.password], {login: doc.login,password: doc.password, id:doc._id} );
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
        return 'user';
    }

}

?>