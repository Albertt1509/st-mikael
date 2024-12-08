<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImageHomeResource\Pages;
use App\Filament\Resources\ImageHomeResource\RelationManagers;
use App\Models\ImageHome;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ImageHomeResource extends Resource
{
    protected static ?string $model = ImageHome::class;
     protected static ?string $navigationLabel = 'Highlights';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                 Section::make('judul')->schema([
                   TextInput::make('judul')
                        ->label('Judul Image')
                        ->required(),
                 ]),
                    Section::make('gambar')->schema([
                    FileUpload::make('gambar')
                        ->multiple()
                        ->directory('ImageHome')
                        ->maxFiles(1)
                        ->reorderable()
                ])->columnSpanFull(2),
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
            'index' => Pages\ListImageHomes::route('/'),
            'create' => Pages\CreateImageHome::route('/create'),
            'edit' => Pages\EditImageHome::route('/{record}/edit'),
        ];
    }
}
