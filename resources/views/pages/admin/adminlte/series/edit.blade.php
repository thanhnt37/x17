@extends('pages.admin.' . config('view.admin') . '.layout.application', ['menu' => 'series'] )

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
        .box-body figure img {
            max-height: 240px;
        }
    </style>
@stop

@section('scripts')
    <script src="{{ \URLHelper::asset('libs/moment/moment.min.js', 'admin') }}"></script>
    <script src="{{ \URLHelper::asset('libs/datetimepicker/js/bootstrap-datetimepicker.min.js', 'admin') }}"></script>
    <script>
        $('#publish_started_at').datetimepicker({'format': 'YYYY-MM-DD HH:mm:ss', 'defaultDate': new Date()});
        $('#publish_ended_at').datetimepicker({'format': 'YYYY-MM-DD HH:mm:ss'});

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
    Series
@stop

@section('breadcrumb')
    <li><a href="{!! action('Admin\SeriesController@index') !!}"><i class="fa fa-files-o"></i> Series</a></li>
    @if( $isNew )
        <li class="active">New</li>
    @else
        <li class="active">{{ $series->id }}</li>
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

    <form action="@if($isNew) {!! action('Admin\SeriesController@store') !!} @else {!! action('Admin\SeriesController@update', [$series->id]) !!} @endif" method="POST" enctype="multipart/form-data">
        @if( !$isNew ) <input type="hidden" name="_method" value="PUT"> @endif
        {!! csrf_field() !!}

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <a href="{!! URL::action('Admin\SeriesController@index') !!}" class="btn btn-block btn-default btn-sm" style="width: 125px;">@lang('admin.pages.common.buttons.back')</a>
                </h3>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <figure>
                            @php $image = $series->coverImage; @endphp
                            @if(isset($image->url))
                                <img id="cover-image-preview" src="{{$image->present()->url}}" alt="">
                            @else
                                <img id="cover-image-preview" src="https://placehold.it/1300x480?text=No%20Image" alt="" />
                            @endif
                            <figcaption>
                                Upload image with size 1300x480 for the best display quality
                                <label for="cover-image"
                                       style="font-weight: 100; color: #549cca; margin-left: 10px; cursor: pointer;">@lang('admin.pages.common.buttons.edit')</label>
                            </figcaption>

                            <input type="file" style="display: none;" id="cover-image" name="cover_image">
                        </figure>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('title')) has-error @endif">
                            <label for="title">@lang('admin.pages.series.columns.title')</label>
                            <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') ? old('title') : $series->title }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('slug')) has-error @endif">
                            <label for="slug">@lang('admin.pages.series.columns.slug')</label>
                            <input type="text" class="form-control" id="slug" name="slug" required value="{{ old('slug') ? old('slug') : $series->slug }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group @if ($errors->has('category_id')) has-error @endif">
                            <label for="category_id">@lang('admin.pages.articles.columns.category_id')</label>

                            <select class="form-control" name="category_id" id="category_id" style="margin-bottom: 15px;" required>
                                @foreach( $categories as $category )
                                    <option value="{!! $category->id !!}" @if( (old('category_id') && old('category_id') == $category->id) || ( $series->category_id == $category->id) ) selected @endif >
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="publish_started_at">@lang('admin.pages.series.columns.publish_started_at')</label>
                            <div id="publish_started_at"  class="input-group date datetime-field">
                                <input type="text" class="form-control" name="publish_started_at" required value="{{ old('publish_started_at') ? old('publish_started_at') : $series->publish_started_at }}">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="publish_ended_at">@lang('admin.pages.series.columns.publish_ended_at')</label>
                            <div id="publish_ended_at" class="input-group date datetime-field">
                                <input type="text" class="form-control" name="publish_ended_at" value="{{ old('publish_ended_at') ? old('publish_ended_at') : $series->publish_ended_at }}">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group @if ($errors->has('read')) has-error @endif">
                            <label for="read">@lang('admin.pages.series.columns.read')</label>
                            <input type="number" min="0" class="form-control" id="read" name="read" required value="{{ old('read') ? old('read') : $series->read }}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group @if ($errors->has('voted')) has-error @endif">
                            <label for="voted">@lang('admin.pages.series.columns.voted')</label>
                            <input type="number" min="0" class="form-control" id="voted" name="voted" required value="{{ old('voted') ? old('voted') : $series->voted }}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="is_enabled">@lang('admin.pages.common.label.is_enabled')</label>
                            <div class="switch">
                                <input id="is_enabled" name="is_enabled" value="1" @if( $series->is_enabled) checked
                                       @endif class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
                                <label for="is_enabled"></label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group @if ($errors->has('keywords')) has-error @endif">
                            <label for="keywords">@lang('admin.pages.series.columns.keywords')</label>
                            <textarea name="keywords" class="form-control" rows="5" required placeholder="@lang('admin.pages.series.columns.keywords')">{{ old('keywords') ? old('keywords') : $series->keywords }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group @if ($errors->has('description')) has-error @endif">
                            <label for="description">@lang('admin.pages.series.columns.description')</label>
                            <textarea name="description" class="form-control" rows="5" required placeholder="@lang('admin.pages.series.columns.description')">{{ old('description') ? old('description') : $series->description }}</textarea>
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
