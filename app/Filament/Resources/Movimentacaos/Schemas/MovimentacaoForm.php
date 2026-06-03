<?php

namespace App\Filament\Resources\Movimentacaos\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class MovimentacaoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('produto_id')
                    ->required()
                    ->label('nome')
                    ->relationship('produto', 'nome'),
                TextInput::make('quantidade')
                    ->required()
                    ->numeric(),
                Select::make('tipo')
                    ->options(['saida' => 'Saida', 'entrada' => 'Entrada'])
                    ->required(),
            ]);
    }
}
