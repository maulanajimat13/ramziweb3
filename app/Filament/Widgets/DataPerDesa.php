<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\DatapemilihResource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class DataPerDesa extends BaseWidget
{
    protected static ?int $sort = 4;
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                DatapemilihResource::getEloquentQuery()
            )
            ->defaultPaginationPageOption(option: 5)
            ->defaultSort(column:'created_at', direction: 'desc')
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
                        ]);
            
    }
}
