<?php

namespace App\Filament\Resources\TypeQuestionResource\Pages;

use App\Filament\Resources\TypeQuestionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTypeQuestion extends EditRecord
{
    protected static string $resource = TypeQuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
