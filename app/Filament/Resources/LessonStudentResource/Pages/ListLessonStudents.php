<?php

namespace App\Filament\Resources\LessonStudentResource\Pages;

use App\Filament\Resources\LessonStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLessonStudents extends ListRecords
{
    protected static string $resource = LessonStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
