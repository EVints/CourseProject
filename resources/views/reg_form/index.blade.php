@extends('base')

@section('pageIntro')
<div id="pageintro" class="hoc clear" style="padding-bottom: 20px;">
      <!-- ################################################################################################ -->


      <article>
        <h3 class="heading">Sign in<br>Velopokatuszki</h3>

        <div>
          <form method="post">
            @csrf

            <label for="email">User email</label>
            <p><input class="btmspace-15" type="text" name="email"></p>

            <label for="password">Password</label>
            <p><input class="btmspace-15" type="password" name="password"></p>
            <p class="login_error">{!!$errors->first()!!}</p>
            <p><input type="submit" value="Sign in"></p>
          </form>
        </div>


        <p>Ещё не зарегестрированы? Тогда <a href="/registration" title="Sign Up">Жми</a></p>
        <footer>
          <ul class="nospace inline pushright">
            <li><a class="btn" href="#">Pharetra etiam</a></li>
            <li><a class="btn inverse" href="#">Sagittis massa</a></li>
          </ul>
        </footer>
      </article>



      <!-- ################################################################################################ -->
    </div>
@endsection

@section('mainBody')
@endsection

@section('[pageInformation]')
@endsection