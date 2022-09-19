<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('member.login') }}" method="POST">
        @csrf
        <x-form.error name="nouser" />
        <input type="email" name="email" id="email" value="nysid@mailinator.com">
        <x-form.error name="email" />
        <input type="password" name="password" id="password" value="password">
        <x-form.error name="password" />
        <input type="submit" value="Login">
    </form>

</body>

</html>
