<?php

namespace GeneaLabs\LaravelNovaCategories;

use GeneaLabs\LaravelOverridableModel\Contracts\OverridableModel;
use GeneaLabs\LaravelOverridableModel\Traits\Overridable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements OverridableModel
{
    use Overridable;

    protected $fillable = [
        "description",
        "name",
    ];
}
