<?php

namespace App\Filament\Resources\Speakers\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SpeakerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('role'),
                TextInput::make('organization'),
                FileUpload::make('image_url')
                    ->image(),
            ]);
    }
}
