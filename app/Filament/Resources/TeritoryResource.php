<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TeritoryResource\Pages;
use App\Filament\Resources\TeritoryResource\RelationManagers;
use App\Models\Teritory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeritoryResource extends Resource
{
    protected static ?string $model = Teritory::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationGroup = 'Locations'; 

    protected static ?int $navigationSort = 2;    

    public static function form(Form $form): Form
    {
        return $form
        ->schema(
            Card::make()->columns(2)->schema([
                Forms\Components\BelongsToSelect::make('country_id')->label('Country')
                ->required()
                ->relationship('country','cname'),
                Forms\Components\TextInput::make('tname')->label('Teritory')
                ->required()
                ->maxLength(100),
                Forms\Components\Textarea::make('tnotes')->label('Nota')
                ->columnSpan(2)
                ->maxLength(255), 
            ])            
        );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tname')->label('Teritory')->searchable(),
                Tables\Columns\TextColumn::make('country.cname')->label('Country')->searchable(),
                Tables\Columns\TextColumn::make('tnotes')->label('Nota')->searchable(),
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
            'index' => Pages\ManageTeritories::route('/'),
        ];
    }  
    
    
    public static function relations()
    {
        return [
            RelationManagers\OrdersRelationManager::class,
        ];
    }

}
