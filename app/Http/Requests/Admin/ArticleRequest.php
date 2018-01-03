<?php namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseRequest;
use App\Repositories\ArticleRepositoryInterface;

class ArticleRequest extends BaseRequest
{

    /** @var \App\Repositories\ArticleRepositoryInterface */
    protected $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'title'              => 'required|string',
            'keywords'           => 'string',
            'description'        => 'string',
            'content'            => 'string|required',
            'voted'              => 'required|integer|min:0',
            'read'               => 'required|integer|min:0',
            'category_id'        => 'required|integer|min:0',
            'series_id'          => 'nullable|integer|min:0',
            'publish_started_at' => 'date_format:Y-m-d H:i:s|required',
            'publish_ended_at'   => 'date_format:Y-m-d H:i:s|nullable',
        ];

        if($this->method() == 'PUT') {
            $id = $this->route('article');
            $rules['slug'] = 'required|string|unique:articles,slug,' . $id;
        }

        return $rules;
    }

    public function messages()
    {
        return $this->articleRepository->messages();
    }

}
