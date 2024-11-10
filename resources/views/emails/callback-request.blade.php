<h1>New Callback Request</h1>

<p><strong>Name:</strong> {{ $data['name'] }}</p>
<p><strong>Phone Number:</strong> {{ $data['phone'] }}</p>

@if(!empty($data['weekday']))
    <p><strong>Preferred Weekday:</strong> {{ $data['weekday'] }}</p>
@endif

@if(!empty($data['time']))
    <p><strong>Preferred Time:</strong> {{ $data['time'] }}</p>
@endif

