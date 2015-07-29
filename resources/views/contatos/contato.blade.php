@extends('templates.template')

@section('content')
  <div class="contato mdl-layout__content">
        <a name="contato"></a>
        <div class="contato mdl-typography--text-center">
      <div class="android-font android-create-character">
        
      </div>

          <a href="#contato">
            <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
              <i class="material-icons">expand_more</i>
            </button>
          </a>
        </div>


    <div class="mdl-grid mdl-cell--12-col">
                <div class="mdl-cell mdl-cell--2-col"> <br /><br />
                    
              </div>
               <div class="mdl-cell mdl-cell--4-col"> <br /><br />
                    <div class="docs-text-styling component-title">
                   
                    <h2 class="mdl-card__title-text">Contato</h2>
                     <p>Prefeitura de São Bernardo do Campo: © 2015 #somosSBC</p>
                      <p>
                      Mussum ipsum cacilds, vidis litro abertis.</p>
                    </div>
              </div>
              <div class="mdl-cell mdl-cell--4-col">
                  <form action="#" class="mdl-textfield">
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
                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">Enviar a sua mensagem</button>
              </div>
               <div class="mdl-cell mdl-cell--2-col"> <br /><br />
                    
              </div>
                
            </div>

            

          </div>
       

        


  @endsection