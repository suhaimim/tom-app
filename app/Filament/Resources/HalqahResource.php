<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HalqahResource\Pages;
use App\Filament\Resources\HalqahResource\RelationManagers;
use App\Models\Halqah;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HalqahResource extends Resource
{
    protected static ?string $model = Halqah::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationGroup = 'Locations';    

    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
        ->schema(
            Card::make()->columns(2)->schema([
                Forms\Components\TextInput::make('hname')->label('Halqah')
                ->required()
                ->maxLength(100),
                Forms\Components\BelongsToSelect::make('induk_id')->label('Induk')
                ->required()
                ->relationship('induk','iname'),
                Forms\Components\Textarea::make('hnotes')->label('Nota')
                ->columnSpan(2)
                ->maxLength(255),
            ])            
        );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('hname')->label('Halqah')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('induk.iname')->label('Induk')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('induk.markaz.mname')->label('Markaz')->searchable()->sortable(),
                // Tables\Columns\TextColumn::make('induk.markaz.teritory.tname')->label('Teritory')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('induk.markaz.teritory.country.cabbr')->label('Country')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('hnotes')->label('Nota')->searchable(),
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
            'index' => Pages\ManageHalqahs::route('/'),
        ];
    }    
}
