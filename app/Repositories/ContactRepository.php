<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ContactRepositoryInteface;
use App\Models\Contact;



class ContactRepository implements ContactRepositoryInteface
{
    protected $model;

    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

    public function allContact($data = [])
    {
        $message = $data['message'] ?? null;
        $name = $data['name'] ?? null;
        $dateFrom = $data['dateFrom'] ?? null;
        $dateTo = $data['dateTo'] ?? null;
    
        $recruitments = $this->model->when($name, function ($q) use ($name) {
                                        $q->where('full_name', 'like', '%' . $name . '%');
                                    })
                                    ->when($message, function ($query) use ($message) {
                                        $query->where('message', 'like', '%' . $message . '%');
                                    })
                                    ->when($dateFrom && $dateTo, function ($query) use ($dateFrom, $dateTo) {
                                        $query->whereBetween('created_at', [$dateFrom, $dateTo]);
                                    })
                                    ->paginate(5);
    
        return $recruitments;
    }
    
}    