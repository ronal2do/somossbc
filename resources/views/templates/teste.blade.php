@extends('templates.template')

@section('content')
  

             <div class="mdl-grid mdl-cell--12-col">
                <div class="mdl-cell mdl-cell--6-col"><form action="#" class="mdl-textfield">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" id="name" />
                      <label class="mdl-textfield__label" for="name">Nome</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="email" id="email" />
                      <label class="mdl-textfield__label" for="email">Email</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <input class="mdl-textfield__input" type="text" pattern="[0-9]*" id="phone" />
                      <label class="mdl-textfield__label" for="phone">Telefone</label>
                      <span class="mdl-textfield__error">Apenas Números</span>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                      <textarea class="mdl-textfield__input" type="text" rows= "1" id="sample5" ></textarea>
                      <label class="mdl-textfield__label" for="sample5">Mensagem...</label>
                    </div>

                  </form>
                  </div>  
                <div class="mdl-cell mdl-cell--6-col">
                    <div class="docs-text-styling component-title">
          <h3>Tooltips</h3>
          <p>Useful information on hover.</p>
        </div>
              </div>
                
            </div>
          
         
          
       

        


  @endsection