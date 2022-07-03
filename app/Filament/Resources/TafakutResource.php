<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TafakutResource\Pages;
use App\Filament\Resources\TafakutResource\RelationManagers;
use App\Models\Tafakut;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Fieldset;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TafakutResource extends Resource
{
    use CreateRecord\Concerns\HasWizard;
    

    protected static ?string $model = Tafakut::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    protected static ?string $navigationGroup = 'Takaza';     


    public static function form(Form $form): Form
    {
        return $form 
            ->schema(     
                      
                Card::make()->columns(6)->schema([

                    Forms\Components\TextInput::make('karkun_name')->label('Nama')->required()->columnSpan(3)->maxLength(255),
                    Forms\Components\BelongsToSelect::make('mohallah_id')->label('Mohallah')->columnSpan(3)
                    ->required()->relationship('mohallah','sname')->searchable(),
                    Forms\Components\BelongsToSelect::make('karkun_id')->label('MyKad')->required()->columnSpan(2)
                    ->required()->relationship('karkun','kkid')->searchable(),
                    // Forms\Components\TextInput::make('karkun_id')->label('MyKad')->required()->columnSpan(1)->maxLength(25),
                    Forms\Components\TextInput::make('karkun_phone')->label('Phone')->columnSpan(2)->maxLength(25),
                    Forms\Components\TextInput::make('bt_address')->label('Alamat')->columnSpan(2)->maxLength(255),
                    Forms\Components\TextInput::make('bt_experiences')->label('Pengalaman')->maxLength(100)->columnSpan(2),   // 1T, 4B, 40H, 3H
                    Forms\Components\TextInput::make('bt_duration')->label('Tempoh')->required()->columnSpan(1)->maxLength(20),
                    Forms\Components\DatePicker::make('bt_checkin')->label('Tarikh Keluar')->columnSpan(1),
                    Forms\Components\TextInput::make('bt_expenses')->label('Belanja')->required()->maxLength(100)->columnSpan(1),
                    Forms\Components\Toggle::make('bt_leaves')->label('Cuti')->columnSpan(1),
                    Forms\Components\TextInput::make('bt_lastyear')->label('Tahun Lepas')->columnSpan(2)->maxLength(100),
                    Forms\Components\TextInput::make('bt_lastyroute')->label('Tempat')->columnSpan(4)->maxLength(100),
                    Forms\Components\TextInput::make('bt_last2year')->label('2 Tahun Lepas')->columnSpan(2)->maxLength(100),
                    Forms\Components\TextInput::make('bt_last2yroute')->label('Tempat')->columnSpan(4)->maxLength(100),
                    Forms\Components\Toggle::make('bt_amm_fh')->label('FH'),
                    Forms\Components\Toggle::make('bt_amm_2j')->label('2J'),
                    Forms\Components\Toggle::make('bt_amm_tm')->label('TM'),
                    Forms\Components\Toggle::make('bt_amm_g1')->label('G1'),
                    Forms\Components\Toggle::make('bt_amm_g2')->label('G2'),
                    Forms\Components\Toggle::make('bt_amm_3h')->label('3H'),
                    // Forms\Components\TextInput::make('bt_job')->label('Pekerjaan')->maxLength(100),  // Pension, Freelance, Public, Private, Student
                    Select::make('bt_job')->label('Pekerjaan')
                    ->required()
                    ->options([
                        'none' => 'Tiada',
                        'pension' => 'Pesara',
                        'freelance' => 'Sendiri',
                        'government' => 'Kerajaan',
                        'private' => 'Swasta',
                        'student' => 'Pelajar',
                    ]),
                    // Forms\Components\TextInput::make('bt_marital')->label('Taraf Perkahwinan')->maxLength(100),     // Married, Single, Widower
                    Select::make('bt_marital')->label('Taraf Perkahwinan')
                    ->required()
                    ->options([
                        'married' => 'Berkahwin',
                        'single' => 'Bujang',
                        'widower' => 'Duda',
                    ]),
                    Forms\Components\TextInput::make('bt_pasport')->label('Passport')->maxLength(20),
                    Forms\Components\TextInput::make('bt_language')->label('Bahasa')->columnSpan(3)->maxLength(100),

                    Fieldset::make('JEMAAH MASTURAT SAHAJA')
                    ->schema([
                        Card::make()->columns(6)->schema([
                            Forms\Components\TextInput::make('bt_mexp')->label('Pengalaman Masturat')->columnSpan(2)->maxLength(50),       // 2B, 40H, 10/15H, 3H, LN, IPB
                            Forms\Components\DatePicker::make('bt_mexp_date')->label('Tarikh')->columnSpan(2),
                            Forms\Components\TextInput::make('bt_mexp_route')->label('Tempat')->columnSpan(2)->maxLength(100),
                            Forms\Components\TextInput::make('bt_mexp_notes')->label('Maklumat Masturat')->columnSpan(4)->maxLength(100),
                            Forms\Components\TextInput::make('bt_mexp_relation')->label('Hubungan')->columnSpan(2)->maxLength(100),
                        ]) 
                    ]), 

                    Fieldset::make('KEPUTUSAN')
                    ->schema([
                        Card::make()->columns(6)->schema([
                            Forms\Components\TextInput::make('bt_appr1_rem')->label('Cadangan 1')->columnSpan(3)->maxLength(255),
                            Forms\Components\DatePicker::make('bt_appr1_date')->label('Tarikh'),
                            Forms\Components\TextInput::make('bt_appr1_name')->label('Nama Pencadang Tempat Sabguzari')->columnSpan(2)->maxLength(100),
                            Forms\Components\TextInput::make('bt_appr2_rem')->label('Cadangan 2')->columnSpan(3)->maxLength(255),
                            Forms\Components\DatePicker::make('bt_appr2_date')->label('Tarikh'),
                            Forms\Components\TextInput::make('bt_appr2_name')->label('Nama Syura Pencadang')->columnSpan(2)->maxLength(100),
                            Forms\Components\Textarea::make('bt_notes')->label('Nota')->columnSpan(6)->maxLength(255),                          
                        ]) 
                    ])                     
                ])                       
            );
    }

    public static function table(Table $table): Table
    {

        return $table
      
            ->columns([
                Tables\Columns\TextColumn::make('karkun_id')->label('Nama')->searchable()->sortable(),
                // Tables\Columns\TextColumn::make('bt_kkid')->label('MyKad')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('mohallah.sname')->label('Mohallah')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('bt_duration')->label('Tempoh')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('bt_checkin')->label('Tarikh Keluar')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('bt_expenses')->label('Belanja')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('bt_appr2_rem')->label('Status')->searchable()->sortable(),
                // Tables\Columns\TextColumn::make('bt_experiences')->label('Pengalaman')->searchable()->sortable(),
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
            'index' => Pages\ListTafakuts::route('/'),
            'create' => Pages\CreateTafakut::route('/create'),
            'edit' => Pages\EditTafakut::route('/{record}/edit'),
            'print' => Pages\PrintTafakuts::route('/{record}/print'),
        ];
    }    
}
