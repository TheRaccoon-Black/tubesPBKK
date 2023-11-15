<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EntriResource\Pages;
use App\Filament\Resources\EntriResource\RelationManagers;
use App\Models\Entri;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EntriResource extends Resource
{
    protected static ?string $model = Entri::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('transaksi_id')
                ->required()
                ->relationship('transaksi','keterangan'),
                // Select::make('akun_id')
                // ->required()
                // ->relationship('akun','tipe_akun'),
                // TextInput::make('akun_id'),
                // TextInput::make('transaksi_id'),
                TextInput::make('debit')
                    ->numeric(),
                TextInput::make('kredit')
                    ->numeric()





            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
            TextColumn::make('transaksi_id')
            ->label('transaksi'),
            TextColumn::make('debit'),
            TextColumn::make('kredit')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListEntris::route('/'),
            'create' => Pages\CreateEntri::route('/create'),
            'edit' => Pages\EditEntri::route('/{record}/edit'),
        ];
    }
}
