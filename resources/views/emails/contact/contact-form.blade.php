@component('mail::message')
# Thank you for your massage 
<strong>Name : </strong>{{ $data['name'] }}
<strong>Email : </strong>{{ $data['email'] }}

<br>
<strong>Massage --</strong>
{{$data['message']}}

@endcomponent
