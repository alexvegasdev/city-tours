<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PlaceResource\Pages;
use App\Filament\Resources\PlaceResource\RelationManagers;
use App\Models\Category;
use App\Models\Place;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;

class PlaceResource extends Resource
{
    protected static ?int $navigationSort = 3;

    protected static ?string $model = Place::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                    Select::make('categories')
                    ->multiple()
                    ->searchable()
                    ->relationship('categories', 'name')
                    ->preload(),
                Textarea::make('description')
                    ->label('Description')
                    ->maxLength(255)
                    ->rows(3)
                    ->columnSpan(2),
                FileUpload::make('pictures')
                    ->label('Pictures')
                    ->columnspan(2)
                    ->required()
                    ->multiple()
                    ->acceptedFileTypes(['image/jpeg', 'image/png'])
                    ->directory('places')
                    ->image()
                    ->visibleOn(['create'])
                    ->previewable(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('categories.name')
                    ->default('Not category')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('pictures.path')
                    ->label('Pictures')
                    ->stacked()
                    ->limit(3)
                    ->circular()
                    ->limitedRemainingText()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlaces::route('/'),
            'create' => Pages\CreatePlace::route('/create'),
            'edit' => Pages\EditPlace::route('/{record}/edit'),
        ];
    }
}
