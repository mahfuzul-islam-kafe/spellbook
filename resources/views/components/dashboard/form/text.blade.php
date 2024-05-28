<div class="mb-3">
    <label for="{{strtolower(str_replace(' ', '', $label))}}">{{$label}}</label>
    <input id="{{strtolower(str_replace(' ', '', $label))}}" name="{{$name}}" type="text" class="form-control" placeholder="{{$label}}">
</div>