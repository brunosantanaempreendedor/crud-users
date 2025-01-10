<?php

namespace App\Observers;

use App\Models\User as Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;


class UsersObserver
{
    public function created(Model $model)
    {
    }

    public function creating(Model $model)
    {
        $model->uuid = Uuid::uuid4();
    }


    public function updated(Model $model)
    {

    }


    public function deleted(Model $model)
    {

    }


    public function restored(Model $model)
    {
    }


    public function forceDeleted(Model $model)
    {
    }
}
