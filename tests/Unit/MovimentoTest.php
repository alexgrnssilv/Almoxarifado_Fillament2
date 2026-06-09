<?php

use App\Models\Produto;
use App\Models\Movimentacao;

test('Sistema deve barrar movimentação se a quantidde for maior que o estoque', function(){
    $produtoMock = new Produto([
        'nome' => 'Mouse USB Dell',
        'estoque' => 55,
    ]);


    $movimentacaoMock = new Movimentacao([
        'quantidade' => 10,
        'tipo' => 'saida',
    ]);

    if($movimentacaoMock->tipo === 'saida' && $movimentacaoMock->quantidade > $produtoMock->estoque){
        expect(true)->toBeTrue();
    }else{
        $this->fail("Erro: A regra de negócio permitiu saída de mercadoria sem estoque");
    }

});

test('O sistema deve diminuir o estoque após uma saída autorizada', function(){
    $produto = Produto::create([
        'nome' => 'Teclado mecanico',
        'estoque'=> 15,

    ]);

    // Similar saída válida
Livewire::test(CreateMovimentacao::class)
    ->fillForm([
        'produto_id' => $produto->id,
        'quantidade' => 5,
        'tipo' => 'saida',
])
    ->call('create');

// 2.1 O movimento deve ter sido criado com sucesso no banco
expect(Movimentacao::count())->toBe(1);

// 2.1 O seu hook afterCreate deve ter diminuído o estoque de 15 para 10
expect($produto->fresh()->estoque->toBe(10));
});