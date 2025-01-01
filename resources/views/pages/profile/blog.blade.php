<div>
    <h1>blog page </h1>

    <ul>
        <li><a href="{{route('blog')}}"> blog page </a></li>
        <li><a href="{{route('team')}}"> team page </a></li>
        <li><a href="{{route('contact')}}"> contact page </a></li>
        <li><a href="{{route('news')}}"> news page </a></li>
    </ul>
</div>

<div>


    @foreach($userdata as $data)
        <h2> User Id : {{$data->id}} </h2> 
        <h2> User Name : {{$data->name}} </h2> 
        <h2> User Email : {{$data->email}} </h2> 
    @endforeach

    



</div>