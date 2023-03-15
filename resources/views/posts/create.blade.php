<html>
    <head>

    </head>

    <body>
        <form action="{{route('posts.store')}}" method="POST" >
            @csrf
            <input type="text" name="title" placeholder="enter title"><br>
            <input type="text" name="body" placeholder="enter body"><br>
            <button type="submit">submit</button>
        </form>
    </body>
</html>