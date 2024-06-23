<?php

namespace App\Filament\Resources\TypeQuestionResource\Pages;

use App\Filament\Resources\TypeQuestionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTypeQuestions extends ListRecords
{
    protected static string $resource = TypeQuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
