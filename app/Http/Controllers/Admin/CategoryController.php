<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\CategoryRepositoryInterface;
use App\Http\Requests\Admin\CategoryRequest;
use App\Http\Requests\PaginationRequest;
use App\Services\FileUploadServiceInterface;

class CategoryController extends Controller
{
    /** @var \App\Repositories\CategoryRepositoryInterface */
    protected $categoryRepository;

    /** @var \App\Services\FileUploadServiceInterface */
    protected $fileUploadService;

    public function __construct(
        CategoryRepositoryInterface $categoryRepository,
        FileUploadServiceInterface  $fileUploadService
    )
    {
        $this->categoryRepository   = $categoryRepository;
        $this->fileUploadService    = $fileUploadService;
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
        $paginate['baseUrl']    = action( 'Admin\CategoryController@index' );

        $count = $this->categoryRepository->count();
        $categories = $this->categoryRepository->get( $paginate['order'], $paginate['direction'], $paginate['offset'], $paginate['limit'] );

        return view(
            'pages.admin.' . config('view.admin') . '.categories.index',
            [
                'categories' => $categories,
                'count'      => $count,
                'paginate'   => $paginate,
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
            'pages.admin.' . config('view.admin') . '.categories.edit',
            [
                'isNew'      => true,
                'category'   => $this->categoryRepository->getBlankModel(),
                'categories' => $this->categoryRepository->all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  $request
     * @return \Response
     */
    public function store(CategoryRequest $request)
    {
        $input = $request->only(['name','slug','wildcard','color','order']);
        $input['parent_id']   = $request->get('parent_id', 0);

        $category = $this->categoryRepository->create($input);

        if (empty( $category )) {
            return redirect()->back()->withErrors(trans('admin.errors.general.save_failed'));
        }

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');

            $image = $this->fileUploadService->upload(
                'category_cover_image',
                $file,
                [
                    'entity_type' => 'category_cover_image',
                    'entity_id'   => $category->id,
                    'title'       => $category->name,
                ]
            );

            if (!empty($image)) {
                $this->categoryRepository->update($category, ['cover_image_id' => $image->id]);
            }
        }

        return redirect()->action('Admin\CategoryController@index')
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
        $category = $this->categoryRepository->find($id);
        if (empty( $category )) {
            abort(404);
        }

        return view(
            'pages.admin.' . config('view.admin') . '.categories.edit',
            [
                'isNew'      => false,
                'category'   => $category,
                'categories' => $this->categoryRepository->all()
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
    public function update($id, CategoryRequest $request)
    {
        /** @var \App\Models\Category $category */
        $category = $this->categoryRepository->find($id);
        if (empty( $category )) {
            abort(404);
        }
        $input = $request->only(['name','slug','wildcard','color','order']);
        $input['parent_id']   = $request->get('parent_id', 0);

        $this->categoryRepository->update($category, $input);

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');

            $newImage = $this->fileUploadService->upload(
                'category_cover_image',
                $file,
                [
                    'entity_type' => 'category_cover_image',
                    'entity_id'   => $category->id,
                    'title'       => $category->name,
                ]
            );

            if (!empty($newImage)) {
                $oldImage = $category->coverImage;
                if (!empty($oldImage)) {
                    $this->fileUploadService->delete($oldImage);
                }

                $this->categoryRepository->update($category, [ 'cover_image_id' => $newImage->id ]);
            }
        }

        return redirect()->action('Admin\CategoryController@show', [$id])
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
        /** @var \App\Models\Category $category */
        $category = $this->categoryRepository->find($id);
        if (empty( $category )) {
            abort(404);
        }
        $this->categoryRepository->delete($category);

        return redirect()->action('Admin\CategoryController@index')
                    ->with('message-success', trans('admin.messages.general.delete_success'));
    }

}
