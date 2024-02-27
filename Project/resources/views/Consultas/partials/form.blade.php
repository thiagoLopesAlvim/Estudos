<input type="hidden" value="{{csrf_token()}}" name="_token"> 
 
    <input type="text" placeholder="Tipo Consulta" name="tipconsulta" value="{{$consulta->tipconsulta ?? old('tipconsulta')}}">
    <input type="text" placeholder="Nome do cliente" name="nomecliente"value="{{$consulta->nomecliente ?? old('nomecliente')}}">
    <input type="text" placeholder="Telefone" name="telefone"value="{{$consulta->telefone ?? old('telefone')}}">
    <input type="text" placeholder="CPF" name="CPF"value="{{$consulta->CPF ?? old('CPF')}}">
    <input type="text" placeholder="Endereço" name="endereco"value="{{$consulta->endereco ?? old('endereco')}}">
    <input type="text" placeholder="Tipo de pagamento" name="tippagamento"value="{{$consulta->tippagamento ?? old('tippagamento')}}">
    <input type="text" placeholder="Data de Nascimento" name="dtnascimento"value="{{$consulta->dtnascimento ?? old('dtnascimento')}}">
    <input type="text" name="is_admin" value="1">
    <textarea name="observacao" cols="30" rows="5" placeholder="Observação">{{$consulta->observacao ?? old('observacao')}}</textarea>
    <button type="submit">Enviar</button>