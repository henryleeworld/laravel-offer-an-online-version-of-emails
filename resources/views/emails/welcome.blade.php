@component('mail::message')
# Introduction

{{ trans('frontend.mail.welcome.content.personally_thank_you_for_signing_up') }}

{{ trans('frontend.mail.welcome.content.if_you_have_any_questions') }}

{{ trans('frontend.mail.welcome.content.thanks') }}<br>
{{ config('app.name') }}
@endcomponent
