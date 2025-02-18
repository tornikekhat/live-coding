<h1>{{$quiz->title}}</h1>

<form action="{{route('quiz-results.store', $quiz->id)}}" method="POST">
    @csrf

    <input type="email" name="email" placeholder="Enter email" required>

    @foreach($quiz->questions as $question)
        <h3>{{ $question->question_text }}</h3>

        @foreach($question->answers as $answer)
            <label>
                <input type="checkbox" name="answers[{{ $question->id }}][]" value="{{$answer->id}}">
                {{$answer->answer_text}}
            </label>
        @endforeach
    @endforeach

    <br>
    <button type="submit">Submit</button>
</form>
