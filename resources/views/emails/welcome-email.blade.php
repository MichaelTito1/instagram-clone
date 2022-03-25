@component('mail::message')
# Welcome to InstaClone!

The team of developers at InstaClone welcome you.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
