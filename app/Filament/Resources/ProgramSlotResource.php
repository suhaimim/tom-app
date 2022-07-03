<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProgramSlotResource\Pages;
use App\Filament\Resources\ProgramSlotResource\RelationManagers;
use App\Models\ProgramSlot;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProgramSlotResource extends Resource
{
    protected static ?string $model = ProgramSlot::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProgramSlots::route('/'),
            'create' => Pages\CreateProgramSlot::route('/create'),
            'edit' => Pages\EditProgramSlot::route('/{record}/edit'),
        ];
    }    
}
