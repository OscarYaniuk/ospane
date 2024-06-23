<?php

namespace App\Filament\Resources;

use App\Filament\Resources\QuestionResource\Pages;
use App\Filament\Resources\QuestionResource\RelationManagers;
use App\Models\CategoryQuestion;
use App\Models\Level;
use App\Models\Question;
use App\Models\Scale;
use App\Models\TypeQuestion;
use App\Models\User;
use Faker\Provider\ar_EG\Text;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;

use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;



class QuestionResource extends Resource
{
    protected static ?string $model = Question::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('title')
                    ->label('Título de la pregunta')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('n_question')
                    ->label('Número de pregunta')
                    ->required()
                    ->numeric(),
                TextInput::make('n_article')
                    ->label('Número de artículo')
                    ->required()
                    ->numeric(),
                Textarea::make('question')
                    ->label('Pregunta')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('option1')
                    ->label('Opción 1')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('option2')
                    ->label('Opción 2')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('option3')
                    ->label('Opción 3')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('option4')
                    ->label('Opción 4')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('answer')
                    ->label('Respuesta')
                    ->required()
                    ->maxLength(255),
                TextInput::make('justificado1')
                    ->label('Justificación 1')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('justificado2')
                    ->label('Justificación 2')
                    ->maxLength(255)
                    ->default(null),
                TextInput::make('justificado3')
                    ->label('Justificación 3')
                    ->maxLength(255)
                    ->default(null),
                Textarea::make('observation')
                    ->label('Observación')
                    ->columnSpanFull(),
                Select::make('level_id')
                    ->label('Nivel')
                    ->options(Level::all()->pluck('name', 'id'))
                    ->searchable(),
                Select::make('type_question_id')
                    ->label('Tipo de pregunta')
                    ->options(TypeQuestion::all()->pluck('name', 'id'))
                    ->searchable(),
                Select::make('category_question_id')
                    ->label('Categoría de pregunta')
                    ->options(CategoryQuestion::all()->pluck('name', 'id'))
                    ->searchable(),
                Select::make('sale_id')
                    ->label('Escala')
                    ->options(Scale::all()->pluck('name', 'id'))
                    ->searchable(),
                TextInput::make('course_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('section_id')
                    ->numeric()
                    ->default(null),
                TextInput::make('lesson_id')
                    ->numeric()
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Título de la pregunta')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('n_question')
                    ->label('Número de pregunta')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('n_article')
                    ->label('Número de artículo')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('question')
                    ->label('Pregunta')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('n_question')
                    ->label('Número de pregunta')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('n_article')
                    ->label('Número de artículo')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('answer')
                    ->label('Respuesta')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('justificado1')
                    ->label('Justificación 1')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('justificado2')
                ->label('Justificación 2')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('justificado3')
                ->label('Justificación 3')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('level_id')
                    ->label('Nivel')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('type_question_id')
                    ->label('Tipo de pregunta')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('category_question_id')
                    ->label('Categoría de pregunta')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('scale_id')
                    ->label('Escala')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('course_id')
                    ->label('Curso')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('section_id')
                    ->label('Sección')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('lesson_id')
                    ->label('Lección')
                    ->numeric()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label('Creado el')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('Actualizado el')
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
            'index' => Pages\ListQuestions::route('/'),
            'create' => Pages\CreateQuestion::route('/create'),
            'edit' => Pages\EditQuestion::route('/{record}/edit'),
        ];
    }
}
