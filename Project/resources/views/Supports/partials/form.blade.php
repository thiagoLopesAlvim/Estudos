<input type="hidden" value="{{csrf_token()}}" name="_token"> 
 
    <input type="text" placeholder="Assunto" name="subject" value="{{$support->subject ?? old('subject')}}">
    <input type="text" name="is_admin" value="1">
    <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{$support->body ?? old('body')}}</textarea>
    <button type="submit">Enviar</button>