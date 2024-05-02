<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PackageResource\Pages;
use App\Filament\Resources\PackageResource\RelationManagers;
use App\Models\Benefit;
use App\Models\Package;
use App\Models\Place;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Support\Enums\IconPosition;
use Filament\Tables\Columns\ImageColumn;

class PackageResource extends Resource
{
    public static function getNavigationSort(): ?int
    {
        return 4;
    }

    protected static ?string $model = Package::class;

    protected static ?string $navigationIcon = 'heroicon-m-cube';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                TextInput::make('price')
                    ->numeric()
                    ->inputMode('decimal')
                    ->required(),
                TextInput::make('rating')
                    ->integer()
                    ->minValue(1)
                    ->maxValue(5)
                    ->suffixIcon('heroicon-s-star')
                    ->required(),
                Textarea::make('description')
                    ->columnSpan(3),
                TextInput::make('duration')
                    ->integer()
                    ->minValue(1)
                    ->required(),
                Select::make('place_id')
                    ->searchable()
                    ->required()
                    ->columnSpan(2)
                    ->options(Place::all()->pluck('name', 'id')),
                Select::make('benefits')
                    ->searchable()
                    ->required()
                    ->multiple()
                    ->options(Benefit::all()->pluck('title', 'id'))
                    ->columnSpan(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->description(fn (Package $record): string => $record->description == null ? "" : $record->description),
                TextColumn::make('price')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('duration')
                    ->icon('heroicon-m-calendar')
                    ->searchable()
                    ->sortable()
                    ->iconPosition(IconPosition::After),
                TextColumn::make('rating')
                    ->icon('heroicon-s-star')
                    ->iconPosition(IconPosition::After)
                    ->sortable()
                    ->searchable()
                    ->color('primary'),
                TextColumn::make('place.name')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('place.pictures.path')
                    ->label('Picture')
                    ->circular()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListPackages::route('/'),
            'create' => Pages\CreatePackage::route('/create'),
            'edit' => Pages\EditPackage::route('/{record}/edit'),
        ];
    }
}
