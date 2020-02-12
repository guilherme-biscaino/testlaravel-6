@extends('admin.layouts.app')

@section('content')

      <div class="row">
        <div class="col-md-12">
          <h1>Contato</h1>
          <hr>
          <form>
              <div class="form-group">
                <label name="email">Email:</label>
                <input id="email" name="email" class="form-control">
              </div>
              <div class="form-group">
                <label name="assunto">Assunto:</label>
                <input id="assunto" name="assunto" class="form-control">
              </div>
              <div class="form-group">
                <label name="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" class="form-control" placeholder="Escreva sua mensagem aqui..."></textarea>
              </div>
              <input type="submit" class="btn btn-success" value="Enviar">
          </form>
        </div>
      </div>

@endsection
