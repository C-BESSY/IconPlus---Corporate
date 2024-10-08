<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\KendalaResource\Pages;
use App\Filament\Resources\KendalaResource\RelationManagers;
use App\Models\Kendala;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class KendalaResource extends Resource
{
    protected static ?string $model = Kendala::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Master Data';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kendala_global_new')->label('Kendala Global')->required(),
                Forms\Components\TextInput::make('kendala_pa_new')->label('Kendala PA')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_kendala')->label('ID')->searchable(),
                Tables\Columns\TextColumn::make('kendala_global_new')->label('Kendala Global')->searchable(),
                Tables\Columns\TextColumn::make('kendala_pa_new')->label('Kendala PA')->searchable(),
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
            'index' => Pages\ListKendalas::route('/'),
            'create' => Pages\CreateKendala::route('/create'),
            'edit' => Pages\EditKendala::route('/{record}/edit'),
        ];
    }
}
