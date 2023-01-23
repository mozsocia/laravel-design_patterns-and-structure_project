```php
Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);

```

```php

<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    private $users;

    public function __construct(UserRepository $users)
    {
        $this->users = $users;
    }

    public function index()
    {
        $users = $this->users->all();
        return view('users.index', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
        ]);

        // additional validation
        $this->validate($request, [
            'password' => 'same:password_confirmation',
        ]);

        $user = $this->users->create($request->all());
        return redirect()->route('users.index')->with('success', 'User created successfully');
    }

    public function show($id)
    {
        $user = $this->users->find($id);
        return view('users.show', compact('user'));
    }


    public function edit($id)
    {
        $user = $this->users->find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required|string|min:6',
        ]);

        // additional validation
        $this->validate($request, [
            'password' => 'same:password_confirmation',
        ]);

        $user = $this->users->update($id, $request->all());
        return redirect()->route('users.index')->with('success', 'User updated successfully');
    }

    public function destroy($id)
    {
        $this->users->delete($id);
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}

```

```php

<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{

    public function all()
    {
        return User::all();
    }

    public function find($id)
    {
        return User::findOrFail($id);
    }

    public function create(array $data)
    {
        return User::create($data);
    }

    public function update($id, array $data)
    {
        $user = $this->find($id);
        $user->update($data);
        return $user;
    }

    public function delete($id)
    {
        $user = $this->find($id);
        return $user->delete();
    }
}

```

```php
```

```php
```

```php
```

```php
```