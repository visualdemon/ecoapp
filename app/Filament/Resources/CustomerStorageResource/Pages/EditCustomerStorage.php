<?php

namespace App\Filament\Resources\CustomerStorageResource\Pages;

use App\Filament\Resources\CustomerStorageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomerStorage extends EditRecord
{
    protected static string $resource = CustomerStorageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
