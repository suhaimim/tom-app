<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CountryResource\Pages;
use App\Filament\Resources\CountryResource\RelationManagers;
use App\Models\Country;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CountryResource extends Resource
{
    protected static ?string $model = Country::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationGroup = 'Locations';   
    
    protected static ?int $navigationSort = 1;      

    public static function form(Form $form): Form
    {
        return $form
        ->schema(
            Card::make()->columns(3)->schema([
                Forms\Components\TextInput::make('cabbr')->label('Abbr')
                ->required()
                ->maxLength(50),
                Forms\Components\TextInput::make('ccode')->label('Kod')
                ->maxLength(50),
                Forms\Components\TextInput::make('cname')->label('Nama')
                ->required()
                ->maxLength(50),
                Forms\Components\Textarea::make('cnotes')->label('Nota')
                ->columnSpan(3)
                ->maxLength(255),
            ])            
        );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('cabbr')->label('Abbr')->searchable(),
                Tables\Columns\TextColumn::make('cname')->label('Nama')->searchable(),
                Tables\Columns\TextColumn::make('ccode')->label('Kod')->searchable(),
                Tables\Columns\TextColumn::make('cnotes')->label('Nota'),
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
            'index' => Pages\ManageCountries::route('/'),
        ];
    }    
}
