<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\ContestInformationResource\Pages;
use App\Filament\App\Resources\ContestInformationResource\RelationManagers;
use App\Models\ContestInformation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContestInformationResource extends Resource
{
    protected static ?string $model = ContestInformation::class;
    protected static ?string $modelLabel = '竞赛信息';
    protected static ?string $pluralModelLabel = '竞赛信息';
    protected static ?string $navigationGroup = '资讯 & 通知';
    protected static ?int $navigationSort = 5;

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
            'index' => Pages\ListContestInformation::route('/'),
            'create' => Pages\CreateContestInformation::route('/create'),
            'edit' => Pages\EditContestInformation::route('/{record}/edit'),
        ];
    }
}
