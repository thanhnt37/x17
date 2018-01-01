@extends('pages.admin.' . config('view.admin') . '.layout.application', ['menu' => 'categories'] )

@section('metadata')
@stop

@section('styles')
    <link rel="stylesheet" href="{!! \URLHelper::asset('libs/datetimepicker/css/bootstrap-datetimepicker.min.css', 'admin') !!}">

    <style>
        .box-body figure {
            background: rgba(204, 204, 204, 0.2);
            padding-top: 10px;
            text-align: center;
        }
    </style>
@stop

@section('scripts')
    <script src="{{ \URLHelper::asset('libs/moment/moment.min.js', 'admin') }}"></script>
    <script src="{{ \URLHelper::asset('libs/datetimepicker/js/bootstrap-datetimepicker.min.js', 'admin') }}"></script>
    <script>
        $('.datetime-field').datetimepicker({'format': 'YYYY-MM-DD HH:mm:ss', 'defaultDate': new Date()});

        $(document).ready(function () {
            $("#cover-image").change(function (event) {
                $("#cover-image-preview").attr("src", URL.createObjectURL(event.target.files[0]));
            });
        });
    </script>
@stop

@section('title')
@stop

@section('header')
    Categories
@stop

@section('breadcrumb')
    <li><a href="{!! action('Admin\CategoryController@index') !!}"><i class="fa fa-files-o"></i> Categories</a></li>
    @if( $isNew )
        <li class="active">New</li>
    @else
        <li class="active">{{ $category->id }}</li>
    @endif
@stop

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="@if($isNew) {!! action('Admin\CategoryController@store') !!} @else {!! action('Admin\CategoryController@update', [$category->id]) !!} @endif" method="POST" enctype="multipart/form-data">
        @if( !$isNew ) <input type="hidden" name="_method" value="PUT"> @endif
        {!! csrf_field() !!}

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <a href="{!! URL::action('Admin\CategoryController@index') !!}" class="btn btn-block btn-default btn-sm" style="width: 125px;">@lang('admin.pages.common.buttons.back')</a>
                </h3>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <figure>
                            @php $image = $category->coverImage; @endphp
                            @if(isset($image->url))
                                <img id="cover-image-preview" src="{{$image->present()->url}}" alt="">
                            @else
                                <img id="cover-image-preview" src="https://placehold.it/730x95?text=No%20Image" alt="" class="margin"/>
                            @endif
                            <figcaption>
                                Upload image with size 730x95 for the best display quality
                                <label for="cover-image" style="font-weight: 100; color: #549cca; margin-left: 10px; cursor: pointer;">@lang('admin.pages.common.buttons.edit')</label>
                            </figcaption>

                            <input type="file" style="display: none;" id="cover-image" name="cover_image">
                        </figure>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('name')) has-error @endif">
                            <label for="name">@lang('admin.pages.categories.columns.name')</label>
                            <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') ? old('name') : $category->name }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('slug')) has-error @endif">
                            <label for="slug">@lang('admin.pages.categories.columns.slug')</label>
                            <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug') ? old('slug') : $category->slug }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('wildcard')) has-error @endif">
                            <label for="wildcard">@lang('admin.pages.categories.columns.wildcard')</label>
                            <input type="text" class="form-control" id="wildcard" name="wildcard" required value="{{ old('wildcard') ? old('wildcard') : $category->wildcard }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('color')) has-error @endif">
                            <label for="color">@lang('admin.pages.categories.columns.color')</label>
                            <input type="text" class="form-control" id="color" name="color" required value="{{ old('color') ? old('color') : $category->color }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('category_id')) has-error @endif">
                            <label for="category_id">@lang('admin.pages.categories.columns.parent_id')</label>

                            <select class="form-control" name="parent_id" id="parent_id" style="margin-bottom: 15px;" required>
                                <option value="0">Root</option>
                                @foreach( $categories as $cat )
                                    <option value="{!! $cat->id !!}" @if( (old('parent_id') && old('parent_id') == $category->parent_id) || ( $cat->id == $category->parent_id) ) selected @endif >
                                        {{ $cat->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('order')) has-error @endif">
                            <label for="order">@lang('admin.pages.categories.columns.order')</label>
                            <input type="number" min="0" class="form-control" id="order" name="order" required value="{{ old('order') ? old('order') : $category->order }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-sm" style="width: 125px;">@lang('admin.pages.common.buttons.save')</button>
            </div>
        </div>
    </form>
@stop
