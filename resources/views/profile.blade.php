@extends('base')

@section('pageIntro')


<h1>User profile</h1>


@endsection

@section('mainBody')


<div class="profile_info">
<img src="{{ Session::get('user_session_key')->user_avatar }}" alt="Avatar" class="profile_ava">


<table class="profile_table">
    <tbody>
        <tr>
            <td>Имя</td>
            <td>{{ Session::get('user_session_key')->name }}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ Session::get('user_session_key')->email }}</td>
        </tr>
        <tr>
            <td>Пол</td>
            <td>{{ Session::get('user_session_key')->sex }}</td>
        </tr>
        <tr>
            <td>День рождения</td>
            <td>{{ Session::get('user_session_key')->user_birthday }}</td>
           
        </tr>
    </tbody>
</table>
</div>

@endsection

@section('[pageInformation]')
@endsection