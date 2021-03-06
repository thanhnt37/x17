<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BaseRequest;
use App\Http\Controllers\Controller;
use App\Repositories\ArticleRepositoryInterface;
use App\Http\Requests\Admin\ArticleRequest;
use App\Http\Requests\PaginationRequest;
use App\Repositories\ImageRepositoryInterface;
use App\Services\ArticleServiceInterface;
use App\Services\FileUploadServiceInterface;
use App\Services\ImageServiceInterface;
use App\Repositories\CategoryRepositoryInterface;
use App\Repositories\SeriesRepositoryInterface;
use App\Repositories\ArticleImageRepositoryInterface;

class ArticleController extends Controller
{
    /** @var \App\Repositories\ArticleRepositoryInterface */
    protected $articleRepository;

    /** @var ArticleServiceInterface $articleService */
    protected $articleService;

    /** @var FileUploadServiceInterface $fileUploadService */
    protected $fileUploadService;

    /** @var ImageRepositoryInterface $imageRepository */
    protected $imageRepository;

    /** @var  ImageServiceInterface $imageService */
    protected $imageService;

    /** @var \App\Repositories\CategoryRepositoryInterface */
    protected $categoryRepository;

    /** @var \App\Repositories\SeriesRepositoryInterface */
    protected $seriesRepository;

    /** @var \App\Repositories\ArticleImageRepositoryInterface */
    protected $articleImageRepository;

    public function __construct(
        ArticleRepositoryInterface      $articleRepository,
        ArticleServiceInterface         $articleService,
        FileUploadServiceInterface      $fileUploadService,
        ImageRepositoryInterface        $imageRepository,
        ImageServiceInterface           $imageService,
        CategoryRepositoryInterface     $categoryRepository,
        SeriesRepositoryInterface       $seriesRepository,
        ArticleImageRepositoryInterface $articleImageRepository
    )
    {
        $this->articleRepository        = $articleRepository;
        $this->articleService           = $articleService;
        $this->fileUploadService        = $fileUploadService;
        $this->imageRepository          = $imageRepository;
        $this->imageService             = $imageService;
        $this->categoryRepository       = $categoryRepository;
        $this->seriesRepository         = $seriesRepository;
        $this->articleImageRepository   = $articleImageRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Http\Requests\PaginationRequest $request
     *
     * @return \Response
     */
    public function index( PaginationRequest $request )
    {
        $paginate[ 'offset' ]    = $request->offset();
        $paginate[ 'limit' ]     = $request->limit();
        $paginate[ 'order' ]     = $request->order();
        $paginate[ 'direction' ] = $request->direction();
        $paginate[ 'baseUrl' ]   = action( 'Admin\ArticleController@index' );

        $count = $this->articleRepository->count();
        $articles = $this->articleRepository->get(
            $paginate[ 'order' ],
            $paginate[ 'direction' ],
            $paginate[ 'offset' ],
            $paginate[ 'limit' ]
        );

        return view(
            'pages.admin.' . config('view.admin') . '.articles.index',
            [
                'models'   => $articles,
                'count'    => $count,
                'paginate' => $paginate,
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Response
     */
    public function create()
    {
        return view(
            'pages.admin.' . config('view.admin') . '.articles.edit',
            [
                'isNew'      => true,
                'article'    => $this->articleRepository->getBlankModel(),
                'series'     => $this->seriesRepository->all('title', 'asc'),
                'categories' => $this->categoryRepository->getAllLeaf()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  $request
     *
     * @return \Response
     */
    public function store(ArticleRequest $request)
    {
        $input = $request->only(
            [
                'slug',
                'title',
                'keywords',
                'description',
                'content',
                'voted',
                'read',
                'publish_started_at',
                'publish_ended_at',
            ]
        );

        $input['is_enabled']    = $request->get('is_enabled', 0);
        $input['series_id']     = $request->get('series_id', 0);
        $input['category_id']   = $request->get('category_id', 0);

        $model = $this->articleRepository->create($input);

        if (empty($model)) {
            return redirect()
                ->back()
                ->withErrors(trans('admin.errors.general.save_failed'));
        }

        return redirect()
            ->action('Admin\ArticleController@index')
            ->with(
                'message-success',
                trans('admin.messages.general.create_success')
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Response
     */
    public function show($id)
    {
        $article = $this->articleRepository->find($id);
        if (empty($article)) {
            abort(404);
        }

        return view(
            'pages.admin.' . config('view.admin') . '.articles.edit',
            [
                'isNew'      => false,
                'article'    => $article,
                'series'     => $this->seriesRepository->all('title', 'asc'),
                'categories' => $this->categoryRepository->getAllLeaf()
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Response
     */
    public function edit( $id )
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param      $request
     *
     * @return \Response
     */
    public function update($id, ArticleRequest $request)
    {
        /** @var \App\Models\Article $article */
        $article = $this->articleRepository->find($id);
        if (empty($article)) {
            abort(404);
        }

        $input = $request->only(
            [
                'slug',
                'title',
                'keywords',
                'description',
                'content',
                'voted',
                'read',
                'publish_started_at',
                'publish_ended_at',
            ]
        );

        $input['is_enabled']    = $request->get('is_enabled', 0);
        $input['series_id']     = $request->get('series_id', 0);
        $input['category_id']   = $request->get('category_id', 0);

        $article = $this->articleRepository->update($article, $input);

        return redirect()
            ->action('Admin\ArticleController@show', [$id])
            ->with(
                'message-success',
                trans('admin.messages.general.update_success')
            );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Response
     */
    public function destroy($id)
    {
        /** @var \App\Models\Article $article */
        $article = $this->articleRepository->find($id);
        if (empty($article)) {
            abort(404);
        }

        $this->articleRepository->delete($article);

        return redirect()
            ->action('Admin\ArticleController@index')
            ->with('message-success', trans('admin.messages.general.delete_success'));
    }

    /**
     * Show all article images.
     *
     * @param   int $id  article_id
     *
     * @return  \Response
     */
    public function images($id)
    {
        $article = $this->articleRepository->find($id);
        if (empty($article)) {
            abort(404);
        }

        return view(
            'pages.admin.' . config('view.admin') . '.articles.images',
            [
                'article'    => $article
            ]
        );
    }

    /**
     * Upload article cover images.
     *
     * @params  int $id  article_id
     *              $request
     *
     * @return  \Response
     */
    public function uploadCoverImages($id, BaseRequest $request)
    {
        $article = $this->articleRepository->find($id);
        if (empty($article)) {
            abort(404);
        }

        $images = $request->only(
            [
                '970x250',
                '560x390',
                '420x340',
                '730x350',
                '300x500',
            ]
        );

        foreach( $images as $key => $image ) {
            if (empty($image)) {
                continue;
            }

            $size = explode('x', $key);
            $fileSize = getimagesize($image->getPathname());

            // continue with image small than config
            if( ($fileSize[0] < $size[0]) || ($fileSize[1] < $size[1]) ) {
                session()->flash('message-failed', 'Need upload image with more bigger');
                continue;
            }

            $newImage = $this->fileUploadService->upload(
                'article_' . $key,
                $image,
                [
                    'entity_type' => 'article_' . $key,
                    'entity_id'   => $article->id,
                    'title'       => $article->title,
                ]
            );

            $currentImage = $article->present()->image($size[0], $size[1]);
            if (!empty($newImage)) {
                if (!empty($currentImage)) {
                    $articleImage = $this->articleImageRepository->findByArticleIdAndImageId($article->id, $currentImage->id);
                    $articleImage->image_id = $newImage->id;
                    $this->articleImageRepository->save($articleImage);

                    $this->fileUploadService->delete($currentImage);
                } else {
                    $this->articleImageRepository->create(
                        [
                            'article_id' => $article->id,
                            'image_id'   => $newImage->id
                        ]
                    );
                }
            }
        }

        return redirect()
            ->action('Admin\ArticleController@images', [$id])
            ->with('message-success', trans('admin.messages.general.update_success'));
    }

    /**
     * @param BaseRequest $request
     *
     * @return \Response
     */
    public function preview(BaseRequest $request)
    {
        $locale   = $request->input('language');
        $content  = $this->articleService->filterContent($request->input('content'), $locale);
        $title    = $request->input('title');
        $response = response()->view(
            'pages.admin.' . config('view.admin') . '.articles.preview',
            [
                'content' => $content,
                'title'   => $title,
            ]
        );

        //        $response->headers->set('Content-Security-Policy', "default-src 'self' 'unsafe-inline'");
        $response->headers->set('X-XSS-Protection', '0');

        return $response;
    }

    public function getImages(PaginationRequest $request)
    {
        $entityId = intval($request->input('article_id', 0));
        $type = $request->input('type', 'article_image');

        if ($entityId == 0) {
            $imageIds = $this->articleService->getImageIdsFromSession();
            $models   = $this->imageRepository->allByIds($imageIds);
        } else {
            /** @var \App\Models\Image[] $models */
            $models = $this->imageRepository->allByFileCategoryTypeAndEntityId($type, $entityId);
        }

        $result = [];
        foreach ($models as $model) {
            $result[] = [
                'id'    => $model->id,
                'url'   => $model->url,
                'thumb' => $model->getThumbnailUrl(400, 300),
            ];
        }

        return response()->json($result);
    }

    public function postImage(BaseRequest $request)
    {
        if (!$request->hasFile('file')) {
            // [TODO] ERROR JSON
            abort(400, 'No Image File');
        }

        $type     = $request->input('type', 'article_image');
        $entityId = $request->input('article_id', 0);

        $conf = config('file.categories.' . $type);
        if (empty($conf)) {
            abort(400, 'Invalid type: ' . $type);
        }

        $file = $request->file('file');

        $image = $this->fileUploadService->upload(
            'article_cover_image',
            $file,
            [
                'entity_type' => $type,
                'entity_id'   => $entityId,
                'title'       => $request->input('title', ''),
            ]
        );


        if ($entityId == 0) {
            $this->articleService->addImageIdToSession($image->id);
        }

        return response()->json(
            [
                'id'   => $image->id,
                'link' => $image->getUrl(),
            ]
        );
    }

    public function deleteImage(BaseRequest $request)
    {
        $url = $request->input('src');
        if (empty($url)) {
            abort(400, 'No URL Given');
        }

        /** @var \App\Models\Image|null $image */
        $image = $this->imageRepository->findByUrl($url);
        if (empty($image)) {
            abort(404);
        }

        $entityId = $request->input('article_id', 0);
        if ($entityId != $image->entity_id) {
            abort(400, 'Article ID Mismatch');
        } else {
            if ($entityId == 0 && !$this->articleService->hasImageIdInSession($image->id)) {
                abort(400, 'Entity ID Mismatch');
            }
        }

        $this->fileUploadService->delete($image);

        if ($entityId == 0) {
            $this->articleService->removeImageIdFromSession($image->id);
        }

        return response()->json(['status' => 'ok'], 204);
    }
}
