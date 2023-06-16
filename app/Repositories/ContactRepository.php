<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ContactRepositoryInteface;
use App\Models\Contact;

class ContactRepository implements ContactRepositoryInteface
{    
    /**
     * model
     *
     * @var mixed
     */
    protected $model;  
      
    /**
     * configContact
     *
     * @var mixed
     */
    protected $configContact;
    
    /**
     * __construct
     *
     * @param  mixed $model
     * @return void
     */
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }
    
    /**
     * allContact
     *
     * @param  mixed $data
     * @return void
     */
    public function allContact($data = [])
    {
        $message = $data['message'] ?? null;
        $name = $data['name'] ?? null;
        $dateFrom = $data['dateFrom'] ?? null;
        $dateTo = $data['dateTo'] ?? null;
    
        return $this->model->when(!empty($name), function ($q) use ($name) {
                        $q->where('full_name', 'like', '%' . $name . '%');
                    })
                    ->when(!empty($message), function ($query) use ($message) {
                        $query->where('message', 'like', '%' . $message . '%');
                    })
                    ->when(!empty($dateFrom), function ($query) use ($dateFrom) {
                        $query->whereDate('created_at', '>=', $dateFrom);
                    })
                    ->when(!empty($dateTo), function ($query) use ($dateTo) {
                        $query->whereDate('created_at', '<=', $dateTo);
                    })
                    ->paginate();
    }
        
    /**
     * submitContact
     *
     * @param  mixed $data
     * @return void
     */
    public function submitContact($data)
    {
        $submitContact = [];
        $submitContact['email'] = $data['email'];
        $submitContact['full_name'] = $data['name'];
        $submitContact['phone'] = $data['phone'];
        $submitContact['message'] = $data['message'];

        $this->model->create($submitContact);
    }
}    
