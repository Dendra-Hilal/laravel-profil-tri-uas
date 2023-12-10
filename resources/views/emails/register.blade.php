@component('mail::message')
    <p>Hello {{ $user->name }},</p>
    <p>Thank you for creating an account with our application! To complete the registration process, please verify your email address by clicking the link below:</p>
    <a href="{{ route('verification.verify', ['id' => $id, 'remember_token' => $remember_token, 'source' => 'email']) }}">Click here to verify</a>
    <p>If you did not sign up for our application, you can safely ignore this email.</p>
    <p>Thank you,<br>Admin TRI</p>
@endcomponent