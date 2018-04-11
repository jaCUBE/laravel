<form method="post" action="/posts/{{ $post->id }}/comments">
    @csrf
    <label for="body">Comment Text:</label>
    <textarea class="form-control" name="body" id="body" required></textarea>

    <input type="submit" class="btn btn-primary" value="Post a comment" />
</form>

@include('layouts.errors')