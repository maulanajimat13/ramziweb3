<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DatapemilihResource\Pages;
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

class DatapemilihResource extends Resource
{
    protected static ?string $model = Datapemilih::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                Forms\Components\TextInput::make('Nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('NIK')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('NomorHP')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Kampung')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Rt')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Rw')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Desa')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Kecamatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('TPS')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Nama_Relawan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Koordinator')
                    ->required()
                    ->maxLength(255),
                ])
                ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('NIK')
                    ->searchable(),
                Tables\Columns\TextColumn::make('NomorHP')
                    ->searchable(),
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
                    ->searchable(),
                Tables\Columns\TextColumn::make('Nama_Relawan')
                    ->searchable(),
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
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListDatapemilihs::route('/'),
            'create' => Pages\CreateDatapemilih::route('/create'),
            'edit' => Pages\EditDatapemilih::route('/{record}/edit'),
        ];
    }
}
