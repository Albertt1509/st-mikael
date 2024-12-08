<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BeritaResource\Pages;
use App\Filament\Resources\BeritaResource\RelationManagers;
use App\Models\Berita;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
class BeritaResource extends Resource

{
    protected static ?string $model = Berita::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    
    protected static ?string $navigationLabel = 'Berita';

    protected static ?string $title = 'Judul Edit Berita';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Informasi Berita')->schema([
                    TextInput::make('judul')
                        ->label('Judul Berita')
                        ->placeholder('Contoh: Retret Advent, Perayaan Natal')
                        ->required(),
                    
                    MarkdownEditor::make('deskripsi')
                        ->label('Deskripsi')
                        ->placeholder('Cukup tulis saja berita yang perlu dimasukkan, tidak perlu input gambar di inputan deskripsi')
                        ->columnSpanFull(),
                ])->columns(2),

                Section::make('gambar')->schema([
                    FileUpload::make('gambar')
                        ->multiple()
                        ->directory('Berita')
                        ->maxFiles(5)
                        ->reorderable()
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->label('Judul')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('deskripsi')
                    ->label('Deskripsi Berita')
                    ->sortable()
                    ->searchable()
                    ->limit(50),

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
            'index' => Pages\ListBeritas::route('/'),
            'create' => Pages\CreateBerita::route('/create'),
            'edit' => Pages\EditBerita::route('/{record}/edit'),
        ];
    }
}
