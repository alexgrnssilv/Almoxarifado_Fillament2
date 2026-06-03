<?php

namespace App\Filament\Resources\Movimentacaos\Pages;

use App\Filament\Resources\Movimentacaos\MovimentacaoResource;
use Filament\Resources\Pages\CreateRecord;
use App\Models\Produto;
use Filament\Notifications\Notification;

class CreateMovimentacao extends CreateRecord
{
    protected static string $resource = MovimentacaoResource::class;

    protected function beforeCreate(): void
    {
        $dados=$this->data;
        $produto=Produto::find($dados['produto_id']);
        if($dados['tipo'] == 'saida')
        if($dados['quantidade'] > $produto->estoque){
            Notification::make()
            ->warning()
            ->title('Não temos estoque!')
            ->body('Aguarde pelo reabastecimento.')
            ->persistent()
            ->send();
    
        $this->halt();
        }
    }
    
    protected function afterCreate(): void
    {
        $movimentacao = $this->getRecord();
        $produto =Produto::find($movimentacao->produto_id);
        if($movimentacao->tipo=='entrada'){
            $produto->increment('estoque', $movimentacao->quantidade);
        }else{
            $produto->decrement('estoque', $movimentacao->quantidade);
        }
    }
}
