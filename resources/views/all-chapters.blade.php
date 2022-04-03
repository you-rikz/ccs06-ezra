<html>
<head>
    <title>Web Reader</title>
    </head>
<body>
    <h1 class=bookname>{{ $book_name }}</h1>
    <h3 class=version>{{ $bible_version }}</h3>

@for($i = 1; $i <= $number_of_chapters; $i++)
<h3>Chapter {{ $i }}</h3>
<pre class=textstyle>
@include("chapter{$i}")
</pre>
@endfor


</body>
</html>