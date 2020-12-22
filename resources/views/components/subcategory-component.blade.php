{{-- <div>
    Order your soul. Reduce your wants. - Augustine
</div> --}}

@foreach($categories as $category)
    <li class="dropdown-submenu">
        <a class="dropdown-item" href="javascript:void(0)}">
            {{$category->name}}
        <i class="icofont-rounded-right float-right"></i>
		</a>

    <ul class="dropdown-menu">
     	<h6 class="dropdown-header">{{$category->name}}</h6>
            {{--  subcategory က relationship ရေးထားတဲ့ function ရဲ့ name --}}
            @foreach($category->subcategory as $subcategory) 
                <li><a class="dropdown-item" href="{{ route('filtersubcategorypage',$subcategory->id) }}">{{ $subcategory->name }}</a></li>
            @endforeach                          
    </ul>
    </li>
    <div class="dropdown-divider"></div>
@endforeach