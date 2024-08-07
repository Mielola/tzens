<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Acara;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DateTimePicker;
use App\Filament\Resources\AcaraResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AcaraResource\RelationManagers;

class AcaraResource extends Resource
{
    protected static ?string $model = Acara::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('nama_acara')->required(),
                        TextInput::make('deskripsi')
                            ->required()
                            ->label('Deskirpsi acara')
                            ->maxLength(250),
                        TextInput::make('email_acara')
                            ->email(),
                        DateTimePicker::make('tanggal_mulai')
                            ->required(),
                        DateTimePicker::make('tanggal_berakhir')
                            ->required(),
                        TextInput::make('benefit')
                            ->required(),
                        TextInput::make('kategori')
                            ->required(),
                        FileUpload::make('image_acara')
                            ->image(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_acara')->searchable(),
                TextColumn::make('deskripsi')->searchable(),
                TextColumn::make('email_acara')->searchable(),
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
            'index' => Pages\ListAcaras::route('/'),
            'create' => Pages\CreateAcara::route('/create'),
            'edit' => Pages\EditAcara::route('/{record}/edit'),
        ];
    }
}
