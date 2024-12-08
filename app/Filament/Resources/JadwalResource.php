<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JadwalResource\Pages;
use App\Filament\Resources\JadwalResource\RelationManagers;
use App\Models\Jadwal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Validation\Rule;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Text;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Illuminate\Support\Str;
use Filament\Forms\Set;
use Filament\Tables\Columns;
use Filament\Tables\Filters;
use Filament\Forms\Components\DateTimePicker;
use Filament\Tables\Columns\TextColumn;

class JadwalResource extends Resource
{
    protected static ?string $model = Jadwal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Jadwal Misa';
    
    protected static ?string $navigationGroup = 'Misa';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('jenis_misa')
                    ->label('Jenis Misa')
                    ->options([
                        'Harian' => 'Misa Harian',
                        'Sabtu' => 'Misa Sabtu',
                        'Minggu Pagi' => 'Misa Minggu Pagi',
                        'Minggu Sore' => 'Misa Minggu Sore',
                    ])
                    ->required(),

                TextInput::make('hari')
                    ->label('Hari')
                    ->placeholder('Contoh: Senin - Jumat')
                    ->required(),

                TextInput::make('url')
                    ->label('url youtube')
                    ->placeholder('Contoh: https://youtube.com/....'),
                   
                TextInput::make('stream')
                    ->label('judul misa online')
                    ->placeholder('misa online minggu ke...'),
                   

                DateTimePicker::make('waktu')
                    ->label('Waktu Misa')
                    ->required(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('jenis_misa')
                    ->label('Jenis Misa')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('hari')
                    ->label('Hari')
                    ->sortable()
                    ->searchable(),

                  TextColumn::make('waktu')
                    ->label('Waktu')
                    ->sortable()
    
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
            'index' => Pages\ListJadwals::route('/'),
            'create' => Pages\CreateJadwal::route('/create'),
            'edit' => Pages\EditJadwal::route('/{record}/edit'),
        ];
    }
}
