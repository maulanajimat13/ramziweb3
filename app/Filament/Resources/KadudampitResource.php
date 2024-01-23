<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KadudampitResource\Pages;
use App\Filament\Resources\DatapemilihResource\RelationManagers;
use App\Models\Datapemilih;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Card;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use App\Filament\Resources\ValidationException;
use pxlrbt\FilamentExcel\Actions\Tables\ExportAction;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class KadudampitResource extends Resource
{
    protected static ?string $model = Datapemilih::class;
    protected static ?string $modelLabel = 'Kadudampit';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Download Nomor';

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKadudampits::route('/'),
            'create' => Pages\CreateKadudampit::route('/create'),
            //'edit' => Pages\EditKadudampit::route('/{record}/edit'),
        ];
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Nama')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('NIK')
                //     ->searchable()->label('NIK'),
                Tables\Columns\TextColumn::make('NomorHP')
                    ->searchable()->label('Nomor HP'),
                // Tables\Columns\TextColumn::make('Kampung')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('Rt')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('Rw')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('Desa')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('Kecamatan')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('TPS')
                //     ->searchable()->label('TPS'),
                // Tables\Columns\TextColumn::make('Nama_Relawan')
                //     ->searchable()->label('Nama Relawan'),
                // Tables\Columns\TextColumn::make('Koordinator')
                //     ->searchable(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()
                //     ->sortable(),
                    //->toggleable(isToggledHiddenByDefault: true),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()
                //     ->sortable()
                //     ->toggleable(isToggledHiddenByDefault: true),
            ]);
            // ->filters([
            //     //
            // ])
            // ->actions([
            //     Tables\Actions\EditAction::make(),
            //     ExportAction::make()->exports([
            //         ExcelExport::make('table')->fromTable()
            //     ]),
            // ])
            
            // ->bulkActions([
            //     ExportBulkAction::make(),
            //     Tables\Actions\BulkActionGroup::make([
            //         Tables\Actions\DeleteBulkAction::make(),
            //     ]),
            
            
    }
    
    
    public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()->where('koordinator', 'like' ,'gunawan');
}
}
