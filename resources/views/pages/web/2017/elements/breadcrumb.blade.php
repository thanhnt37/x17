@if( !empty($currentCategory) )
    @php
        if(!empty($currentCategory->childs) && count($currentCategory->childs)) {
            $category = $currentCategory;
            $childs   = $category->childs;
        } elseif(!empty($currentCategory->parent) && count($currentCategory->parent)) {
            $category = $currentCategory->parent;
            $childs   = $category->childs;
        } else {
            $category = $currentCategory;
            $childs   = [];
        }
    @endphp
@endif
<section id="breadcrumb">
    <header>
        <a href="/{{$category->slug}}">
            <span style="background: {{$category->color}}">{{$category->wildcard}}</span>
        </a>
        <h2><a href="/{{$category->slug}}">{{$category->name}}</a></h2>
        <ul>
            @foreach( $childs as $child )
                <li @if($child->slug == $currentCategory->slug) class="active" @endif>
                    <a href="/{{$child->slug}}">{{$child->name}}</a>
                </li>
            @endforeach
        </ul>
    </header>
    <img src="{{$category->coverImage->url}}" alt="{{$category->slug}}" title="{{$category->slug}}">
</section>