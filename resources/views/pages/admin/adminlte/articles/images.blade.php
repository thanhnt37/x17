@extends('pages.admin.' . config('view.admin') . '.layout.application', ['menu' => 'articles'] )

@section('metadata')
@stop

@section('styles')
    <style>
        .box-body figure {
            background: rgba(204, 204, 204, 0.2);
            padding-bottom: 10px;
            margin-bottom: 10px;
            text-align: center;
        }
        .box-body figure img {
            margin: 10px;
        }
        #img-970x250-preview {
            max-width: 970px;
        }
        #img-560x390-preview {
            max-width: 560px;
        }
        #img-420x340-preview {
            max-width: 420px;
        }
        #img-730x350-preview {
            max-width: 730px;
        }
        #img-300x500-preview {
            max-width: 300px;
        }
    </style>
@stop

@section('scripts')
    <script>
        $(document).ready(function () {
            $('#img-970x250').change(function (event) {
                $('#img-970x250-preview').attr('src', URL.createObjectURL(event.target.files[0]));
            });
            $('#img-560x390').change(function (event) {
                $('#img-560x390-preview').attr('src', URL.createObjectURL(event.target.files[0]));
            });
            $('#img-420x340').change(function (event) {
                $('#img-420x340-preview').attr('src', URL.createObjectURL(event.target.files[0]));
            });
            $('#img-730x350').change(function (event) {
                $('#img-730x350-preview').attr('src', URL.createObjectURL(event.target.files[0]));
            });
            $('#img-300x500').change(function (event) {
                $('#img-300x500-preview').attr('src', URL.createObjectURL(event.target.files[0]));
            });
        });
    </script>
@stop

@section('title')
@stop

@section('header')
    Articles
@stop

@section('breadcrumb')
    <li><a href="{!! action('Admin\ArticleController@index') !!}"><i class="fa fa-files-o"></i> Articles</a></li>
    <li class="active">{{ $article->id }}</li>
@stop

@section('content')
    <form action="{!! action('Admin\ArticleController@uploadCoverImages', $article->id) !!}" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {!! csrf_field() !!}

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">
                    <a href="{!! URL::action('Admin\ArticleController@show', $article->id) !!}" class="btn btn-block btn-default btn-sm" style="width: 125px; display: inline-block;">@lang('admin.pages.common.buttons.back')</a>
                </h3>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <figure>
                            @php $image = $article->present()->image(970, 250); @endphp
                            @if(isset($image->url))
                                <img id="img-970x250-preview" src="{{$image->url}}" alt="">
                            @else
                                <img id="img-970x250-preview" src="https://placehold.it/970x250?text=No%20Image" alt="" class="margin"/>
                            @endif
                            <figcaption>
                                Upload image with size 970x250 for the best display quality
                                <label for="img-970x250" style="font-weight: 100; color: #549cca; margin-left: 10px; cursor: pointer;">@lang('admin.pages.common.buttons.edit')</label>
                            </figcaption>

                            <input type="file" style="display: none;" id="img-970x250" name="970x250">
                        </figure>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <figure>
                            @php $image = $article->present()->image(730, 350); @endphp

                            @if(isset($image->url))
                                <img id="img-730x350-preview" src="{{$image->url}}" alt="">
                            @else
                                <img id="img-730x350-preview" src="https://placehold.it/730x350?text=No%20Image" alt="" class="margin"/>
                            @endif
                            <figcaption>
                                Upload image with size 730x350 for the best display quality
                                <label for="img-730x350" style="font-weight: 100; color: #549cca; margin-left: 10px; cursor: pointer;">@lang('admin.pages.common.buttons.edit')</label>
                            </figcaption>

                            <input type="file" style="display: none;" id="img-730x350" name="730x350">
                        </figure>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <figure>
                            @php $image = $article->present()->image(560, 390); @endphp
                            @if(isset($image->url))
                                <img id="img-560x390-preview" src="{{$image->url}}" alt="">
                            @else
                                <img id="img-560x390-preview" src="https://placehold.it/560x390?text=No%20Image" alt="" class="margin"/>
                            @endif
                            <figcaption>
                                Upload image with size 560x390 for the best display quality
                                <label for="img-560x390" style="font-weight: 100; color: #549cca; margin-left: 10px; cursor: pointer;">@lang('admin.pages.common.buttons.edit')</label>
                            </figcaption>

                            <input type="file" style="display: none;" id="img-560x390" name="560x390">
                        </figure>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <figure>
                            @php $image = $article->present()->image(420, 340); @endphp
                            @if(isset($image->url))
                                <img id="img-420x340-preview" src="{{$image->url}}" alt="">
                            @else
                                <img id="img-420x340-preview" src="https://placehold.it/420x340?text=No%20Image" alt="" class="margin"/>
                            @endif
                            <figcaption>
                                Upload image with size 420x340 for the best display quality
                                <label for="img-420x340" style="font-weight: 100; color: #549cca; margin-left: 10px; cursor: pointer;">@lang('admin.pages.common.buttons.edit')</label>
                            </figcaption>

                            <input type="file" style="display: none;" id="img-420x340" name="420x340">
                        </figure>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <figure>
                            @php $image = $article->present()->image(300, 500); @endphp
                            @if(isset($image->url))
                                <img id="img-300x500-preview" src="{{$image->url}}" alt="">
                            @else
                                <img id="img-300x500-preview" src="https://placehold.it/300x500?text=No%20Image" alt="" class="margin"/>
                            @endif
                            <figcaption>
                                Upload image with size 300x500 for the best display quality
                                <label for="img-300x500" style="font-weight: 100; color: #549cca; margin-left: 10px; cursor: pointer;">@lang('admin.pages.common.buttons.edit')</label>
                            </figcaption>

                            <input type="file" style="display: none;" id="img-300x500" name="300x500">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="box-footer">
                <button type="submit" class="btn btn-primary btn-sm" style="width: 125px;">@lang('admin.pages.common.buttons.save')</button>
            </div>
        </div>
    </form>
@stop
