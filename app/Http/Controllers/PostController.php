<?php
namespace App\Http\Controllers ;
use App\Post ;
use Illuminate\Http\Request ;
use App\Http\Requests ;
use Illuminate\Session\Store ;
class Po stContro ller extends Controller
{
public function getIndex ()
{
// e x p l i c i t l y asking D e p e n d e n c y I n j e c t o r
// to give new i n s t a n c e of Post
$post = resolve ( ’ App \ Post ’ );
$posts = $post - > getPosts ();
return view ( ’ blog . index ’ , [ ’ posts ’ = > $posts ]);
}
public function getAdminIndex ()
{
$post = resolve ( ’ App \ Post ’ );
$posts = $post - > getPosts ();
return view ( ’ admin . index ’ , [ ’ posts ’ = > $posts ]);
}
public function getPost ( $id )
{
$post = resolve ( ’ App \ Post ’ );
$post = $post - > getPost ( $id );
return view ( ’ blog . post ’ , [ ’ post ’ = > $post ]);
}
public function getA dminCre ate ()
{
return view ( ’ admin . create ’ );
}
public function getAdminEdit ( $id )
{
$post = resolve ( ’ App \ Post ’ );
$post = $post - > getPost ( $id );
return view ( ’ admin . edit ’ , [ ’ post ’ = > $post , ’ postId ’ = > $id ]);
}
public function po st Ad m in Cr ea t e ( Request $request )
{
$this - > validate ( $request , [
’ title ’ = > ’ required | min :5 ’ ,
’ content ’ = > ’ required | min :10 ’
]);
$post = resolve ( ’ App \ Post ’ );
$post - > addPost ( $request - > input ( ’ title ’) ,
$request - > input ( ’ content ’ ));
return redirect ()
-> route ( ’ admin . index ’)
-> with ( ’ info ’ , ’ Post created , Title is : ’ . $request - > input ( ’ title ’ ));
}
public function po st Ad m in Up da t e ( Request $request )
{
$this - > validate ( $request , [
’ title ’ = > ’ required | min :5 ’ ,
’ content ’ = > ’ required | min :10 ’
]);
$post = resolve ( ’ App \ Post ’ );
$post - > editPost ( $request - > input ( ’ id ’) ,
$request - > input ( ’ title ’) ,
$request - > input ( ’ content ’ ));
return redirect ()
-> route ( ’ admin . index ’)
-> with ( ’ info ’ , ’ Post edited , new Title is : ’ . $request - > input ( ’ title ’ ));
}
}