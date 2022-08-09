<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CommentsRequest;
use App\Models\Comments;
class CommentsController extends Controller
{
    public function comment(CommentsRequest $req) {
      $comment = new Comments();
      $comment -> name = $req -> input('name');
      $comment -> comment = $req -> input('textarea');
      $comment -> save();
      return redirect()->route('comments');
    }
    public function getcomment() {
      return view('content/comments', ['comments' =>Comments::all()]);
    }
    public function deleteComment($id){
      Comments::find($id)->delete();
      return redirect()->route('comments');
    }
}
