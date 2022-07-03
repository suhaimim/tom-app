<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IndukResource\Pages;
use App\Filament\Resources\IndukResource\RelationManagers;
use App\Models\Induk;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IndukResource extends Resource
{
    protected static ?string $model = Induk::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationGroup = 'Locations';    

    protected static ?int $navigationSort = 5;       

    public static function form(Form $form): Form
    {
        return $form
        ->schema(
            Card::make()->columns(2)->schema([
                Forms\Components\BelongsToSelect::make('markaz_id')->label('Markaz')
                ->required()
                ->relationship('markaz','mname'),
                Forms\Components\TextInput::make('iname')->label('Induk')
                ->required()
                ->maxLength(100),
                Forms\Components\Textarea::make('inotes')->label('Nota')
                ->columnSpan(2)
                ->maxLength(255),
            ])            
        );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('iname')->label('Induk')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('markaz.mname')->label('Markaz')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('markaz.teritory.tname')->label('Teritory')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('markaz.teritory.country.cabbr')->label('Country')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('inotes')->label('Nota')->searchable(),
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
            'index' => Pages\ManageInduks::route('/'),
        ];
    }    
}
