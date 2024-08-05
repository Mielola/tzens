<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Organisasi;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\OrganisasiResource\Pages;
use App\Filament\Resources\OrganisasiResource\RelationManagers;
use Filament\Tables\Columns\TextColumn;

class OrganisasiResource extends Resource
{
    protected static ?string $model = Organisasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama_organisasi')->required(),
                        TextInput::make('deskripsi')
                            ->required()
                            ->label('Deskirpsi Organisasi')
                            ->maxLength(250),
                        TextInput::make('email_organisasi')
                            ->required(),
                        DateTimePicker::make('tanggal_mulai')
                            ->required(),
                        DateTimePicker::make('tanggal_berakhir')
                            ->required(),
                        TextInput::make('benefit')
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_organisasi')->searchable(),
                TextColumn::make('deskripsi')->searchable(),
                TextColumn::make('email_organisasi')->searchable(),
                TextColumn::make('tanggal_mulai')
                    ->dateTime(),
                TextColumn::make('tanggal_berakhir')
                    ->dateTime(),
                TextColumn::make('benefit')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListOrganisasi::route('/'),
            'create' => Pages\CreateOrganisasi::route('/create'),
            'edit' => Pages\EditOrganisasi::route('/{record}/edit'),
        ];
    }
}
