@foreach ($post->comments as $comment) 
  <div class="mb-2 border-bottom">
    @if ($comment->user->id == Auth::user()->id)
      <a class="delete-comment" data-remote="true" rel="nofollow" data-method="delete" href="/comments/{{ $comment->id }}"></a>
    @endif
    <!--<span>-->
      <!--コメントした人の名前-->
    <!--  <strong>-->
    <!--    <a class="no-text-decoration black-color" href="/users/{{ $comment->user->id }}">{{ $comment->user->name }}</a>-->
    <!--  </strong>-->
    <!--</span>-->
    <span>{{ $comment->comment }}</span>
  </div>
@endforeach