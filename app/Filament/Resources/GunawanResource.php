<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GunawanResource\Pages;
use App\Filament\Resources\GunawanResource\RelationManagers;
use App\Models\datapemilih;
use App\Models\Gunawan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class GunawanResource extends Resource
{
    protected static ?string $model = datapemilih::class;
    protected static ?string $navigationGroup = 'Data Download Koordinator';
    protected static ?string $modelLabel = 'GUNAWAN';

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
                Tables\Columns\TextColumn::make('NIK')
                    ->searchable()->label('NIK'),
                Tables\Columns\TextColumn::make('NomorHP')
                    ->searchable()->label('Nomor HP'),
                Tables\Columns\TextColumn::make('Kampung')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Rt')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Rw')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Desa')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Kecamatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('TPS')
                    ->searchable()->label('TPS'),
                Tables\Columns\TextColumn::make('Nama_Relawan')
                    ->searchable()->label('Nama Relawan'),
                Tables\Columns\TextColumn::make('Koordinator')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            
            ;
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
            'index' => Pages\ListGunawans::route('/'),
            'create' => Pages\CreateGunawan::route('/create'),
            'edit' => Pages\EditGunawan::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()->where('koordinator', 'like' ,'gunawan');
}
}

