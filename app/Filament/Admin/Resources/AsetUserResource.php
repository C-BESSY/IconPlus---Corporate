<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\AsetUserResource\Pages;
use App\Filament\Admin\Resources\AsetUserResource\RelationManagers;
use App\Models\AsetUser;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AsetUserResource extends Resource
{
    protected static ?string $model = AsetUser::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->placeholder('Nama')
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\TextInput::make('email')
                    ->placeholder('Alamat email aktif')
                    ->columnSpan(2)
                    ->required(),
                Forms\Components\TextInput::make('password')
                    ->placeholder('Masukkan password')
                    ->columnSpan(2)
                    ->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
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
            'index' => Pages\ListAsetUsers::route('/'),
            'create' => Pages\CreateAsetUser::route('/create'),
            'edit' => Pages\EditAsetUser::route('/{record}/edit'),
        ];
    }
}
