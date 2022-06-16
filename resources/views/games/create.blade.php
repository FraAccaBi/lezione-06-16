@extends('layouts.app')
@section('content')
<form action="{{route('games.store')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="title">title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="fifa98" aria-describedby="titleHelper">
      <small id="titleHelper" class="text-muted">Type the game name here</small>
    </div>
    <div class="form-group">
      <label for="thumb">thumb</label>
      <input type="text" name="thumb" id="thumb" class="form-control" placeholder="https.." aria-describedby="thumbHelper">
      <small id="thumbHelper" class="text-muted">Type the game name here</small>
    </div>
    <div class="form-group">
      <label for="cover_img">cover_img</label>
      <input type="text" name="cover_img" id="cover_img" class="form-control" placeholder="https.." aria-describedby="cover_imgHelper">
      <small id="cover_imgHelper" class="text-muted">Type the cover image path here</small>
    </div>
    <div class="mb-3">
      <label for="description" class="form-label">Decsription</label>
      <textarea class="form-control" name="description" id="description" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">add game</button>
</form>
@endsection