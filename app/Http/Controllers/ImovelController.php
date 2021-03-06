<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function validarImovel($request)
    {
        $validator = Validator::make($request->all(),[
            "descricao" => "required",
            "lagradouroEndereco"=> "required",
            "bairroEndereco" => "required",
            "numeroEndereco" => "required | numeric",
            "cepEndereco" => "required",
            "cidadeEndereco" => "required",
            "preco" => "required | numeric",
            "qtdQuartos" => "required | numeric ",
            "tipo" => "required",
            "finalidade" => "required"
        ]);

        return $validator;
    }
     
    public function index(Request $request)
    {
        //Outra forma de usar a paginação 
        /*$qtd = $request['qtd'] ? :2;
        $page = $request['page'] ? : 1;

       Paginator::currentPageResolver(function () use ($page){
            return $page;
        });

        $imoveis = DB::table('imovels')->paginate($qtd);
        $imoveis = $imoveis->appends(Request::capture()->except('page'));
        //dd($imoveis);*/

        $buscar = $request['buscar'];
        $tipo = $request['tipo'];
        $qtde = 3;
        
        if ($buscar) {
            $imoveis = DB::table('imovels')
                            ->where('descricao','like',"%".$buscar."%")
                            ->orwhere('preco', 'like', "%".$buscar."%")
                            ->orwhere('finalidade', 'like',"%".$buscar."%")
                            ->paginate($qtde);

            return view('imoveis.index' , compact('imoveis'));

        } else {
            if ($tipo) {
                $imoveis = DB::table('imovels')
                                ->where('tipo' , '=' , $tipo)
                                ->paginate($qtde);    
            } else {
                $imoveis = Imovel::paginate($qtde);
            }
        }
       
        return view('imoveis.index',compact('imoveis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imoveis.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validarImovel($request);

        if ($validator->fails()) {
           return redirect()->back()->withErrors($validator->errors());
        }

        $dados = $request->all();
        Imovel::create($dados);

        return redirect()->route('imoveis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imovel = Imovel::find($id);
        return view('imoveis.show' , compact('imovel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $imovel = Imovel::find($id);
        return view('imoveis.edit' , compact('imovel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validarImovel($request);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator->errors());
        }

        $imovel = Imovel::find($id);
        $dados = $request->all();
        $imovel->update($dados);

        return redirect()->route('imoveis.index');
    }

    public function remove($id)
    {
        $imovel = Imovel::find($id);
        return view('imoveis.remove', compact('imovel'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Imovel::find($id)->delete();
        return redirect()->route('imoveis.index');
    }
}
