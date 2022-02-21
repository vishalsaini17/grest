@component('mail::message')

{{-- @dd($data->name) --}}
# You got a new message from {{$data['name']}} ({{$data['email']}})

<h2>Subject: {{$data['subject']}}</h2>
<p>Message: {{$data['message']}}</p>
<br><br>
<h2>Other Deatils: </h2>
<p>Full Name <b>{{$data['name']}}</b></p>
<p>Email <b>{{$data['email']}}</b></p>
<p>Phone# <b>{{$data['phone']}}</b></p>
<p>Date <b>{{$data['date']}}</b></p> 

@component('mail::button', ['url' => "https://www.grest.in/admin/message"])
Go to All Messages
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
