@extends('base')





@section('mainBody')
<div class="wrapper row3">
  <main class="hoc container clear">
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content">
      <!-- ################################################################################################ -->
      <div id="gallery">
     

      @if(Session::has('user_session_key'))
      @if(Session::get('user_session_key')->super_user)
      
      <form method="post" enctype="multipart/form-data">
      @csrf
      <p><label for="photo_add">Add new photo</label><input type="file" name="photo_add" id="photo_add"></p>
      <input type="submit" value="Добавить фоточку :)">
      </form>
      @endif
      @endif
        <figure>
          <header class="heading">Фото галлерея</header>
          <ul class="display_gallery">

          @foreach ($photo_gallery as $item)

          <li class=""><a href="{{ $item->photo }}"><img src="{{ $item->photo }}" alt=""></a></li>

          @endforeach

          </ul>
          <!-- <figcaption>Gallery Description Goes Here</figcaption> -->
        </figure>
      </div>
      <!-- ################################################################################################ -->
      <!-- ################################################################################################ -->
      <!-- <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li><a href="#">Next &raquo;</a></li>
        </ul>
      </nav> -->
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
@endsection