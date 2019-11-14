<h1>Edit Faq</h1>
<a href="{{route('faqs.index')}}">Show Faqs</a>
<form action="{{route('faqs.update',['faq'=>$faq->id])}}" method="post">
@csrf
    <table>
        <tr>
            <td>Question</td>
            <td>:</td>
            <td><input type="text" required name="question" size="42" value="{{ old('question')??isset($faq->question)?$faq->question:'' }}"/></td>
        </tr>
        <tr>
            <td>Answer</td>
            <td>:</td>
            <td><textarea name="answer" required cols="40" rows="5">{{ old('answer')??isset($faq->answer)?$faq->answer:'' }}</textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">Update</button></td>
        </tr>
    </table>
</form>