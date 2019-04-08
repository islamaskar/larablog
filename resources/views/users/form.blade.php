@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if (request()->route()->getActionMethod() == 'create')
<form action="{{ url('users') }}" method="POST">
@else
    <form action="/users/{{$user->id}}" method="POST">
    @method('PATCH')
@endif
@csrf
    <div>
        <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{old('name') ?? $user->name }}">
    </div>
    <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{old('email') ?? $user->email }}">
    </div>
    <div>
            <label for="password">password</label>
            <input type="password" name="password" id="password">
    </div>
    <div>
            <label for="gender">gender</label>
            <input type="radio" name="gender" id="gender" vlaue="male" >Male
            <input type="radio" name="gender" id="gender" vlaue="female">Female
    </div>
    <div>
        <input type="submit" class="btn btn-primary" value="submit">
    </div>
</form>
