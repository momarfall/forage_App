@extends('layout.default')
@section('content')
    

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">SENFORAGE</h4>
                  <p class="card-category">Liste des Clients
                      <a href="{{route('clients.selectvillage')}}"><div class="btn btn-warning">Nouveau Client <i class="fa fa-plus-circle" aria-hidden="true"></i></div></a> 
                  </p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    @if(session ('message'))
                    <div class="alert alert-succes">
                      {{session('message') }}
                    </div>
                    @endif
                    <table class="table table-hover table-dark table-striped table-dark" id="table-clients">
                        <thead class="thead-dark">
                        <th>
                          ID
                        </th>
                        <th>
                          Nom
                        </th>
                        <th>
                            Prenom
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Action
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
{{--       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> --}}

<!-- Modal -->


<div class="modal fade" id="modal-delete-client" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form method="POST" action="" id="form-delete-client">
    @csrf
    @method('DELETE')

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="">Etes-vous sur de supprimer ce client</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Anuller</button>
        <button type="submit" class="btn btn-primary">Supprimer</button>
      </div>
    </div>
  </div>
</form>
</div>
      @endsection

      @push('scripts')
      <script type="text/javascript">
      $(document).ready(function () {
          $('#table-clients').DataTable( { 
            "processing": true,
            "serverSide": true,
            "ajax": "{{route('clients.list')}}",
            columns: [
                    { data: 'id', name: 'id' },
                    { data: 'user.name', name: 'user.name' },
                    { data: 'user.firstname', name: 'user.firstname' },
                    { data: 'user.email', name: 'user.email' },
                    { data: null ,orderable: false, searchable: false}

                ],
                "columnDefs": [
                        {
                        "data": null,
                        "render": function (data, type, row) {
                        url_e =  "{!! route('clients.edit',':id')!!}".replace(':id', data.id);
                        url_d =  "{!! route('clients.destroy',':id')!!}".replace(':id', data.id);
                        return '<a href='+url_e+'  class=" btn btn-primary " title="Modifier"><i class="fa fa-pencil" aria-hidden="true">&nbsp;Edit</i></a>'+
                        '&nbsp;<div class="btn btn-danger btn-delete-client" title="supprimer" data-href='+url_d+'" title="Supprimer"><i class="fa fa-trash-o" aria-hidden="true">&nbsp;Delete</i></div>';
                        },
                        "targets": 4
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
         
          $("#table-clients").off('click','.btn-delete-client').on('click','.btn-delete-client',
                function(){
                   var href=$(this).data('href');
                  $("#form-delete-client").attr("action",href);
                  $('#modal-delete-client').modal();
                });
              
      });
      </script>

          
      @endpush