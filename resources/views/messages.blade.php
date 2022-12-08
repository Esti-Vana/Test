<h1 style="text-align: left;">Messages From DB</h1>

<ul  style="background-color:F6F1F1;  ">

@foreach ($msgs as $msg)
    <li>
        <h3>{{$msg['message_title']}}</h3>
        <p>{{$msg['message_body']}}</p>
        <p>{{$msg['message_time']}} </p>
        <hr />
    </li>
@endforeach
</ul>