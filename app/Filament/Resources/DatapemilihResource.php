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
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use App\Filament\Resources\ValidationException;


class DatapemilihResource extends Resource
{
    protected static ?string $model = Datapemilih::class;
    protected static ?string $modelLabel = 'Data Pemilih';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('Nama')
                ->required()->label('Nama Calon Pemilih')
                ->autofocus()
                ->maxLength(255),
            Forms\Components\TextInput::make('NIK')
                ->required()->label('NIK')->numeric()
                // ->minlength(16)
                ->length(16)
                ->unique(ignoreRecord: true)
                ->maxLength(255),
            Forms\Components\TextInput::make('NomorHP')
                ->required()->label('Nomor HP')->tel()
                ->placeholder('08xxxxxxxxxxx')
                ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                // ->prefix('62')
                ->maxLength(255)->unique(ignoreRecord: true),
            Forms\Components\TextInput::make('Kampung')
                ->required()
                ->maxLength(255),
            Forms\Components\TextInput::make('Rt')
                ->required()->numeric()->label('RT')
                ->maxLength(3),
            Forms\Components\TextInput::make('Rw')
                ->required()->numeric()->label('RW')
                ->maxLength(3),
            Forms\Components\TextInput::make('Desa')
                ->required()
                ->maxLength(25),
            Forms\Components\Select::make('Kecamatan')
                ->required()
                ->options([
                    'KADUDAMPIT' => 'KADUDAMPIT',
                    'GUNUNGGURUH' => 'GUNUNGGURUH',
                    'GEGERBITUNG' => 'GEGERBITUNG',
                    'KEBONPEDES' => 'KEBONPEDES',
                    'SUKALARANG' => 'SUKALARANG',
                    'SUKABUMI' => 'SUKABUMI',
                    'CISAAT' => 'CISAAT',
                    'CIRENGHAS' => 'CIRENGHAS',
                    'SUKARAJA' => 'SUKARAJA',
                ]),
            Forms\Components\Select::make('Koordinator')
                ->required()
                ->options([
                    'GUNAWAN' => 'GUNAWAN',
                    'M. ILYAS' => 'M. ILYAS',
                    'IWAN' => 'IWAN',
                    'SAHRUL' => 'SAHRUL',
                    'ERVAN' => 'ERVAN',
                    'ASEP RAHMAT' => 'ASEP RAHMAT',
                    'TEMI' => 'TEMI',
                ]),
            Forms\Components\TextInput::make('TPS')
                ->required()->numeric()
                ->maxLength(255)->label('TPS'),
            Forms\Components\TextInput::make('Nama_Relawan')
                ->required()->label('Nama Relawan')
                ->maxLength(255),
           // ])
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

//     public static function getEloquentQuery(): Builder
// {
//     return parent::getEloquentQuery()->where('koordinator', 'like' ,'gunawan');
// }
}
