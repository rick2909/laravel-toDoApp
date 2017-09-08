<article class="task">
    <h2> {{ $task['title'] }} </h2>
    <p id="{{ $task['id'] }}" class="text"> {!! nl2br(e($task['description'])) !!} </p>
    <div class="btn">
        <form action="{{ $task['id'] }}" method="post">
            {{ csrf_field() }}
            {{ method_field("POST") }}
            <button type="submit" class="btn__change">Change</button>
        </form>
        <button onClick="readMore({{ $task['id'] }})" class="{{ $task['id'] }} btn__more">˅</button>
        <form action="{{ $task['id'] }}" method="post">
            {{ csrf_field() }}
            {{ method_field("DELETE") }}
            <button type="submit" class="btn__delete">Delete</button>
        </form>
    </div>
</article>