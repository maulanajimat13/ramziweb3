<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AsepResource\Pages;
use App\Filament\Resources\AsepResource\RelationManagers;
use App\Models\Asep;
use App\Models\datapemilih;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AsepResource extends Resource
{
    protected static ?string $model = datapemilih::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'ASEP RAHMAT';
    protected static ?string $navigationGroup = 'Data Download Koordinator';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            // Card::make('GUNAWAN', datapemilih::query()->where('Koordinator', 'GUNAWAN')->count())->description('orang')
            // ->descriptionIcon('heroicon-m-identification'),
            // Card::make('M. ILYAS', datapemilih::query()->where('Koordinator', 'M. ILYAS')->count())->description('orang')
            // ->descriptionIcon('heroicon-m-identification'),
            // Card::make('IWAN', datapemilih::query()->where('Koordinator', 'IWAN')->count())->description('orang')
            // ->descriptionIcon('heroicon-m-identification'),
            // Card::make('SAHRUL', datapemilih::query()->where('Koordinator', 'SAHRUL')->count())->description('orang')
            // ->descriptionIcon('heroicon-m-identification'),
            // Card::make('ERVAN', datapemilih::query()->where('Koordinator', 'ERVAN')->count())->description('orang')
            // ->descriptionIcon('heroicon-m-identification'),
            // Card::make('ASEP RAHMAT', datapemilih::query()->where('Koordinator', 'ASEP RAHMAT')->count())->description('orang')
            // ->descriptionIcon('heroicon-m-identification'),
            // Card::make('TEMI', datapemilih::query()->where('Koordinator', 'TEMI')->count())->description('orang')
            // ->descriptionIcon('heroicon-m-identification'),
                
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
            'index' => Pages\ListAseps::route('/'),
            'create' => Pages\CreateAsep::route('/create'),
            'edit' => Pages\EditAsep::route('/{record}/edit'),
        ];
    }
    public static function getEloquentQuery(): Builder
{
    return parent::getEloquentQuery()->where('koordinator', 'like' ,'asep rahmat');
}
}
