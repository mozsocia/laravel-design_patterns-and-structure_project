<!-- <form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>
    <button type="submit">Create user</button>
</form> -->


<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}" required>
    @if($errors->has('name'))
        <span class="error">{{ $errors->first('name') }}</span>
    @endif
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ old('email') }}" required>
    @if($errors->has('email'))
        <span class="error">{{ $errors->first('email') }}</span>
    @endif
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    @if($errors->has('password'))
        <span class="error">{{ $errors->first('password') }}</span>
    @endif
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" id="password_confirmation" name="password_confirmation" required>
    @if($errors->has('password_confirmation'))
        <span class="error">{{ $errors->first('password_confirmation') }}</span>
    @endif
    <button type="submit">Create user</button>
</form>
