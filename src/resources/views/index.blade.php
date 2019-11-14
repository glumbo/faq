<h1>Faqs</h1>
<a href="{{route('faqs.create')}}">Add New</a>
@if(isset($faqs) && $faqs->count()>0)
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Question</th>
            <th>Answer</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    
        @foreach($faqs as $key=>$faq)
            <tr>
                <td>{{$faq->id}}</td>
                <td>{{$faq->question}}</td>
                <td>{{$faq->answer}}</td>
                <td><a href="{{route('faqs.edit',['faq'=>$faq->id])}}">edit</a></td>
                <td><a href="{{route('faqs.delete',['faq'=>$faq->id])}}">delete</a></td>
            </tr>
        @endforeach
    
    </tbody>
</table>
@else
    <p>No Faqs to List</p>
@endif