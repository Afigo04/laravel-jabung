<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkKehilanganResource\Pages;
use App\Filament\Resources\SkKehilanganResource\RelationManagers;
use App\Models\SkKehilangan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SkKehilanganResource extends Resource
{
    protected static ?string $model = SkKehilangan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nomor_sk')
                    ->default(null),
                Forms\Components\TextInput::make('nama_lengkap')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nik')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('nkk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ttl')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('gender')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kewarganegaraan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('pekerjaan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('agama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('alamat')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tanggal_hilang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('barang_hilang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('waktu_hilang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tempat_hilang')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('keperluan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('no_whatsapp')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nomor_sk')
                    ->sortable(),
                Tables\Columns\TextColumn::make('nama_lengkap')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nik')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nkk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('ttl')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
                    ->searchable(),
                Tables\Columns\TextColumn::make('kewarganegaraan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pekerjaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('agama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alamat')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tanggal_hilang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('barang_hilang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('waktu_hilang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tempat_hilang')
                    ->searchable(),
                Tables\Columns\TextColumn::make('keperluan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('no_whatsapp')
                    ->searchable(),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListSkKehilangans::route('/'),
            'create' => Pages\CreateSkKehilangan::route('/create'),
            'edit' => Pages\EditSkKehilangan::route('/{record}/edit'),
        ];
    }
}
