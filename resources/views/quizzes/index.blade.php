<h1>Quizzes</h1>
<ul>
    @foreach($quizzes as $quiz)
        <li><a href="{{route('quizzes.show', $quiz->id)}}">{{$quiz->title}}</a></li>
    @endforeach
</ul>
