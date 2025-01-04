<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\EntertainmentActivityResource\Pages;
use App\Filament\App\Resources\EntertainmentActivityResource\RelationManagers;
use App\Models\EntertainmentActivity;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EntertainmentActivityResource extends Resource
{
    protected static ?string $model = EntertainmentActivity::class;
    protected static ?string $modelLabel = '文体活动';
    protected static ?string $pluralModelLabel = '文体活动';
    protected static ?string $navigationGroup = '资讯 & 通知';
    protected static ?int $navigationSort = 6;

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
            'index' => Pages\ListEntertainmentActivities::route('/'),
            'create' => Pages\CreateEntertainmentActivity::route('/create'),
            'edit' => Pages\EditEntertainmentActivity::route('/{record}/edit'),
        ];
    }
}
