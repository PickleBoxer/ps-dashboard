<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Models\User;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use App\Filament\Resources\UserResource;
use Filament\Support\Enums\IconPosition;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make()
                ->icon('heroicon-m-user-group')
                ->iconPosition(IconPosition::Before),
            'active' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('active', true))
                ->icon('heroicon-m-check-circle')
                ->iconPosition(IconPosition::Before)
                ->badge(User::query()->where('active', true)->count()),
            'inactive' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('active', false))
                ->icon('heroicon-m-no-symbol')
                ->iconPosition(IconPosition::Before)
                ->badge(User::query()->where('active', false)->count()),
        ];
    }
}
