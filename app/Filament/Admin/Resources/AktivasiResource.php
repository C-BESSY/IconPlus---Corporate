<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AktivasiResource\Pages;
use App\Filament\Resources\AktivasiResource\RelationManagers;
use App\Models\Aktivasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AktivasiResource extends Resource
{
    protected static ?string $model = Aktivasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tanggal_baa')->label('Tanggal BAA')->required(),
                Forms\Components\TextInput::make('target_aktivasi')->label('Target Aktivasi')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_aktivasi')->label('ID')->searchable(),
                Tables\Columns\TextColumn::make('tanggal_baa')->label('Tgl. BAA')->searchable(),
                Tables\Columns\TextColumn::make('target_aktivasi')->label('Target Aktivasi')->searchable(),
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
            'index' => Pages\ListAktivasis::route('/'),
            'create' => Pages\CreateAktivasi::route('/create'),
            'edit' => Pages\EditAktivasi::route('/{record}/edit'),
        ];
    }
}
