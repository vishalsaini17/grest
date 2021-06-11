@component('mail::message')
# Welcome to Grest

We are Grest, the leading marketplace dedicated to refurbished devices. Our mission is to bring the refurbished goods as a main stream of new products.

@component('mail::button', ['url' => 'https://www.grest.in/'])
Go to Website
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
