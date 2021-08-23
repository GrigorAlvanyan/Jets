<p>New Contact</p>
@if(isset($contact))

    <ul>
        <li>name: <strong>{{$contact->name}}</strong></li>
        <li>email: <strong>{{$contact->email}}</strong></li>
        <li>message: <strong>{{$contact->messages}}</strong></li>
    </ul>
@endif
