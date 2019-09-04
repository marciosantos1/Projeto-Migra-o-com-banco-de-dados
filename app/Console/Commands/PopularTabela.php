<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;

class PopularTabela extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche as tabelas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $arrayCategorias [0] = "Livros";
        $arrayCategorias [1] = "Automóveis";
        $arrayCategorias [2] = "Roupas";
        
        foreach ($arrayCategorias as $cat);
        $categoria = new App\Categoria();
        $categoria->nomcat = $cat;
        $categoria->save();
        ########################################
        $arrayClientes [0]['nome'] = "Ana souza";
        $arrayClientes [0]['cpf'] = "25874569874";
        $arrayClientes [0] ['endereco'] = "Rua: Alberto ito";
        $arrayClientes [0] ['numero'] = 234;
        $arrayClientes [0] ['bairro'] = "Maluche";
        $arrayClientes [0] ['cidade'] = "Brusque";
        
        
        
        foreach ($arrayClientes as $cli);
        $cliente = new App\Cliente();
        $cliente->nomcli = $cli ['nome'];
        $cliente->cpfcli = $cli ['cpf'];
        $cliente->endcli = $cli ['endereco'];
        $cliente->numcli = $cli ['numero'];
        $cliente->baicli = $cli ['bairro'];
        $cliente->cidcli = $cli ['cidade'];
        
        $cliente->save();
        #########################################
        
        
        
    }
}
