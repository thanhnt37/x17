<?php
namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\SeriesRepositoryInterface;
use App\Http\Requests\Admin\SeriesRequest;
use App\Http\Requests\PaginationRequest;
use App\Repositories\CategoryRepositoryInterface;
use App\Services\FileUploadServiceInterface;

class SeriesController extends Controller
{
    /** @var \App\Repositories\SeriesRepositoryInterface */
    protected $seriesRepository;

    /** @var \App\Repositories\CategoryRepositoryInterface */
    protected $categoryRepository;

    /** @var \App\Services\FileUploadServiceInterface */
    protected $fileUploadService;

    public function __construct(
        SeriesRepositoryInterface       $seriesRepository,
        CategoryRepositoryInterface     $categoryRepository,
        FileUploadServiceInterface      $fileUploadService
    )
    {
        $this->seriesRepository         = $seriesRepository;
        $this->categoryRepository       = $categoryRepository;
        $this->fileUploadService        = $fileUploadService;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Http\Requests\PaginationRequest $request
     * @return \Response
     */
    public function index(PaginationRequest $request)
    {
        $paginate['offset']     = $request->offset();
        $paginate['limit']      = $request->limit();
        $paginate['order']      = $request->order();
        $paginate['direction']  = $request->direction();
        $paginate['baseUrl']    = action( 'Admin\SeriesController@index' );

        $count = $this->seriesRepository->count();
        $seriess = $this->seriesRepository->get( $paginate['order'], $paginate['direction'], $paginate['offset'], $paginate['limit'] );

        return view(
            'pages.admin.' . config('view.admin') . '.series.index',
            [
                'seriess'  => $seriess,
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
            'pages.admin.' . config('view.admin') . '.series.edit',
            [
                'isNew'      => true,
                'series'     => $this->seriesRepository->getBlankModel(),
                'categories' => $this->categoryRepository->getAllLeaf()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  $request
     * @return \Response
     */
    public function store(SeriesRequest $request)
    {
        $input = $request->only(
            [
                'slug',
                'title',
                'keywords',
                'description',
                'voted',
                'read',
                'publish_started_at',
                'publish_ended_at'
            ]
        );
        
        $input['is_enabled']    = $request->get('is_enabled', 0);
        $input['category_id']   = $request->get('category_id', 0);

        $series = $this->seriesRepository->create($input);

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');

            $image = $this->fileUploadService->upload(
                'series_cover_image',
                $file,
                [
                    'entity_type' => 'series_cover_image',
                    'entity_id'   => $series->id,
                    'title'       => $series->name,
                ]
            );

            if (!empty($image)) {
                $this->categoryRepository->update($series, ['cover_image_id' => $image->id]);
            }
        }

        if (empty( $series )) {
            return redirect()->back()->withErrors(trans('admin.errors.general.save_failed'));
        }

        return redirect()->action('Admin\SeriesController@index')
            ->with('message-success', trans('admin.messages.general.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Response
     */
    public function show($id)
    {
        $series = $this->seriesRepository->find($id);
        if (empty( $series )) {
            abort(404);
        }

        return view(
            'pages.admin.' . config('view.admin') . '.series.edit',
            [
                'isNew'      => false,
                'series'     => $series,
                'categories' => $this->categoryRepository->getAllLeaf()
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param      $request
     * @return \Response
     */
    public function update($id, SeriesRequest $request)
    {
        /** @var \App\Models\Series $series */
        $series = $this->seriesRepository->find($id);
        if (empty( $series )) {
            abort(404);
        }

        $input = $request->only(
            [
                'slug',
                'title',
                'keywords',
                'description',
                'voted',
                'read',
                'publish_started_at',
                'publish_ended_at'
            ]
        );

        $input['is_enabled']    = $request->get('is_enabled', 0);
        $input['category_id']   = $request->get('category_id', 0);

        $this->seriesRepository->update($series, $input);

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');

            $newImage = $this->fileUploadService->upload(
                'series_cover_image',
                $file,
                [
                    'entity_type' => 'series_cover_image',
                    'entity_id'   => $series->id,
                    'title'       => $series->name,
                ]
            );

            if (!empty($newImage)) {
                $oldImage = $series->coverImage;
                if (!empty($oldImage)) {
                    $this->fileUploadService->delete($oldImage);
                }

                $this->categoryRepository->update($series, [ 'cover_image_id' => $newImage->id ]);
            }
        }

        return redirect()->action('Admin\SeriesController@show', [$id])
                    ->with('message-success', trans('admin.messages.general.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Response
     */
    public function destroy($id)
    {
        /** @var \App\Models\Series $series */
        $series = $this->seriesRepository->find($id);
        if (empty( $series )) {
            abort(404);
        }
        $this->seriesRepository->delete($series);

        return redirect()->action('Admin\SeriesController@index')
                    ->with('message-success', trans('admin.messages.general.delete_success'));
    }

}
