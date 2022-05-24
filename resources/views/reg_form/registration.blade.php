@extends('base')

@section('pageIntro')
<div id="pageintro" class="hoc clear" style="padding-bottom: 20px;">
      <!-- ################################################################################################ -->


<article>
<h3 class="heading">Registered in<br>Velopokatuszki</h3>

<form method="post" enctype="multipart/form-data">
    @csrf
    <p><label for="name">Name</label><input class="btmspace-15" type="text" name="name" id="name"></p>
    <p><label for="email">Email</label><input class="btmspace-15" type="email" name="email" id="email"></p>
    <p><label for="password">Password</label><input class="btmspace-15" type="password" name="password" id="password"></p>

    <p>
        <label for="sex">Sex</label>
        <select name="sex" id="sex" style="color:black;">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="">WTF? O_o</option>
        </select>
    </p>
    <p>
        <label for="from">Birthday</label><input type="date" name="user_birthday" id="user_birthday">
    </p>

    <p><label for="user_avatar">Avatar (optional)</label><input type="file" name="user_avatar" id="user_avatar"></p>


    <p><input type="submit" value="Registrate"></p>
</form>

</article>

</div>

@endsection

@section('mainBody')


@endsection

@section('[pageInformation]')
@endsection