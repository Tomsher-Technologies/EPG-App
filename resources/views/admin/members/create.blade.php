<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="{{ route('members.store') }}" method="post">
        @csrf
        <x-form.input name="name" text="Name" required />
        <x-form.input name="email" type='email' text="Email" required />
        <x-form.input name="phone" type='number' text="Phone" />
        <x-form.input name="nationality" text="Nationality" />
        <select name="package_id" id="package_id">
            @foreach ($packages as $package)
                <option value="{{ $package->id }}">{{ $package->name }}</option>
            @endforeach
        </select>
        <input type="submit" value="Submit">
    </form>

</body>

</html>
