<x-mail::message>
# Hell, you have got an Mail!

<h3>Name: {{$data['name']}}</h3>
<h3>Phone-Number: {{$data['phonenumber']}}</h3>
<h3>Email: {{$data['email']}}</h3>
<h3>Message: {{$data['message']}}</h3>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
