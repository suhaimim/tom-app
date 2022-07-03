<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MohallahResource\Pages;
use App\Filament\Resources\MohallahResource\RelationManagers;
use App\Models\Mohallah;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MohallahResource extends Resource
{
    protected static ?string $model = Mohallah::class;

    protected static ?string $navigationIcon = 'heroicon-o-flag';

    protected static ?string $navigationGroup = 'Locations';    

    protected static ?int $navigationSort = 7;       

    public static function form(Form $form): Form
    {
        return $form
        ->schema(
            Card::make()->columns(2)->schema([
                Forms\Components\TextInput::make('sname')->label('Mohallah')
                ->required()
                ->maxLength(100),
                Forms\Components\BelongsToSelect::make('halqah_id')->label('Halqah')
                ->required()
                ->relationship('halqah','hname'),
                Forms\Components\Textarea::make('snotes')->label('Nota')
                ->columnSpan(2)
                ->maxLength(255),
            ])            
        );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('sname')->label('Mohallah')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('halqah.hname')->label('Halqah')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('halqah.induk.iname')->label('Induk')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('halqah.induk.markaz.mname')->label('Markaz')->searchable()->sortable(),
                // Tables\Columns\TextColumn::make('halqah.induk.markaz.teritory.tname')->label('Teritory')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('halqah.induk.markaz.teritory.country.cabbr')->label('Country')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('snotes')->label('Nota')->searchable(),
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
            'index' => Pages\ManageMohallahs::route('/'),
        ];
    }    
}
