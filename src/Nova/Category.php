<?php

namespace GeneaLabs\LaravelNovaCategories\Nova;

use GeneaLabs\LaravelNovaBlog\Category as CategoryModel;
use GeneaLabs\NovaFileUploadField\FileUpload;
use GeneaLabs\NovaGutenberg\Gutenberg;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Resource as NovaResource;

class Category extends NovaResource
{
    public static $model = CategoryModel::class;
    public static $title = 'name';
    public static $search = [
        'name',
        'description',
    ];

    public static function label()
    {
        return "Categories";
    }

    public function fields(Request $request)
    {
        return [
            ID::make()
                ->sortable(),
            Text::make("Title"),
            Textarea::make("Description"),
        ];
    }
}
