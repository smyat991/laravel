<!-- <div>
    It is quality rather than quantity that matters. - Lucius Annaeus Seneca
</div> -->

@foreach($brands as $brand)
    <a class="dropdown-item" href="{{route('brandfilterpage',$brand->id)}}">{{$brand->name}}</a>
    <div class="dropdown-divider"></div>
@endforeach