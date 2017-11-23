@if( !empty($currentCategory) )
    @php
        $category = (!empty($currentCategory->childs) && count($currentCategory->childs)) ? $currentCategory : $currentCategory->parent;
        $childs   = $category->childs;
    @endphp
@endif
<section id="breadcrumb">
    <header>
        <a href="{{$category->slug}}">
            <span style="background: {{$category->color}}">{{$category->wildcard}}</span>
        </a>
        <h2><a href="{{$category->slug}}">{{$category->name}}</a></h2>
        <ul>
            @foreach( $childs as $child )
                <li @if($child->slug == $currentCategory->slug) class="active" @endif>
                    <a href="{{$child->slug}}">{{$child->name}}</a>
                </li>
            @endforeach
        </ul>
    </header>
    <img src="http://via.placeholder.com/730x95" alt="">
</section>