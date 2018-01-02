<?php namespace App\Http\Requests\Admin;

use App\Http\Requests\BaseRequest;
use App\Repositories\SeriesRepositoryInterface;

class SeriesRequest extends BaseRequest
{

    /** @var \App\Repositories\SeriesRepositoryInterface */
    protected $seriesRepository;

    public function __construct(SeriesRepositoryInterface $seriesRepository)
    {
        $this->seriesRepository = $seriesRepository;
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
        $id = ($this->method() == 'PUT') ? $this->route('series') : 0;

        $rules = [
            'slug'               => 'required|string|unique:series,slug,' . $id,
            'title'              => 'required|string',
            'keywords'           => 'string',
            'description'        => 'string',
            'voted'              => 'required|integer|min:0',
            'read'               => 'required|integer|min:0',
            'category_id'        => 'required|integer|min:0',
            'publish_started_at' => 'date_format:Y-m-d H:i:s|required',
            'publish_ended_at'   => 'date_format:Y-m-d H:i:s|nullable',
        ];

        return $rules;
    }

    public function messages()
    {
        return $this->seriesRepository->messages();
    }

}
