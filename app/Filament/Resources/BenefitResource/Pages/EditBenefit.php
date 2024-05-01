<?php

namespace App\Filament\Resources\BenefitResource\Pages;

use App\Filament\Resources\BenefitResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBenefit extends EditRecord
{
    protected static string $resource = BenefitResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
