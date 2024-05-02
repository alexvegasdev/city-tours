<?php

namespace App\Filament\Resources\PlaceResource\Pages;

use App\Filament\Resources\PlaceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;

class EditPlace extends EditRecord
{
    protected static string $resource = PlaceResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $categories = $data['categories'] ?? [];

        unset($data['categories']);

        $record->update($data);

        $record->categories()->attach($categories);

        return $record;
    }


    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
