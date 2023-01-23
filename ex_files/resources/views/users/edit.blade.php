<!-- <form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ $user->name }}" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ $user->email }}" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <label for="password_confirmation">Confirm Password:</label>
<input type="password" id="password_confirmation" name="password_confirmation">
<button type="submit">Update user</button>

</form> -->


<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="{{ old('name') ?? $user->name }}" required>
    @if($errors->has('name'))
        <span class="error">{{ $errors->first('name') }}</span>
    @endif
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" value="{{ old('email') ?? $user->email }}" required>
    @if($errors->has('email'))
        <span class="error">{{ $errors->first('email') }}</span>
    @endif
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    @if($errors->has('password'))
        <span class="error">{{ $errors->first('password') }}</span>

        @endif
    <label for="password_confirmation">Confirm Password:</label>
    <input type="password" id="password_confirmation" name="password_confirmation">
    @if($errors->has('password_confirmation'))
        <span class="error">{{ $errors->first('password_confirmation') }}</span>
    @endif
    <button type="submit">Update user</button>
</form>



<form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
<a href="{{ route('users.index') }}">Back</a>
