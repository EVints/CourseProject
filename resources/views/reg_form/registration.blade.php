@extends('base')

@section('pageIntro')
@endsection

@section('mainBody')


Registration form

<form method="post" enctype="multipart/form-data">
    @csrf
    <p><label for="name">Name</label><input type="text" name="name" id="name"></p>
    <p><label for="email">Email</label><input type="text" name="email" id="email"></p>
    <p><label for="password">Password</label><input type="password" name="password" id="password"></p>

    <p>
        <label for="sex">Sex</label>
        <select name="sex" id="sex">
            <option value="M">Male</option>
            <option value="F">Female</option>
            <option value="">WTF? O_o</option>
        </select>
    </p>
    <p>
        <label for="from">Birthday</label><input type="datetime-local" name="user_birthday" id="user_birthday">
    </p>

    <p><label for="user_avatar">Avatar (optional)</label><input type="file" name="user_avatar" id="user_avatar"></p>




    <p><input type="submit" value="send"></p>
</form>


@endsection