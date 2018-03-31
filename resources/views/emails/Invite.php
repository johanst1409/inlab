<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h1>Hi, {{ $user->username }}!</h1>
		<h2>You received an invite for team: {{ $teamName}}</h2>
		<p>{{ $invite->message }}</p>

		<p><a href="{{ config('app.name', 'Laravel') }}">{{ config('app.url', 'http://inlab.nl') }}/invites</a></p>
	</body>
</html>