<html>
<head>
    <title>Web Reader</title>
    </head>
<body>
    <h1 class=bookname>{{ $book_name }}</h1>
    <h3 class=version>{{ $bible_version }}</h3>

@for($i = 1; $i <= $number_of_chapters; $i++)
<h3>
    <a href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
</h3>
@endfor

<h3>
    <a href="/all-chapters">Read All Chapters</a> 
</h3>

</body>
</html>