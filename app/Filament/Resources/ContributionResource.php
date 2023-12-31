<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContributionResource\Pages;
use App\Filament\Resources\ContributionResource\RelationManagers;
use App\Models\Contribution;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContributionResource extends Resource
{
    protected static ?string $model = Contribution::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('customer_storage_id')
                    ->label('Customer storage')
                    ->relationship('customerStorage', 'name')
                    ->preload()
                    ->required(),

                Forms\Components\TextInput::make('file_count')
                    ->required()
                    ->numeric(),

                Forms\Components\TextInput::make('value')
                    ->required()
                    ->numeric(),

                Forms\Components\Select::make('unit_id')
                    ->label('Measurement unit')
                    ->relationship('unit', 'abbreviation')
                    ->preload()
                    ->required(),

                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->numeric(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->numeric()
                    ->icon('heroicon-s-user')
                    ->sortable(),
                Tables\Columns\TextColumn::make('customerStorage.name')
                    ->numeric()
                    ->icon('tabler-chevron-right')
                    ->sortable(),
                Tables\Columns\TextColumn::make('file_count')
                    ->numeric()
                    ->icon('tabler-files')
                    ->sortable(),
                Tables\Columns\TextColumn::make('value')
                    ->numeric()
                    ->icon('tabler-database-minus')
                    ->sortable(),
                Tables\Columns\TextColumn::make('unit.abbreviation')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListContributions::route('/'),
            'create' => Pages\CreateContribution::route('/create'),
            'edit' => Pages\EditContribution::route('/{record}/edit'),
        ];
    }
}
