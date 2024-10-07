<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\InstalasiResource\Pages;
use App\Filament\Resources\InstalasiResource\RelationManagers;
use App\Models\Instalasi;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InstalasiResource extends Resource
{
    protected static ?string $model = Instalasi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tanggal_bai')->label('Tgl. BAI')->required(),
                Forms\Components\TextInput::make('aging_bai')->label('Aging BAI')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_instalasi')->label('ID')->searchable(),
                Tables\Columns\TextColumn::make('tanggal_bai')->label('Tgl. BAI')->searchable(),
                Tables\Columns\TextColumn::make('aging_bai')->label('Aging BAI')->searchable(),
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
            'index' => Pages\ListInstalasis::route('/'),
            'create' => Pages\CreateInstalasi::route('/create'),
            'edit' => Pages\EditInstalasi::route('/{record}/edit'),
        ];
    }
}
