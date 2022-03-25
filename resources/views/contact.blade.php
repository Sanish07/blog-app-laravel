@extends('layout.secondary')
@section('title','Contact Me')

@section('route','projects')
@section('route-label','My Other Projects')

@section('page-content')
<div class="contacts">
    <a class="contact-card" href="https://in.linkedin.com/in/sanish-nirwan-39ab88192" target="_blank">
        <img src="{{ asset('contact-icons/in-logo.png') }}" alt="in-logo" width="100" height="100" />
        <div class="contact-text">Connect with me on LinkedIn</div>
    </a>

    <a class="contact-card" href="https://github.com/Sanish07" target="_blank">
        <img src="{{ asset('contact-icons/github-logo.png') }}" alt="gh-logo" width="100" height="100" />
        <div class="contact-text">View my Github Repository</div>
    </a>

    <a class="contact-card" href="https://www.facebook.com/sanish.nirwan" target="_blank">
        <img src="{{ asset('contact-icons/fb-logo.png') }}" alt="fb-logo" width="100" height="100" />
        <div class="contact-text">Contact Me on Facebook</div>
    </a>

    <a class="contact-card" href="https://twitter.com/sanish_p1" target="_blank">
        <img src="{{ asset('contact-icons/twitter-logo.png') }}" alt="twitter-logo" width="100" height="100" />
        <div class="contact-text">Follow Me on Twitter</div>
    </a>

    <a class="contact-card" href="mailto:sanishnirwan@gmail.com" target="_blank">
        <img src="{{ asset('contact-icons/gmail-logo.png') }}" alt="gmail-logo" width="100" height="100" />
        <div class="contact-text">Send Me Email</div>
    </a>
</div>
@endsection
