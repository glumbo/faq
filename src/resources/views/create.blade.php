<h1>Create Faq</h1>
<a href="{{route('faqs.index')}}">Show Faqs</a>
<form action="{{route('faqs.store')}}" method="post">
@csrf
    <table>
        <tr>
            <td>Question</td>
            <td>:</td>
            <td><input type="text" required name="question" size="42" value="{{ old('question') }}"/></td>
        </tr>
        <tr>
            <td>Answer</td>
            <td>:</td>
            <td><textarea name="answer" required cols="40" rows="5">{{ old('answer') }}</textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">Create</button></td>
        </tr>
    </table>
</form>