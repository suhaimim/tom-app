<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JemaahResource\Pages;
use App\Filament\Resources\JemaahResource\RelationManagers;
use App\Models\Jemaah;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JemaahResource extends Resource
{
    protected static ?string $model = Jemaah::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Takaza';   

    public static function form(Form $form): Form
    {
        return $form
            ->schema(           
                Card::make()->columns(6)->schema([
                    Forms\Components\BelongsToSelect::make('halqah_id')->label('Halqah')->columnSpan(3)
                    ->required()->relationship('halqah','hname')->searchable(),
                    Forms\Components\TextInput::make('bj_no')->label('No. Jemaah')->required()->columnSpan(1)->maxLength(25),
                    Forms\Components\TextInput::make('bj_jenis')->label('Jenis Jemaah')->required()->columnSpan(2)->maxLength(25),
                    Forms\Components\TextInput::make('bj_route')->label('Route')->required()->columnSpan(3)->maxLength(25),
                    Forms\Components\DatePicker::make('bj_dateout')->label('Tarikh Keluar')->required()->columnSpan(1),
                    Forms\Components\DatePicker::make('bj_datereport')->label('Tarikh Kharguzari')->required()->columnSpan(1),
                    Forms\Components\DatePicker::make('bj_datedismiss')->label('Tarikh Wapsi')->required()->columnSpan(1),

                    Repeater::make('AHLI')->columnSpan(6)->schema([
                        Forms\Components\TextInput::make('karkun_name')->label('Nama')->required()->maxLength(255),
                        Forms\Components\TextInput::make('karkun_id')->label('MyKad')->required()->maxLength(25),
                        Forms\Components\TextInput::make('karkun_notes')->label('Catatan')->columnSpan(2)->maxLength(255),
                    ])
                    
                    ->createItemButtonLabel('Add member'),
    
                    Forms\Components\Textarea::make('bj_notes')->label('Nota')->columnSpan(6)->maxLength(255),  
                ]),
                
        );
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bj_no')->label('No.Jemaah')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('bj_jenis')->label('Jenis Jemaah')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('bj_route')->label('Route')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('bj_dateout')->label('Khuruj')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('bj_datereport')->label('Kharguzari')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('bj_datedismiss')->label('Wapsi')->searchable()->sortable(),
                // Tables\Columns\TextColumn::make('bj_notes')->label('Nota')->limit(20)->searchable(),
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
            'index' => Pages\ListJemaahs::route('/'),
            'create' => Pages\CreateJemaah::route('/create'),
            'edit' => Pages\EditJemaah::route('/{record}/edit'),
        ];
    }    
}
