<form class="" action="{{ route('image.create') }}" method="post">
  <h2>Upload an Image</h2>
  <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
  <div class="input-group">
    <span class="input-group-addon">Name</span>
    <input class="form-control" type="file" name="file" value="" placeholder="">
  </div>
  <select class="form-control" name="album_selected">
    {{ csrf_field() }}
    @foreach($album as $al)
      <option value="{{$al->id}}">{{$al->name}}</option>
    @endforeach
  </select>
  <input class="btn btn-primary" type="submit" name="fileUpload" value="Upload">
</form>