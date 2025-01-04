<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\RecruitmentInformationResource\Pages;
use App\Filament\Admin\Resources\RecruitmentInformationResource\RelationManagers;
use App\Models\RecruitmentInformation;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RecruitmentInformationResource extends Resource
{
    protected static ?string $model = RecruitmentInformation::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
            'index' => Pages\ListRecruitmentInformation::route('/'),
            'create' => Pages\CreateRecruitmentInformation::route('/create'),
            'edit' => Pages\EditRecruitmentInformation::route('/{record}/edit'),
        ];
    }
}
