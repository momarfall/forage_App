@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> Factures
                      <a href="{{route('factures.create')}}"><div class="btn btn-warning">Nouveau Compteur <i class="fa fa-plus-circle" aria-hidden="true"></i></div></a> 
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-factures">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        
                        <th>
                            Date_limite
                        </th>
                      {{--   <th>
                           details
                        </th> --}}
                        <th>
                          montant
                        </th>
                        <th>
                         debut_consommation
                        </th>
                        <th>
                            fin_consommation
                        </th>
                        <th>
                          reglement_type
                      </th>
                        <th>
                          action
                        </th>
                        
                      </thead>
                      <tbody>
                          
                      </tbody>
                     
                    </table>
                
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              
            </div>
          </div>
        </div>
      </div>
      @endsection

      @push('scripts')
      <script type="text/javascript">
      $(document).ready(function () {
          $('#table-factures').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('factures.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'date_limite', name: 'date_limite' },//pour recuperer les données de la base
                   // { data: 'details', name: 'details' },
                    { data: 'montant', name: ' montant' },
                    { data: 'debut_consommation', name: 'debut_consommation' },
                    { data: 'fin_consommation', name: 'fin_consommation' },
                    { data: 'reglement.type.name', name: 'reglement.type.name' },

                   // { data: 'user.email', name: 'user.email' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('factures.show',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('reglements.create',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " title="Afficher">&nbsp;Afficher</i></a>'+
                        '&nbsp;<a class="btn btn-danger" href='+url_d+'" title="Effectuer un Reglement">&nbsp;Effectuer un Reglement</i></a>';
                        },
                        "targets": 6  //definir le nombre de champ a recuperer dans la base 
                        },
                    // {
                    //     "data": null,
                    //     "render": function (data, type, row) {
                    //         url =  "{!! route('clients.edit',':id')!!}".replace(':id', data.id);
                    //         return check_status(data,url);
                    //     },
                    //     "targets": 1
                    // }
                ],
              
          });
      });
      </script>

          
      @endpush