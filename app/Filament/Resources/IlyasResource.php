<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IlyasResource\Pages;
use App\Filament\Resources\IlyasResource\RelationManagers;
use App\Models\datapemilih;
use App\Models\Ilyas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;
use pxlrbt\FilamentExcel\Exports\ExcelExport;

class IlyasResource extends Resource
{
    protected static ?string $model = datapemilih::class;
    protected static ?string $navigationGroup = 'Data Download Koordinator';
    protected static ?string $modelLabel = 'ILYAS';

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
            'index' => Pages\ListIlyas::route('/'),
            'create' => Pages\CreateIlyas::route('/create'),
            'edit' => Pages\EditIlyas::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()->where('koordinator', 'like' ,'m. ilyas');
}
protected function getHeaderActions(): array
    {
        return [
            ExportAction::make()
            ->label('Download Data : Gunawan')
            ->exports([
                ExcelExport::make('datapemilihs')->fromModel()//->only(['Nama','NomorHP'])
                ->modifyQueryUsing(fn ($query) => $query->where('koordinator','like','m. ilyas'))
                ->withFilename('ilyas')
            ])
            //Actions\CreateAction::make(),
        ];
    }
}
