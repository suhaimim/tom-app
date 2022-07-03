<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AbadiMasjidResource\Pages;
use App\Filament\Resources\AbadiMasjidResource\RelationManagers;
use App\Models\AbadiMasjid;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbadiMasjidResource extends Resource
{
    protected static ?string $model = AbadiMasjid::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Takaza';        

    public static function form(Form $form): Form
    {
        return $form
        ->schema(
            Card::make()->columns(1)->schema([
                Forms\Components\BelongsToSelect::make('mohallah_id')->label('Mohallah')
                ->required()
                ->relationship('mohallah','sname')->searchable(),
                Forms\Components\BelongsToSelect::make('amal_id')->label('Amal')
                ->required()
                ->relationship('amal','aname')->searchable(),
                Forms\Components\BelongsToSelect::make('karkun_id')->label('Karkun')
                ->required()
                ->relationship('karkun','kkname')->searchable(),
                Forms\Components\Textarea::make('notes')->label('Nota')
                ->maxLength(255),
            ])            
        );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('mohallah.sname')->label('Mohallah')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('amal.aname')->label('Amal')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('karkun.kkname')->label('Karkun')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('notes')->label('Nota')->limit(50)->searchable(),
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
            'index' => Pages\ManageAbadiMasjids::route('/'),
        ];
    }    
}
