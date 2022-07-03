<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MarkazResource\Pages;
use App\Filament\Resources\MarkazResource\RelationManagers;
use App\Models\Markaz;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MarkazResource extends Resource
{
    protected static ?string $model = Markaz::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationGroup = 'Locations';    

    protected static ?int $navigationSort = 4;       

    public static function form(Form $form): Form
    {
        return $form
        ->schema(
            Card::make()->columns(2)->schema([
                Forms\Components\BelongsToSelect::make('teritory_id')->label('Teritory')
                ->required()
                ->relationship('teritory','tname'),
                Forms\Components\TextInput::make('mname')->label('Markaz')
                ->required()
                ->maxLength(100),
                Forms\Components\Textarea::make('mnotes')->label('Nota')
                ->columnSpan(2)
                ->maxLength(255),
            ])            
        );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('mname')->label('Markaz')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('teritory.tname')->label('Teritory')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('teritory.country.cabbr')->label('Country')->searchable(),
                Tables\Columns\TextColumn::make('mnotes')->label('Nota')->searchable()->sortable(),
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
            'index' => Pages\ManageMarkazs::route('/'),
        ];
    }    
}
