<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ErvanResource\Pages;
use App\Filament\Resources\ErvanResource\RelationManagers;
use App\Models\datapemilih;
use App\Models\Ervan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ErvanResource extends Resource
{
    protected static ?string $model = datapemilih::class;
    protected static ?string $navigationGroup = 'Data Download Koordinator';
    protected static ?string $modelLabel = 'ERVAN';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('NomorHP')
                    ->searchable()->label('Nomor HP'),
               
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
            'index' => Pages\ListErvans::route('/'),
            'create' => Pages\CreateErvan::route('/create'),
            'edit' => Pages\EditErvan::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()->where('koordinator', 'like' ,'ervan');
}
}
