@extends('pages.admin.' . config('view.admin') . '.layout.application', ['menu' => 'articles'] )

@section('metadata')
@stop

@section('styles')
    <link rel="stylesheet" href="{!! \URLHelper::asset('libs/datetimepicker/css/bootstrap-datetimepicker.min.css', 'admin') !!}">

    <style>
        .article-tabs li {
            width: 125px;
            text-align: center;
        }
    </style>
@stop

@section('scripts')
    <script src="{{ \URLHelper::asset('libs/moment/moment.min.js', 'admin') }}"></script>
    <script src="{{ \URLHelper::asset('libs/datetimepicker/js/bootstrap-datetimepicker.min.js', 'admin') }}"></script>

    <!-- Imclude CKEditor -->
    <script src="{{ \URLHelper::asset('libs/plugins/ckeditor/ckeditor.js', 'admin') }}"></script>

    <script>
        Boilerplate.imageUploadUrl = "{!! URL::action('Admin\ArticleController@postImage') !!}";
        Boilerplate.imageUploadParams = {
            "article_id" : "{!! empty($article->id) ? 0 : $article->id !!}",
            "_token": "{!! csrf_token() !!}"
        };
        Boilerplate.imagesLoadURL = "{!! URL::action('Admin\ArticleController@getImages') !!}";
        Boilerplate.imagesLoadParams = {
            "article_id" : "{!! empty($article->id) ? 0 : $article->id !!}"
        };
        Boilerplate.imageDeleteURL = "{!! URL::action('Admin\ArticleController@deleteImage') !!}";
        Boilerplate.imageDeleteParams = {
            "_token": "{!! csrf_token() !!}"
        };
    </script>

    <script src="{{ \URLHelper::asset('js/pages/articles/edit.js', 'admin/adminlte') }}"></script>

    <script>initCKEditor();</script>
@stop

@section('title')
@stop

@section('header')
    Articles
@stop

@section('breadcrumb')
    <li><a href="{!! action('Admin\ArticleController@index') !!}"><i class="fa fa-files-o"></i> Articles</a></li>
    @if( $isNew )
        <li class="active">New</li>
    @else
        <li class="active">{{ $article->id }}</li>
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

    <form action="@if($isNew) {!! action('Admin\ArticleController@store') !!} @else {!! action('Admin\ArticleController@update', [$article->id]) !!} @endif" method="POST" enctype="multipart/form-data">
        @if( !$isNew ) <input type="hidden" name="_method" value="PUT"> @endif
        {!! csrf_field() !!}

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <a href="{!! URL::action('Admin\ArticleController@index') !!}" class="btn btn-block btn-default btn-sm" style="width: 125px; display: inline-block;">@lang('admin.pages.common.buttons.back')</a>
                    <a href="{!! URL::action('Admin\ArticleController@index') !!}" class="btn btn-block btn-primary btn-sm" id="button-preview" style="width: 125px; display: inline-block; margin: 0;">@lang('admin.pages.common.buttons.preview')</a>
                </h3>
            </div>
            <div class="box-body">
                <div class="bs-example" style="padding: 10px;" data-example-id="simple-nav-tabs">
                    <ul class="nav nav-tabs article-tabs">
                        <li role="presentation" class="active">
                            <a href="#">General</a>
                        </li>
                        <li role="presentation">
                            <a href="{!! action('Admin\ArticleController@images', $article->id) !!}">Images</a>
                        </li>
                    </ul>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('title')) has-error @endif">
                            <label for="title">@lang('admin.pages.articles.columns.title')</label>
                            <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') ? old('title') : $article->title }}">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('slug')) has-error @endif">
                            <label for="slug">@lang('admin.pages.articles.columns.slug')</label>
                            <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug') ? old('slug') : $article->slug }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('category_id')) has-error @endif">
                            <label for="category_id">@lang('admin.pages.articles.columns.category_id')</label>

                            <select class="form-control" name="category_id" id="category_id" style="margin-bottom: 15px;" required>
                                {{--                                <option value="">@lang('admin.pages.common.label.select_category')</option>--}}
                                @foreach( $categories as $category )
                                    <option value="{!! $category->id !!}" @if( (old('category_id') && old('category_id') == $category->id) || ( $article->category_id == $category->id) ) selected @endif >
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('series_id')) has-error @endif">
                            <label for="series_id">@lang('admin.pages.articles.columns.series_id')</label>

                            <select class="form-control" name="series_id" id="series_id" style="margin-bottom: 15px;" required>
                                {{--                                <option value="">@lang('admin.pages.common.label.select_series')</option>--}}
                                @foreach( $series as $seri )
                                    <option value="{!! $seri->id !!}" @if( (old('series_id') && old('series_id') == $seri->id) || ( $article->series_id == $seri->id) ) selected @endif >
                                        {{ $seri->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('publish_started_at')) has-error @endif">
                            <label for="publish_started_at">@lang('admin.pages.articles.columns.publish_started_at')</label>
                            <div class="input-group" style="margin-bottom: 10px;" id="publish_started_at">
                                <input type="text" class="form-control" style="margin: 0;" name="publish_started_at" required value="{{ old('publish_started_at') ? old('publish_started_at') : $article->publish_started_at }}">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group @if ($errors->has('publish_ended_at')) has-error @endif">
                            <label for="publish_ended_at">@lang('admin.pages.articles.columns.publish_ended_at')</label>
                            <div class="input-group" style="margin-bottom: 10px;" id="publish_ended_at">
                                <input type="text" class="form-control" style="margin: 0;" name="publish_ended_at" value="{{ old('publish_ended_at') ? old('publish_ended_at') : $article->publish_ended_at }}">
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group @if ($errors->has('voted')) has-error @endif">
                            <label for="voted">@lang('admin.pages.articles.columns.voted')</label>
                            <input type="number" min="0" class="form-control" id="voted" name="voted" value="{{ old('voted') ? old('voted') : $article->voted }}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group @if ($errors->has('read')) has-error @endif">
                            <label for="read">@lang('admin.pages.articles.columns.read')</label>
                            <input type="number" min="0" class="form-control" id="read" name="read" value="{{ old('read') ? old('read') : $article->read }}">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group @if ($errors->has('is_enabled')) has-error @endif">
                            <label for="is_enabled">@lang('admin.pages.common.label.is_enabled')</label>
                            <div class="switch" style="margin-bottom: 10px;">
                                <input id="is_enabled" name="is_enabled" value="1" @if( $article->is_enabled) checked @endif class="cmn-toggle cmn-toggle-round-flat" type="checkbox">
                                <label for="is_enabled"></label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group @if ($errors->has('keywords')) has-error @endif">
                            <label for="keywords">@lang('admin.pages.articles.columns.keywords')</label>
                            <textarea name="keywords" class="form-control" rows="5" placeholder="@lang('admin.pages.articles.columns.keywords')">{{ old('keywords') ? old('keywords') : $article->keywords }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group @if ($errors->has('description')) has-error @endif">
                            <label for="description">@lang('admin.pages.articles.columns.description')</label>
                            <textarea name="description" class="form-control" rows="5" placeholder="@lang('admin.pages.articles.columns.description')">{{ old('description') ? old('description') : $article->description }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group @if ($errors->has('content')) has-error @endif">
                            <label for="content">@lang('admin.pages.articles.columns.content')</label>
                            <textarea id="article-content-editor" name="content" class="form-control" rows="10" placeholder="@lang('admin.pages.articles.columns.content')">{{ old('content') ? old('content') : $article->content }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-sm" style="width: 125px;">@lang('admin.pages.common.buttons.save')</button>
            </div>
        </div>
    </form>

    <form id="form-preview" action="{!! action('Admin\ArticleController@preview') !!}" method="POST" enctype="multipart/form-data" target="_blank">
        {!! csrf_field() !!}
        <input type="hidden" name="title" id="preview-title">
        <input type="hidden" name="content" id="preview-content">
        <input type="hidden" name="locale" id="preview-locale">
    </form>
@stop
