<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AmalResource\Pages;
use App\Filament\Resources\AmalResource\RelationManagers;
use App\Models\Amal;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AmalResource extends Resource
{
    protected static ?string $model = Amal::class;

    protected static ?string $navigationIcon = 'heroicon-o-trending-up';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('aabbr')->label('Abbr')
                ->required()
                ->maxLength(50),
                Forms\Components\TextInput::make('aname')->label('Amal')
                ->required()
                ->maxLength(200),
                Forms\Components\Textarea::make('anotes')->label('Nota')
                ->columnSpan(2)
                ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('aabbr')->label('Abbr')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('aname')->label('Amal')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('anotes')->label('Nota')->limit(50)->searchable(),
                // Tables\Columns\TextColumn::make('created_at')
                //     ->dateTime()->sortable(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime()->sortable(),                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAmals::route('/'),
        ];
    }    
}
