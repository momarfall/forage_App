@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category"> Compteurs
                      <a href="{{route('compteurs.create')}}"><div class="btn btn-warning">Nouveau Compteur <i class="fa fa-plus-circle" aria-hidden="true"></i></div></a> 
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table" id="table-compteurs">
                      <thead class=" text-primary">
                        <th>
                          ID
                        </th>
                        
                        <th>
                            Numero serie
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
          $('#table-compteurs').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('compteurs.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'numero_serie', name: 'numero.serie' },//pour recuperer les données de la base
                   // { data: 'user.email', name: 'user.email' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('compteurs.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('compteurs.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " title="Modifier"><i class="fa fa-pencil" aria-hidden="true">&nbsp;Edit</i></a>'+
                        '&nbsp;<a class="btn btn-danger" href='+url_d+'" title="Supprimer"><i class="fa fa-trash-o" aria-hidden="true">&nbsp;Delete</i></a>';
                        },
                        "targets": 2  //definir le nombre de champ a recuperer dans la base 
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