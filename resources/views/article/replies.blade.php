@foreach ($comments as $comment)
<div class="d-flex flex-column px-3 pt-3 comments">
    <div class="d-inline-flex flex-row-reverse text-right">
        <div class="px-2" style="color:#FF2654">{{$comment->user->name ?? "deleted user"}}</div>
        <span>|</span>
        <div class="px-2" style="color:#999"><small> در {{ jdate($comment->created_at)->format('%d %B %Y') }}</small></div>
        <a href="" class="mr-auto" id="{{ $comment->id }}">Reply</a>
    </div>
    <div class="px-4">
        <p class="pt-2 my-0">{{$comment->body}}</p>
    </div>
    
    <div class="col-12">
        <form class="" method="post" action="{{ route('articlecomment.add' , ['article'=>$article->id]) }}">
            @csrf
            <div class="input-group mb-0">
                <input type="text" name="body" class="form-control form-control-sm">
                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                <input type="submit" class="btn btn-danger" value="Reply">
            </div>
        </form>
    </div>
        
    <hr class="row mx-1">
    @include('article.replies', ['comments' => $comment->children])
</div>
@endforeach
