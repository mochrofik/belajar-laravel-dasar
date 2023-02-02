<html>
    <body>

    <form action="/form" method="POST" >

        <input type="text" name="name">
        <input type="submit" value="ok">
        <input type="hidden" name="_token" value="{{ csrf_token()}}">
    </form>
    </body>
</html>