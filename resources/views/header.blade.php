<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("titre")</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li>PAGE 1</li>
                <li>PAGE 2</li>
                <li>PAGE 3</li>
            </ul>
        </nav>
    </header>

    <section>
        @yield("content")
    </section>
</body>

</html>