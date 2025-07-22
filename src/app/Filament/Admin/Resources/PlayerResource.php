<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PlayerResource\Pages;
use App\Models\Club;
use App\Models\Player;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class PlayerResource extends Resource
{
    protected static ?string $model = Player::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationLabel = 'Players';
    protected static ?string $pluralModelLabel = 'Players';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('age')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('position')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('nationality')
                    ->maxLength(255)
                    ->label('Nationality')
                    ->nullable(),

                Forms\Components\TextInput::make('height')
                    ->numeric()
                    ->label('Height (cm)')
                    ->nullable(),

                Forms\Components\TextInput::make('weight')
                    ->numeric()
                    ->label('Weight (kg)')
                    ->nullable(),

                Forms\Components\Select::make('preferred_foot')
                    ->label('Preferred Foot')
                    ->options([
                        'Left' => 'Left',
                        'Right' => 'Right',
                    ])
                    ->nullable(),

                Forms\Components\TextInput::make('jersey_number')
                    ->numeric()
                    ->label('Jersey Number')
                    ->nullable(),

                Forms\Components\Select::make('club_id')
                    ->label('Club')
                    ->relationship('club', 'name')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('age'),
                Tables\Columns\TextColumn::make('position'),
                Tables\Columns\TextColumn::make('nationality'),
                Tables\Columns\TextColumn::make('preferred_foot')->label('Foot'),
                Tables\Columns\TextColumn::make('jersey_number')->label('Number'),
                Tables\Columns\TextColumn::make('club.name')->label('Club'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->label('Created'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPlayers::route('/'),
            'create' => Pages\CreatePlayer::route('/create'),
            'edit' => Pages\EditPlayer::route('/{record}/edit'),
        ];
    }
}
