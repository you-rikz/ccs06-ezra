<html>
    <head>
    <title>Web Reader</title>

    </head>
<body>
    <h1 class=bookname>{{ $book_name }}</h1>
    <h3 class=bookversion>{{ $bible_version }}</h3>

@for($i = 1; $i <= $number_of_chapters; $i++)
<h3>
    <a href="/chapter/{{ $i }}">Chapter {{ $i }}</a>
</h3>
@endfor

<hr>
<pre class=textstyle>
@include("chapter" . $chapter_number)
</pre>
</body>

</html>