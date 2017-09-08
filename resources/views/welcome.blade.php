<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <title>ToDo Items</title>
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body onLoad="removeButton()">
    <select name="language" id="language">
        <option value="english">english</option>
        <option value="dutch">dutch</option>
    </select>
        <div class="container">
            <section class="todo">
                <h1>Still todo</h1>
                @foreach($tasks as $task)
                    @if($task['done'] == 0)
                        @include("partials.task")
                    @endif
                @endforeach
            </section>
            <section class="done">
                <h1>Those are done</h1>
                @foreach($tasks as $task)
                    @if($task['done'] == 1)
                        @include("partials.task")
                    @endif
                @endforeach
            </section>
            <section class="newtask">
                <h1>Make new task</h1>
                <form action="" method="post">
                    {{ csrf_field() }}
                    <input type="text" name="title" class="title" placeholder="Title here" required>
                    <textarea name="description" class="textarea" required placeholder="Description here"></textarea>
                    <button class="button" type="submit">submit</button>
                </form>
            </section>
        </div>
        <script src="js/app.js"></script>
    </body>
</html>
