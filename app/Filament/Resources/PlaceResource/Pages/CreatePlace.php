<?php

namespace App\Filament\Resources\PlaceResource\Pages;

use App\Filament\Resources\PlaceResource;
use App\Models\Category;
use App\Models\Place;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreatePlace extends CreateRecord
{
    protected static string $resource = PlaceResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $categories = $data['categories'];
        $pictures = $data['pictures'];

        unset($data['categories']);
        unset($data['pictures']);

        $place = static::getModel()::create($data);
        $place->categories()->attach($categories);

        foreach ($pictures as $value) {
            $place->pictures()->create(['type' => 'r', 'path' => $value]);
        }

        return $place;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
