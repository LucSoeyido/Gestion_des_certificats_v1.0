@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><-- TABLEAU DE BORD</a></li>
                <li class="breadcrumb-item active" aria-current="page">Modification</li>
              </ol>
        </nav>
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;">MODIFICATION DE {{$certifupdate->nom}} </div>

                <div class="panel-body">
                  <form id="form_validation" method="POST" action="{{route('certif.update',$certifupdate->id)}}">
                                 {{ csrf_field() }}
                                  {{method_field('PUT')}}

                                <div class="form-group form-float" class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                                    <div class="form-line">
                                       <label class="form-label">Nom </label>
                                        <input type="text" class="form-control" name="nom" value="{{$certifupdate->nom}}" required>
                                       
                                          @if ($errors->has('nom'))
                                    <span class="help-block" style="color: red;">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
                                <div class="form-group form-float" class="form-group{{ $errors->has('prenom') ? ' has-error' : '' }}">
                                    <div class="form-line">
                                      <label class="form-label">Prénom</label>
                                        <input type="text" class="form-control" name="prenom" value="{{$certifupdate->prenom}}" required>
                                        
                                          @if ($errors->has('prenom'))
                                          <span class="help-block"style="color: red;">
                                             <strong>{{ $errors->first('prenom') }}</strong>
                                          </span>
                                          @endif
                                    </div>
                                </div>
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                     <label class="form-label">Sexe </label>
                                    <select class="form-control show-tick" name="sexe" required>
                                        <option value="{{$certifupdate->sexe}}">{{$certifupdate->sexe}}</option>
                                        <option value="Masculin">Masculin</option>
                                        <option value="Féminin">Féminin</option>
                                       
                                    </select>
                                </div>
                                </div>
                                <div class="form-group form-float" class="form-group{{ $errors->has('categorie') ? ' has-error' : '' }}">
                                    <div class="form-line">
                                        <label class="form-label">Catégorie</label>
                                        <input type="text" class="form-control" name="categorie"  value="{{$certifupdate->categorie}}" required>
                                        
                                         @if ($errors->has('categorie'))
                                            <span class="help-block"style="color: red;">
                                                <strong>{{ $errors->first('categorie') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                </div>
                                <div class="form-group form-float" class="form-group{{ $errors->has('club') ? ' has-error' : '' }}">
                                    <div class="form-line">
                                      <label class="form-label">Nom du club</label>
                                        <input type="text" class="form-control" name="club"  value="{{$certifupdate->club}}" required>
                                        
                                         @if ($errors->has('club'))
                                            <span class="help-block" style="color: red;">
                                                <strong>{{ $errors->first('club') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                </div>
                                 <div class="form-group form-float" class="form-group{{ $errors->has('assurance') ? ' has-error' : '' }}">
                                    <div class="form-line">
                                       <label class="form-label">Nom de l'Assurance</label>
                                        <input type="text" class="form-control" name="assurance"  value="{{$certifupdate->assurance}}" required>
                                       
                                         @if ($errors->has('assurance'))
                                            <span class="help-block"style="color: red;">
                                                <strong>{{ $errors->first('assurance') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                </div>
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                     <label class="form-label">Group sanguin</label>
                                    <select class="form-control show-tick" name="sang" >
                                        <option value="{{$certifupdate->sang}}">{{$certifupdate->sang}}</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                         <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                         <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                       
                                    </select>
                                </div>
                                </div>
                                <div class="row clearfix">
                                <div class="col-sm-6">
                                   <label class="form-label">La visite médicale est elle à jour?</label>
                                 <select class="form-control show-tick" name="medical"
                                  required>
                                        <option value="{{$certifupdate->medical}}">{{$certifupdate->medical}}</option>
                                        <option value="OUI">OUI</option>
                                        <option value="NON">NON</option>
                                       
                                    </select>
                                </div>
                                </div>
                                 <div class="form-group form-float" class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
                                    <div class="form-line">
                                      <label class="form-label">Téléphone</label>
                                        <input type="tel" class="form-control" name="tel"  value="{{$certifupdate->tel}}" required>
                                        
                                         @if ($errors->has('tel'))
                                            <span class="help-block"style="color: red;">
                                                <strong>{{ $errors->first('tel') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                </div>
                                   <div class="form-group form-float" class="form-group{{ $errors->has('licence') ? ' has-error' : '' }}">
                                    <div class="form-line">
                                        <label class="form-label">Numéro de Licence</label>
                                        <input type="text" class="form-control" name="licence"  value="{{$certifupdate->licence}}" required>
                                        
                                         @if ($errors->has('licence'))
                                            <span class="help-block"style="color: red;">
                                                <strong>{{ $errors->first('licence') }}</strong>
                                            </span>
                                         @endif
                                    </div>
                                    </div>
                                    
                                     <div style="display:inline;text-align: center;">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3" >
                                      
                                        <div class="input-group"style="display:inline-block;text-align: center;">
                                            
                                         Date de validité
                                         
                                                <input type="text" class="form-control date" name="date_valide" value="{{$certifupdate->date_valide}}">
                                            </div>
                                             
                                        </div>
                                    </div>
                            </div>
                           
                        </div>
                                
                                
                                
                            <div style="text-align: center;">
                               
                                <button class="btn btn-primary waves-effect" type="submit">METTRE A JOUR</button>
                            </div>
                            </form>
                            
                
          
       </div>
      </div>
      </div>
   </div>
    </div>
 @endsection
