<!-- <div>
    Smile, breathe, and go slowly. - Thich Nhat Hanh
</div> -->

@foreach($categories as $category)
	<li class="dropdown-submenu">
		<a class="dropdown-item" href="{{ route('categoryfilterpage',$category->id) }}">
			{{$category->name}}
			<i class="icofont-rounded-right float-right"></i>
		</a>
		<ul class="dropdown-menu">
			<h6 class="dropdown-header">
				{{$category->name}}
			</h6>
			@foreach($category->subcategory as $subcategory)
			<li><a class="dropdown-item" href="">{{$subcategory->name}}</a></li>
			@endforeach
		</ul>
	</li>
@endforeach