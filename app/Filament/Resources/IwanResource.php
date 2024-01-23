<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IwanResource\Pages;
use App\Filament\Resources\IwanResource\RelationManagers;
use App\Models\datapemilih;
use App\Models\Iwan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IwanResource extends Resource
{
    protected static ?string $model = datapemilih::class;
    protected static ?string $navigationGroup = 'Data Download Koordinator';
    protected static ?string $modelLabel = 'IWAN';

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
               
            ]);    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListIwans::route('/'),
            'create' => Pages\CreateIwan::route('/create'),
            'edit' => Pages\EditIwan::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()->where('koordinator', 'like' ,'iwan');
}
}
