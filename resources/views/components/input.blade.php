<div class="form-group">
    <label for="">{{$label}}:</label>
    <input type="{{$type}}" class="form-control" id="" name="{{$name}}">
    <sapn class="text-danger">
        <!-- {{$demo}} -->
        @error($name)
        {{$message}}
        @enderror
    </sapn>
</div>