<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KarkunResource\Pages;
use App\Filament\Resources\KarkunResource\RelationManagers;
use App\Models\Karkun;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Component;

class KarkunResource extends Resource
{
    protected static ?string $model = Karkun::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function form(Form $form): Form
    {
        return $form
            ->schema(
                Card::make()->columns(2)->schema([
                Forms\Components\TextInput::make('kkname')->label('Nama')
                ->required()
                ->maxLength(255),
                Forms\Components\TextInput::make('kkid')->label('MyKad')
                ->required()
                ->maxLength(25),
                Forms\Components\TextInput::make('kkphone')->label('Telefon')
                ->maxLength(25),
                Forms\Components\TextInput::make('kkemail')->label('Email')
                ->email()
                ->maxLength(255),
                Forms\Components\Textarea::make('kknotes')->label('Nota')
                ->columnSpan(2)
                ->maxLength(255),                
            ])            
        );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kkname')->label('Nama')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('kkid')->label('MyKad')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('kkphone')->label('Telefon')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('kkemail')->label('Email')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('kknotes')->label('Nota')->limit(20)->searchable(),
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
            'index' => Pages\ManageKarkuns::route('/'),
        ];
    }    
}
